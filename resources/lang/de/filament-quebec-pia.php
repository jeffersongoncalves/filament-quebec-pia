<?php

return [
    'resource' => [
        'label' => 'Datenschutz-Folgenabschätzung',
        'plural_label' => 'Datenschutz-Folgenabschätzungen (EFVP)',
    ],

    'fields' => [
        'title' => 'Titel',
        'type' => 'Typ',
        'processing_activity' => 'Verarbeitungstätigkeit',
        'description' => 'Beschreibung des Projekts',
        'necessity' => 'Notwendigkeit und Verhältnismäßigkeit',
        'risks' => 'Risiken',
        'risk_title' => 'Risiko',
        'threat' => 'Bedrohung (LINDDUN)',
        'likelihood' => 'Eintrittswahrscheinlichkeit',
        'impact' => 'Auswirkung',
        'measures' => 'Schutzmaßnahmen, einschließlich vertraglicher',
        'residual_likelihood' => 'Wahrscheinlichkeit nach Maßnahmen',
        'residual_impact' => 'Auswirkung nach Maßnahmen',
        'destination' => 'Ziel (Provinz oder Land)',
        'legal_framework' => 'Rechtsrahmen des Ziels und seine Datenschutzgrundsätze (Art. 17)',
        'adequate_protection' => 'Die Informationen würden angemessen geschützt (Art. 17)',
        'portability' => 'Das System kann computergestützte Informationen in einem strukturierten, gängigen Format übermitteln (Art. 3.3)',
        'person_in_charge_opinion' => 'Stellungnahme der für den Schutz personenbezogener Informationen verantwortlichen Person',
        'status' => 'Status',
        'inherent_risk' => 'Höchstes Risiko',
        'residual_risk' => 'Höchstes Restrisiko',
        'next_review_at' => 'Nächste Prüfung',
        'allows_communication' => 'Darf übermitteln',
        'approved_by' => 'Genehmigt von',
    ],

    'help' => [
        'description' => 'Das Projekt, die erhobenen Informationen und warum, im Verhältnis zu Sensibilität, Zweck, Umfang, Verbreitung und Träger (Art. 3.3).',
        'necessity' => 'Warum die Informationen erforderlich sind und das Projekt seinen Zwecken angemessen ist.',
        'risks' => 'Risikostufe = Wahrscheinlichkeit x Auswirkung: 1-2 niedrig, 3-4 mittel, 6-9 hoch. Ohne Werte nach Maßnahmen entspricht das Restrisiko dem inhärenten Risiko.',
        'outside_quebec' => 'Nur außerhalb Quebecs: erst nach Genehmigung und mit angemessenem Schutz übermitteln.',
        'portability' => 'Nur für Projekte (Art. 3.3).',
        'person_in_charge_opinion' => 'Konsultieren Sie die verantwortliche Person von Beginn des Projekts an (Art. 3.3).',
        'candidates' => 'Verarbeitungstätigkeiten mit sensiblen Informationen oder Profiling ohne Projekt-Abschätzung oder mit Übermittlung außerhalb Quebecs ohne entsprechende Abschätzung.',
        'no_candidates' => 'Für jede dieser Verarbeitungstätigkeiten gibt es eine Abschätzung.',
    ],

    'scale' => [
        '1' => '1 - Niedrig',
        '2' => '2 - Mittel',
        '3' => '3 - Hoch',
    ],

    'levels' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'types' => [
        'project' => 'Informationssystem-Projekt (Art. 3.3)',
        'outside_quebec' => 'Übermittlung außerhalb Quebecs (Art. 17)',
        'research' => 'Forschung (Art. 21)',
    ],

    'threats' => [
        'linking' => 'Verknüpfung',
        'identifying' => 'Identifizierung',
        'non_repudiation' => 'Nichtabstreitbarkeit',
        'detecting' => 'Erkennung',
        'data_disclosure' => 'Offenlegung von Daten',
        'unawareness' => 'Unkenntnis',
        'non_compliance' => 'Nichteinhaltung',
    ],

    'statuses' => [
        'draft' => 'Entwurf',
        'approved' => 'Genehmigt',
        'review_due' => 'Prüfung fällig',
    ],

    'reasons' => [
        'sensitive' => 'sensible Informationen (Art. 12)',
        'profiling' => 'Profiling (Art. 8.1)',
        'outside_quebec' => 'außerhalb Quebecs übermittelt (Art. 17)',
    ],

    'actions' => [
        'approve' => 'Genehmigen',
        'export' => 'Exportieren (JSON)',
        'candidates' => 'Fehlende Abschätzungen',
        'close' => 'Schließen',
    ],

    'notifications' => [
        'approved' => 'Abschätzung genehmigt',
        'no_risks' => 'Bewerten Sie vor der Genehmigung mindestens ein Risiko.',
    ],
];
