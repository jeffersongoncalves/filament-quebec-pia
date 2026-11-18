<?php

namespace JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments;

use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action as TableAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use JeffersonGoncalves\Filament\QuebecPia\QuebecPiaPlugin;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\CreateImpactAssessment;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\EditImpactAssessment;
use JeffersonGoncalves\Filament\QuebecPia\Resources\ImpactAssessments\Pages\ListImpactAssessments;
use JeffersonGoncalves\QuebecPia\Enums\AssessmentStatus;
use JeffersonGoncalves\QuebecPia\Enums\AssessmentType;
use JeffersonGoncalves\QuebecPia\Enums\RiskLevel;
use JeffersonGoncalves\QuebecPia\Enums\Threat;
use JeffersonGoncalves\QuebecPia\Models\ImpactAssessment;

class ImpactAssessmentResource extends Resource
{
    protected static ?string $model = ImpactAssessment::class;

    public static function form(Form $form): Form
    {
        $scale = [1 => static::label('scale.1'), 2 => static::label('scale.2'), 3 => static::label('scale.3')];

        return $form
            ->columns(2)
            ->schema([
                TextInput::make('title')
                    ->label(static::label('fields.title'))
                    ->required()
                    ->maxLength(255),
                Select::make('type')
                    ->label(static::label('fields.type'))
                    ->options(static::enumOptions(AssessmentType::cases(), 'types'))
                    ->default(AssessmentType::Project->value)
                    ->required(),
                Select::make('processing_activity_id')
                    ->label(static::label('fields.processing_activity'))
                    ->relationship('processingActivity', 'name')
                    ->searchable()
                    ->preload(),
                Textarea::make('description')
                    ->label(static::label('fields.description'))
                    ->helperText(static::label('help.description'))
                    ->columnSpanFull(),
                Textarea::make('necessity')
                    ->label(static::label('fields.necessity'))
                    ->helperText(static::label('help.necessity'))
                    ->columnSpanFull(),
                Repeater::make('risks')
                    ->label(static::label('fields.risks'))
                    ->helperText(static::label('help.risks'))
                    ->schema([
                        TextInput::make('title')
                            ->label(static::label('fields.risk_title'))
                            ->required()
                            ->columnSpan(2),
                        Select::make('threat')
                            ->label(static::label('fields.threat'))
                            ->options(static::enumOptions(Threat::cases(), 'threats')),
                        Select::make('likelihood')
                            ->label(static::label('fields.likelihood'))
                            ->options($scale)
                            ->required(),
                        Select::make('impact')
                            ->label(static::label('fields.impact'))
                            ->options($scale)
                            ->required(),
                        Textarea::make('measures')
                            ->label(static::label('fields.measures'))
                            ->columnSpanFull(),
                        Select::make('residual_likelihood')
                            ->label(static::label('fields.residual_likelihood'))
                            ->options($scale),
                        Select::make('residual_impact')
                            ->label(static::label('fields.residual_impact'))
                            ->options($scale),
                    ])
                    ->columns(3)
                    ->defaultItems(0)
                    ->itemLabel(fn (array $state): ?string => $state['title'] ?? null)
                    ->collapsible()
                    ->columnSpanFull(),
                TextInput::make('destination')
                    ->label(static::label('fields.destination'))
                    ->helperText(static::label('help.outside_quebec')),
                Toggle::make('adequate_protection')
                    ->label(static::label('fields.adequate_protection'))
                    ->inline(false),
                Textarea::make('legal_framework')
                    ->label(static::label('fields.legal_framework'))
                    ->columnSpanFull(),
                Toggle::make('portability')
                    ->label(static::label('fields.portability'))
                    ->helperText(static::label('help.portability'))
                    ->columnSpanFull(),
                Textarea::make('person_in_charge_opinion')
                    ->label(static::label('fields.person_in_charge_opinion'))
                    ->helperText(static::label('help.person_in_charge_opinion'))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(static::label('fields.title'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label(static::label('fields.type'))
                    ->formatStateUsing(fn (AssessmentType $state): string => static::label("types.{$state->value}"))
                    ->badge()
                    ->color('gray'),
                TextColumn::make('processingActivity.name')
                    ->label(static::label('fields.processing_activity'))
                    ->placeholder('-'),
                TextColumn::make('status')
                    ->label(static::label('fields.status'))
                    ->state(fn (ImpactAssessment $record): string => $record->isReviewDue() ? 'review_due' : $record->status->value)
                    ->formatStateUsing(fn (string $state): string => static::label("statuses.{$state}"))
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'review_due' => 'danger',
                        default => 'gray',
                    })
                    ->badge(),
                TextColumn::make('inherent_risk')
                    ->label(static::label('fields.inherent_risk'))
                    ->state(fn (ImpactAssessment $record): ?string => $record->highestRisk(residual: false)?->value)
                    ->formatStateUsing(fn (string $state): string => static::label("levels.{$state}"))
                    ->color(fn (string $state): string => static::levelColor($state))
                    ->badge()
                    ->placeholder('-'),
                TextColumn::make('residual_risk')
                    ->label(static::label('fields.residual_risk'))
                    ->state(fn (ImpactAssessment $record): ?string => $record->highestRisk()?->value)
                    ->formatStateUsing(fn (string $state): string => static::label("levels.{$state}"))
                    ->color(fn (string $state): string => static::levelColor($state))
                    ->badge()
                    ->placeholder('-'),
                IconColumn::make('allows_communication')
                    ->label(static::label('fields.allows_communication'))
                    ->state(fn (ImpactAssessment $record): ?bool => $record->type === AssessmentType::OutsideQuebec ? $record->allowsCommunication() : null)
                    ->boolean(),
                TextColumn::make('next_review_at')
                    ->label(static::label('fields.next_review_at'))
                    ->date()
                    ->sortable()
                    ->placeholder('-'),
            ])
            ->defaultSort('title')
            ->filters([
                SelectFilter::make('type')
                    ->label(static::label('fields.type'))
                    ->options(static::enumOptions(AssessmentType::cases(), 'types')),
                SelectFilter::make('status')
                    ->label(static::label('fields.status'))
                    ->options(static::enumOptions(AssessmentStatus::cases(), 'statuses')),
                Filter::make('due_for_review')
                    ->label(static::label('statuses.review_due'))
                    ->query(fn (Builder $query): Builder => $query->scopes('dueForReview')),
            ])
            ->actions([
                EditAction::make(),
                ImpactAssessmentActions::approve(TableAction::class),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListImpactAssessments::route('/'),
            'create' => CreateImpactAssessment::route('/create'),
            'edit' => EditImpactAssessment::route('/{record}/edit'),
        ];
    }

    public static function levelColor(string $level): string
    {
        return match (RiskLevel::tryFrom($level)) {
            RiskLevel::High => 'danger',
            RiskLevel::Medium => 'warning',
            default => 'success',
        };
    }

    /**
     * @param  list<\UnitEnum&BackedEnum>  $cases
     * @return array<string, string>
     */
    public static function enumOptions(array $cases, string $group): array
    {
        return collect($cases)
            ->mapWithKeys(fn (BackedEnum $case): array => [(string) $case->value => static::label("{$group}.{$case->value}")])
            ->all();
    }

    public static function label(string $key): string
    {
        return __("filament-quebec-pia::filament-quebec-pia.{$key}");
    }

    public static function getModelLabel(): string
    {
        return static::label('resource.label');
    }

    public static function getPluralModelLabel(): string
    {
        return static::label('resource.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return QuebecPiaPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return QuebecPiaPlugin::get()->getNavigationSort();
    }

    public static function getNavigationIcon(): ?string
    {
        return QuebecPiaPlugin::get()->getNavigationIcon();
    }

    public static function getSlug(): string
    {
        return QuebecPiaPlugin::get()->getSlug();
    }
}
