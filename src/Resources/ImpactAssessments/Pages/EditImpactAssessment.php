<?php

namespace JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\ImpactAssessmentActions;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\ImpactAssessmentResource;

class EditImpactAssessment extends EditRecord
{
    protected static string $resource = ImpactAssessmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImpactAssessmentActions::approve(),
            ImpactAssessmentActions::export(),
            DeleteAction::make(),
        ];
    }
}
