<?php

use JeffersonGoncalves\Filament\QuebecPia\QuebecPiaPlugin;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\ImpactAssessmentActions;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\ImpactAssessmentResource;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\CreateImpactAssessment;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\EditImpactAssessment;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\ListImpactAssessments;
use JeffersonGoncalves\Filament\QuebecPia\Tests\Fixtures\TestUser;
use JeffersonGoncalves\QuebecGovernance\Models\ProcessingActivity;
use JeffersonGoncalves\QuebecPia\Enums\AssessmentStatus;
use JeffersonGoncalves\QuebecPia\Enums\AssessmentType;
use JeffersonGoncalves\QuebecPia\Enums\RiskLevel;
use JeffersonGoncalves\QuebecPia\Models\ImpactAssessment;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'Marie Tremblay', 'email' => 'privacy@example.com']));
});

function risky(): ImpactAssessment
{
    return ImpactAssessment::create([
        'title' => 'Fraud scoring',
        'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => 2, 'impact' => 3, 'residual_likelihood' => 1, 'residual_impact' => 3]],
    ]);
}

it('creates an assessment linked to a processing activity, with scored risks', function () {
    $activity = ProcessingActivity::create(['name' => 'Fraud scoring', 'purpose' => 'Prevent fraud']);

    Livewire::test(CreateImpactAssessment::class)
        ->fillForm([
            'title' => 'Fraud scoring',
            'processing_activity_id' => $activity->getKey(),
            'necessity' => 'Only payment metadata',
            'risks' => [['title' => 'Wrong denial', 'threat' => 'unawareness', 'likelihood' => '2', 'impact' => '3', 'residual_likelihood' => '1', 'residual_impact' => '3']],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    $dpia = ImpactAssessment::sole();

    expect($dpia->processingActivity->is($activity))->toBeTrue()
        ->and($dpia->highestRisk(residual: false))->toBe(RiskLevel::High)
        ->and($dpia->highestRisk())->toBe(RiskLevel::Medium);
});

it('lists assessments with their risk levels', function () {
    $dpia = risky();

    Livewire::test(ListImpactAssessments::class)
        ->assertCanSeeTableRecords([$dpia])
        ->assertSee('High')
        ->assertSee('Medium')
        ->assertSee('Draft');
});

it('approves with the approver name', function () {
    $dpia = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('approve', ['approved_by' => 'Marie Tremblay (person in charge)'])
        ->assertHasNoActionErrors();

    expect($dpia->fresh())
        ->status->toBe(AssessmentStatus::Approved)
        ->approved_by->toBe('Marie Tremblay (person in charge)')
        ->next_review_at->not->toBeNull();
});

it('refuses to approve without risks', function () {
    $dpia = ImpactAssessment::create(['title' => 'Empty']);

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('approve', ['approved_by' => 'Person in charge']);

    expect($dpia->fresh()->status)->toBe(AssessmentStatus::Draft);
});

it('exports one assessment as JSON', function () {
    $dpia = risky();

    Livewire::test(EditImpactAssessment::class, ['record' => $dpia->getKey()])
        ->callAction('export')
        ->assertFileDownloaded('pia-'.$dpia->getKey().'.json');
});

it('shows the processing activities that still need an assessment', function () {
    ProcessingActivity::create(['name' => 'Telehealth', 'purpose' => 'Appointments', 'models' => [TestUser::class]]);

    Livewire::test(ListImpactAssessments::class)->assertActionVisible('candidates');

    expect((string) ImpactAssessmentActions::candidates()->getModalContent())
        ->toContain('Telehealth')
        ->toContain('sensitive information (s. 12)');
});

it('approves a communication outside Quebec only with its destination and conclusion', function () {
    $pia = ImpactAssessment::create(['title' => 'Hosting in Ontario', 'type' => AssessmentType::OutsideQuebec, 'risks' => [
        ['title' => 'Access by the host', 'likelihood' => 2, 'impact' => 2],
    ]]);

    Livewire::test(EditImpactAssessment::class, ['record' => $pia->getKey()])
        ->callAction('approve', ['approved_by' => 'Person in charge']);

    expect($pia->fresh()->status)->toBe(AssessmentStatus::Draft);

    $pia->update(['destination' => 'Ontario', 'adequate_protection' => true]);

    Livewire::test(EditImpactAssessment::class, ['record' => $pia->getKey()])
        ->callAction('approve', ['approved_by' => 'Person in charge']);

    expect($pia->fresh()->allowsCommunication())->toBeTrue();

    Livewire::test(ListImpactAssessments::class)
        ->assertTableColumnStateSet('allows_communication', true, $pia);
});

it('applies the fluent plugin options', function () {
    QuebecPiaPlugin::get()->navigationGroup('Quebec')->slug('efvp');

    expect(ImpactAssessmentResource::getNavigationGroup())->toBe('Quebec')
        ->and(ImpactAssessmentResource::getSlug())->toBe('efvp');
});
