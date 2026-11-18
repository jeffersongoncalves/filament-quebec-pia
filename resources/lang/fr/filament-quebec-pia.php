<?php

return [
    'resource' => [
        'label' => 'Évaluation des facteurs relatifs à la vie privée',
        'plural_label' => 'Évaluations des facteurs relatifs à la vie privée (EFVP)',
    ],

    'fields' => [
        'title' => 'Titre',
        'type' => 'Type',
        'processing_activity' => 'Activité de traitement',
        'description' => 'Description du projet',
        'necessity' => 'Nécessité et proportionnalité',
        'risks' => 'Risques',
        'risk_title' => 'Risque',
        'threat' => 'Menace (LINDDUN)',
        'likelihood' => 'Vraisemblance',
        'impact' => 'Impact',
        'measures' => 'Mesures de protection, y compris contractuelles',
        'residual_likelihood' => 'Vraisemblance après mesures',
        'residual_impact' => 'Impact après mesures',
        'destination' => 'Destination (province ou pays)',
        'legal_framework' => 'Régime juridique de la destination et ses principes de protection (art. 17)',
        'adequate_protection' => 'Les renseignements bénéficieraient d\'une protection adéquate (art. 17)',
        'portability' => 'Le système permet de communiquer les renseignements informatisés dans un format structuré et couramment utilisé (art. 3.3)',
        'person_in_charge_opinion' => 'Avis de la personne responsable de la protection des renseignements personnels',
        'status' => 'Statut',
        'inherent_risk' => 'Risque le plus élevé',
        'residual_risk' => 'Risque résiduel le plus élevé',
        'next_review_at' => 'Prochaine revue',
        'allows_communication' => 'Peut communiquer',
        'approved_by' => 'Approuvé par',
    ],

    'help' => [
        'description' => 'Le projet, les renseignements qu\'il recueille et pourquoi, de façon proportionnée à leur sensibilité, à la finalité, à la quantité, à la répartition et au support (art. 3.3).',
        'necessity' => 'Pourquoi les renseignements sont nécessaires et le projet proportionné à ses fins.',
        'risks' => 'Niveau de risque = vraisemblance x impact : 1-2 faible, 3-4 moyen, 6-9 élevé. Sans notes après mesures, le risque résiduel est le risque initial.',
        'outside_quebec' => 'Hors Québec seulement : ne communiquez qu\'après approbation, avec une protection adéquate.',
        'portability' => 'Projets seulement (art. 3.3).',
        'person_in_charge_opinion' => 'Consultez la personne responsable dès le début du projet (art. 3.3).',
        'candidates' => 'Activités de traitement comportant des renseignements sensibles ou du profilage sans évaluation de projet, ou communiquées hors Québec sans évaluation à cet effet.',
        'no_candidates' => 'Chacune de ces activités a une analyse.',
    ],

    'scale' => [
        '1' => '1 - Faible',
        '2' => '2 - Moyen',
        '3' => '3 - Élevé',
    ],

    'levels' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'types' => [
        'project' => 'Projet de système d\'information (art. 3.3)',
        'outside_quebec' => 'Communication hors Québec (art. 17)',
        'research' => 'Recherche (art. 21)',
    ],

    'threats' => [
        'linking' => 'Mise en relation',
        'identifying' => 'Identification',
        'non_repudiation' => 'Non-répudiation',
        'detecting' => 'Détection',
        'data_disclosure' => 'Divulgation de données',
        'unawareness' => 'Méconnaissance',
        'non_compliance' => 'Non-conformité',
    ],

    'statuses' => [
        'draft' => 'Brouillon',
        'approved' => 'Approuvée',
        'review_due' => 'Revue à faire',
    ],

    'reasons' => [
        'sensitive' => 'renseignements sensibles (art. 12)',
        'profiling' => 'profilage (art. 8.1)',
        'outside_quebec' => 'communiqués hors Québec (art. 17)',
    ],

    'actions' => [
        'approve' => 'Approuver',
        'export' => 'Exporter (JSON)',
        'candidates' => 'Analyses manquantes',
        'close' => 'Fermer',
    ],

    'notifications' => [
        'approved' => 'Évaluation approuvée',
        'no_risks' => 'Évaluez au moins un risque avant d\'approuver.',
    ],
];
