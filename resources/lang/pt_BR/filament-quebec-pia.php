<?php

return [
    'resource' => [
        'label' => 'Avaliação de impacto à privacidade',
        'plural_label' => 'Avaliações de impacto à privacidade (EFVP)',
    ],

    'fields' => [
        'title' => 'Título',
        'type' => 'Tipo',
        'processing_activity' => 'Atividade de tratamento',
        'description' => 'Descrição do projeto',
        'necessity' => 'Necessidade e proporcionalidade',
        'risks' => 'Riscos',
        'risk_title' => 'Risco',
        'threat' => 'Ameaça (LINDDUN)',
        'likelihood' => 'Probabilidade',
        'impact' => 'Impacto',
        'measures' => 'Medidas de proteção, inclusive contratuais',
        'residual_likelihood' => 'Probabilidade após as medidas',
        'residual_impact' => 'Impacto após as medidas',
        'destination' => 'Destino (província ou país)',
        'legal_framework' => 'Marco legal do destino e seus princípios de privacidade (art. 17)',
        'adequate_protection' => 'As informações receberiam proteção adequada (art. 17)',
        'portability' => 'O sistema consegue comunicar informações informatizadas em um formato estruturado e de uso comum (art. 3.3)',
        'person_in_charge_opinion' => 'Parecer do responsável pela proteção das informações pessoais',
        'status' => 'Situação',
        'inherent_risk' => 'Maior risco',
        'residual_risk' => 'Maior risco residual',
        'next_review_at' => 'Próxima revisão',
        'allows_communication' => 'Pode comunicar',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O projeto, as informações que coleta e por quê, de forma proporcional à sua sensibilidade, finalidade, quantidade, distribuição e suporte (art. 3.3).',
        'necessity' => 'Por que as informações são necessárias e o projeto é proporcional às suas finalidades.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'outside_quebec' => 'Somente fora do Quebec: comunique apenas após aprovação, com proteção adequada.',
        'portability' => 'Somente projetos (art. 3.3).',
        'person_in_charge_opinion' => 'Consulte o responsável desde o início do projeto (art. 3.3).',
        'candidates' => 'Atividades de tratamento com informações sensíveis ou perfilamento e sem avaliação de projeto, ou comunicadas fora do Quebec sem avaliação para fora do Quebec.',
        'no_candidates' => 'Todas essas atividades de tratamento têm relatório.',
    ],

    'scale' => [
        '1' => '1 - Baixa',
        '2' => '2 - Média',
        '3' => '3 - Alta',
    ],

    'levels' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'types' => [
        'project' => 'Projeto de sistema de informação (art. 3.3)',
        'outside_quebec' => 'Comunicação fora do Quebec (art. 17)',
        'research' => 'Pesquisa (art. 21)',
    ],

    'threats' => [
        'linking' => 'Vinculação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Detecção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento do titular',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovado',
        'review_due' => 'Revisão pendente',
    ],

    'reasons' => [
        'sensitive' => 'informações sensíveis (art. 12)',
        'profiling' => 'perfilamento (art. 8.1)',
        'outside_quebec' => 'comunicadas fora do Quebec (art. 17)',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Relatórios faltando',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação aprovada',
        'no_risks' => 'Avalie ao menos um risco antes de aprovar.',
    ],
];
