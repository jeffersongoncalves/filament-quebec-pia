<?php

return [
    'resource' => [
        'label' => 'Privacy-effectbeoordeling',
        'plural_label' => 'Privacy-effectbeoordelingen (EFVP)',
    ],

    'fields' => [
        'title' => 'Titel',
        'type' => 'Type',
        'processing_activity' => 'Verwerkingsactiviteit',
        'description' => 'Beschrijving van het project',
        'necessity' => 'Noodzaak en evenredigheid',
        'risks' => 'Risico\'s',
        'risk_title' => 'Risico',
        'threat' => 'Dreiging (LINDDUN)',
        'likelihood' => 'Waarschijnlijkheid',
        'impact' => 'Impact',
        'measures' => 'Beschermingsmaatregelen, inclusief contractuele',
        'residual_likelihood' => 'Waarschijnlijkheid na maatregelen',
        'residual_impact' => 'Impact na maatregelen',
        'destination' => 'Bestemming (provincie of land)',
        'legal_framework' => 'Rechtskader van de bestemming en de privacybeginselen ervan (art. 17)',
        'adequate_protection' => 'De informatie zou passend worden beschermd (art. 17)',
        'portability' => 'Het systeem kan geautomatiseerde informatie verstrekken in een gestructureerd, gangbaar formaat (art. 3.3)',
        'person_in_charge_opinion' => 'Advies van de persoon die verantwoordelijk is voor de bescherming van persoonlijke informatie',
        'status' => 'Status',
        'inherent_risk' => 'Hoogste risico',
        'residual_risk' => 'Hoogste restrisico',
        'next_review_at' => 'Volgende beoordeling',
        'allows_communication' => 'Mag verstrekken',
        'approved_by' => 'Goedgekeurd door',
    ],

    'help' => [
        'description' => 'Het project, de informatie die het verzamelt en waarom, in verhouding tot gevoeligheid, doel, hoeveelheid, verspreiding en drager (art. 3.3).',
        'necessity' => 'Waarom de informatie nodig is en het project in verhouding staat tot de doeleinden.',
        'risks' => 'Risiconiveau = waarschijnlijkheid x impact: 1-2 laag, 3-4 gemiddeld, 6-9 hoog. Zonder scores na maatregelen is het restrisico het inherente risico.',
        'outside_quebec' => 'Alleen buiten Quebec: verstrek pas na goedkeuring, met passende bescherming.',
        'portability' => 'Alleen projecten (art. 3.3).',
        'person_in_charge_opinion' => 'Raadpleeg de verantwoordelijke persoon vanaf het begin van het project (art. 3.3).',
        'candidates' => 'Verwerkingsactiviteiten met gevoelige informatie of profilering zonder projectbeoordeling, of buiten Quebec verstrekt zonder beoordeling daarvoor.',
        'no_candidates' => 'Elk van deze verwerkingsactiviteiten heeft een beoordeling.',
    ],

    'scale' => [
        '1' => '1 - Laag',
        '2' => '2 - Gemiddeld',
        '3' => '3 - Hoog',
    ],

    'levels' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'types' => [
        'project' => 'Informatiesysteemproject (art. 3.3)',
        'outside_quebec' => 'Verstrekking buiten Quebec (art. 17)',
        'research' => 'Onderzoek (art. 21)',
    ],

    'threats' => [
        'linking' => 'Koppeling',
        'identifying' => 'Identificatie',
        'non_repudiation' => 'Onweerlegbaarheid',
        'detecting' => 'Detectie',
        'data_disclosure' => 'Openbaarmaking van gegevens',
        'unawareness' => 'Onwetendheid',
        'non_compliance' => 'Niet-naleving',
    ],

    'statuses' => [
        'draft' => 'Concept',
        'approved' => 'Goedgekeurd',
        'review_due' => 'Beoordeling nodig',
    ],

    'reasons' => [
        'sensitive' => 'gevoelige informatie (art. 12)',
        'profiling' => 'profilering (art. 8.1)',
        'outside_quebec' => 'buiten Quebec verstrekt (art. 17)',
    ],

    'actions' => [
        'approve' => 'Goedkeuren',
        'export' => 'Exporteren (JSON)',
        'candidates' => 'Ontbrekende beoordelingen',
        'close' => 'Sluiten',
    ],

    'notifications' => [
        'approved' => 'Beoordeling goedgekeurd',
        'no_risks' => 'Beoordeel ten minste één risico voordat u goedkeurt.',
    ],
];
