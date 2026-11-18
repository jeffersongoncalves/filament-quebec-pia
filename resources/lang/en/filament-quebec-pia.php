<?php

return [
    'resource' => [
        'label' => 'Privacy impact assessment',
        'plural_label' => 'Privacy impact assessments (EFVP)',
    ],

    'fields' => [
        'title' => 'Title',
        'type' => 'Type',
        'processing_activity' => 'Processing activity',
        'description' => 'Description of the project',
        'necessity' => 'Necessity and proportionality',
        'risks' => 'Risks',
        'risk_title' => 'Risk',
        'threat' => 'Threat (LINDDUN)',
        'likelihood' => 'Likelihood',
        'impact' => 'Impact',
        'measures' => 'Protection measures, including contractual ones',
        'residual_likelihood' => 'Likelihood after measures',
        'residual_impact' => 'Impact after measures',
        'destination' => 'Destination (province or country)',
        'legal_framework' => 'Legal framework of the destination, and its privacy principles (s. 17)',
        'adequate_protection' => 'The information would receive adequate protection (s. 17)',
        'portability' => 'The system can communicate computerized information in a structured, commonly used format (s. 3.3)',
        'person_in_charge_opinion' => 'Opinion of the person in charge of the protection of personal information',
        'status' => 'Status',
        'inherent_risk' => 'Highest risk',
        'residual_risk' => 'Highest residual risk',
        'next_review_at' => 'Next review',
        'allows_communication' => 'May communicate',
        'approved_by' => 'Approved by',
    ],

    'help' => [
        'description' => 'The project, the information it collects and why, proportionate to its sensitivity, purpose, quantity, distribution and medium (s. 3.3).',
        'necessity' => 'Why the information is necessary and the project proportionate to its purposes.',
        'risks' => 'Risk level = likelihood x impact: 1-2 low, 3-4 medium, 6-9 high. Without the after-measures scores, the residual risk is the inherent one.',
        'outside_quebec' => 'Outside Quebec only: communicate only once approved, with adequate protection.',
        'portability' => 'Projects only (s. 3.3).',
        'person_in_charge_opinion' => 'Consult the person in charge from the outset of the project (s. 3.3).',
        'candidates' => 'Processing activities with sensitive information or profiling and no project assessment, or communicated outside Quebec with no outside-Quebec assessment.',
        'no_candidates' => 'Every such processing activity has an assessment.',
    ],

    'scale' => [
        1 => '1 - Low',
        2 => '2 - Medium',
        3 => '3 - High',
    ],

    'levels' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'types' => [
        'project' => 'Information system project (s. 3.3)',
        'outside_quebec' => 'Communication outside Quebec (s. 17)',
        'research' => 'Research (s. 21)',
    ],

    'threats' => [
        'linking' => 'Linking',
        'identifying' => 'Identifying',
        'non_repudiation' => 'Non-repudiation',
        'detecting' => 'Detecting',
        'data_disclosure' => 'Data disclosure',
        'unawareness' => 'Unawareness',
        'non_compliance' => 'Non-compliance',
    ],

    'statuses' => [
        'draft' => 'Draft',
        'approved' => 'Approved',
        'review_due' => 'Review due',
    ],

    'reasons' => [
        'sensitive' => 'sensitive information (s. 12)',
        'profiling' => 'profiling (s. 8.1)',
        'outside_quebec' => 'communicated outside Quebec (s. 17)',
    ],

    'actions' => [
        'approve' => 'Approve',
        'export' => 'Export (JSON)',
        'candidates' => 'Missing assessments',
        'close' => 'Close',
    ],

    'notifications' => [
        'approved' => 'Assessment approved',
        'no_risks' => 'Assess at least one risk before approving.',
    ],
];
