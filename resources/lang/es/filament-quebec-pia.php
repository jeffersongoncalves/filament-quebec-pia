<?php

return [
    'resource' => [
        'label' => 'Evaluación de impacto en la privacidad',
        'plural_label' => 'Evaluaciones de impacto en la privacidad (EFVP)',
    ],

    'fields' => [
        'title' => 'Título',
        'type' => 'Tipo',
        'processing_activity' => 'Actividad de tratamiento',
        'description' => 'Descripción del proyecto',
        'necessity' => 'Necesidad y proporcionalidad',
        'risks' => 'Riesgos',
        'risk_title' => 'Riesgo',
        'threat' => 'Amenaza (LINDDUN)',
        'likelihood' => 'Probabilidad',
        'impact' => 'Impacto',
        'measures' => 'Medidas de protección, incluidas las contractuales',
        'residual_likelihood' => 'Probabilidad tras las medidas',
        'residual_impact' => 'Impacto tras las medidas',
        'destination' => 'Destino (provincia o país)',
        'legal_framework' => 'Marco jurídico del destino y sus principios de privacidad (art. 17)',
        'adequate_protection' => 'La información recibiría una protección adecuada (art. 17)',
        'portability' => 'El sistema puede comunicar la información informatizada en un formato estructurado y de uso común (art. 3.3)',
        'person_in_charge_opinion' => 'Opinión del responsable de la protección de la información personal',
        'status' => 'Estado',
        'inherent_risk' => 'Riesgo más alto',
        'residual_risk' => 'Riesgo residual más alto',
        'next_review_at' => 'Próxima revisión',
        'allows_communication' => 'Puede comunicar',
        'approved_by' => 'Aprobado por',
    ],

    'help' => [
        'description' => 'El proyecto, la información que recopila y por qué, de forma proporcional a su sensibilidad, finalidad, cantidad, distribución y soporte (art. 3.3).',
        'necessity' => 'Por qué la información es necesaria y el proyecto proporcional a sus fines.',
        'risks' => 'Nivel de riesgo = probabilidad x impacto: 1-2 bajo, 3-4 medio, 6-9 alto. Sin las notas tras las medidas, el riesgo residual es el inherente.',
        'outside_quebec' => 'Solo fuera de Quebec: comunique solo tras la aprobación y con una protección adecuada.',
        'portability' => 'Solo proyectos (art. 3.3).',
        'person_in_charge_opinion' => 'Consulte al responsable desde el inicio del proyecto (art. 3.3).',
        'candidates' => 'Actividades de tratamiento con información sensible o elaboración de perfiles sin evaluación de proyecto, o comunicadas fuera de Quebec sin evaluación para ello.',
        'no_candidates' => 'Todas esas actividades de tratamiento tienen evaluación.',
    ],

    'scale' => [
        '1' => '1 - Baja',
        '2' => '2 - Media',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'types' => [
        'project' => 'Proyecto de sistema de información (art. 3.3)',
        'outside_quebec' => 'Comunicación fuera de Quebec (art. 17)',
        'research' => 'Investigación (art. 21)',
    ],

    'threats' => [
        'linking' => 'Vinculación',
        'identifying' => 'Identificación',
        'non_repudiation' => 'No repudio',
        'detecting' => 'Detección',
        'data_disclosure' => 'Divulgación de datos',
        'unawareness' => 'Desconocimiento',
        'non_compliance' => 'Incumplimiento',
    ],

    'statuses' => [
        'draft' => 'Borrador',
        'approved' => 'Aprobada',
        'review_due' => 'Revisión pendiente',
    ],

    'reasons' => [
        'sensitive' => 'información sensible (art. 12)',
        'profiling' => 'elaboración de perfiles (art. 8.1)',
        'outside_quebec' => 'comunicada fuera de Quebec (art. 17)',
    ],

    'actions' => [
        'approve' => 'Aprobar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Evaluaciones faltantes',
        'close' => 'Cerrar',
    ],

    'notifications' => [
        'approved' => 'Evaluación aprobada',
        'no_risks' => 'Evalúe al menos un riesgo antes de aprobar.',
    ],
];
