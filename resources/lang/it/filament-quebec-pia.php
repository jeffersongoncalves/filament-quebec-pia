<?php

return [
    'resource' => [
        'label' => 'Valutazione d\'impatto sulla privacy',
        'plural_label' => 'Valutazioni d\'impatto sulla privacy (EFVP)',
    ],

    'fields' => [
        'title' => 'Titolo',
        'type' => 'Tipo',
        'processing_activity' => 'Attività di trattamento',
        'description' => 'Descrizione del progetto',
        'necessity' => 'Necessità e proporzionalità',
        'risks' => 'Rischi',
        'risk_title' => 'Rischio',
        'threat' => 'Minaccia (LINDDUN)',
        'likelihood' => 'Probabilità',
        'impact' => 'Impatto',
        'measures' => 'Misure di protezione, comprese quelle contrattuali',
        'residual_likelihood' => 'Probabilità dopo le misure',
        'residual_impact' => 'Impatto dopo le misure',
        'destination' => 'Destinazione (provincia o paese)',
        'legal_framework' => 'Quadro giuridico della destinazione e i suoi principi di privacy (art. 17)',
        'adequate_protection' => 'Le informazioni riceverebbero una protezione adeguata (art. 17)',
        'portability' => 'Il sistema può comunicare le informazioni informatizzate in un formato strutturato e di uso comune (art. 3.3)',
        'person_in_charge_opinion' => 'Parere del responsabile della protezione delle informazioni personali',
        'status' => 'Stato',
        'inherent_risk' => 'Rischio più alto',
        'residual_risk' => 'Rischio residuo più alto',
        'next_review_at' => 'Prossima revisione',
        'allows_communication' => 'Può comunicare',
        'approved_by' => 'Approvato da',
    ],

    'help' => [
        'description' => 'Il progetto, le informazioni che raccoglie e perché, in proporzione a sensibilità, finalità, quantità, distribuzione e supporto (art. 3.3).',
        'necessity' => 'Perché le informazioni sono necessarie e il progetto proporzionato alle sue finalità.',
        'risks' => 'Livello di rischio = probabilità x impatto: 1-2 basso, 3-4 medio, 6-9 alto. Senza i valori dopo le misure, il rischio residuo è quello inerente.',
        'outside_quebec' => 'Solo fuori dal Québec: comunica solo dopo l\'approvazione, con protezione adeguata.',
        'portability' => 'Solo progetti (art. 3.3).',
        'person_in_charge_opinion' => 'Consulta il responsabile fin dall\'inizio del progetto (art. 3.3).',
        'candidates' => 'Attività di trattamento con informazioni sensibili o profilazione senza valutazione di progetto, o comunicate fuori dal Québec senza la relativa valutazione.',
        'no_candidates' => 'Ognuna di queste attività ha una valutazione.',
    ],

    'scale' => [
        '1' => '1 - Bassa',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'types' => [
        'project' => 'Progetto di sistema informativo (art. 3.3)',
        'outside_quebec' => 'Comunicazione fuori dal Québec (art. 17)',
        'research' => 'Ricerca (art. 21)',
    ],

    'threats' => [
        'linking' => 'Collegamento',
        'identifying' => 'Identificazione',
        'non_repudiation' => 'Non ripudio',
        'detecting' => 'Rilevamento',
        'data_disclosure' => 'Divulgazione dei dati',
        'unawareness' => 'Inconsapevolezza',
        'non_compliance' => 'Non conformità',
    ],

    'statuses' => [
        'draft' => 'Bozza',
        'approved' => 'Approvata',
        'review_due' => 'Revisione da fare',
    ],

    'reasons' => [
        'sensitive' => 'informazioni sensibili (art. 12)',
        'profiling' => 'profilazione (art. 8.1)',
        'outside_quebec' => 'comunicate fuori dal Québec (art. 17)',
    ],

    'actions' => [
        'approve' => 'Approva',
        'export' => 'Esporta (JSON)',
        'candidates' => 'Valutazioni mancanti',
        'close' => 'Chiudi',
    ],

    'notifications' => [
        'approved' => 'Valutazione approvata',
        'no_risks' => 'Valuta almeno un rischio prima di approvare.',
    ],
];
