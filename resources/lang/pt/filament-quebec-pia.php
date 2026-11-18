<?php

return [
    'resource' => [
        'label' => 'Avaliação de impacto na privacidade',
        'plural_label' => 'Avaliações de impacto na privacidade (EFVP)',
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
        'measures' => 'Medidas de proteção, incluindo as contratuais',
        'residual_likelihood' => 'Probabilidade após as medidas',
        'residual_impact' => 'Impacto após as medidas',
        'destination' => 'Destino (província ou país)',
        'legal_framework' => 'Quadro jurídico do destino e os seus princípios de privacidade (art. 17)',
        'adequate_protection' => 'As informações receberiam proteção adequada (art. 17)',
        'portability' => 'O sistema consegue comunicar informações informatizadas num formato estruturado e de uso corrente (art. 3.3)',
        'person_in_charge_opinion' => 'Parecer do responsável pela proteção das informações pessoais',
        'status' => 'Estado',
        'inherent_risk' => 'Risco mais alto',
        'residual_risk' => 'Risco residual mais alto',
        'next_review_at' => 'Próxima revisão',
        'allows_communication' => 'Pode comunicar',
        'approved_by' => 'Aprovado por',
    ],

    'help' => [
        'description' => 'O projeto, as informações que recolhe e porquê, de forma proporcional à sua sensibilidade, finalidade, quantidade, distribuição e suporte (art. 3.3).',
        'necessity' => 'Porque as informações são necessárias e o projeto proporcional às suas finalidades.',
        'risks' => 'Nível de risco = probabilidade x impacto: 1-2 baixo, 3-4 médio, 6-9 alto. Sem as notas após as medidas, o risco residual é o inerente.',
        'outside_quebec' => 'Apenas fora do Quebeque: comunique só após aprovação, com proteção adequada.',
        'portability' => 'Apenas projetos (art. 3.3).',
        'person_in_charge_opinion' => 'Consulte o responsável desde o início do projeto (art. 3.3).',
        'candidates' => 'Atividades de tratamento com informações sensíveis ou definição de perfis sem avaliação de projeto, ou comunicadas fora do Quebeque sem a respetiva avaliação.',
        'no_candidates' => 'Todas essas atividades de tratamento têm avaliação.',
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
        'outside_quebec' => 'Comunicação fora do Quebeque (art. 17)',
        'research' => 'Investigação (art. 21)',
    ],

    'threats' => [
        'linking' => 'Ligação',
        'identifying' => 'Identificação',
        'non_repudiation' => 'Não repúdio',
        'detecting' => 'Deteção',
        'data_disclosure' => 'Divulgação de dados',
        'unawareness' => 'Desconhecimento',
        'non_compliance' => 'Não conformidade',
    ],

    'statuses' => [
        'draft' => 'Rascunho',
        'approved' => 'Aprovada',
        'review_due' => 'Revisão em falta',
    ],

    'reasons' => [
        'sensitive' => 'informações sensíveis (art. 12)',
        'profiling' => 'definição de perfis (art. 8.1)',
        'outside_quebec' => 'comunicadas fora do Quebeque (art. 17)',
    ],

    'actions' => [
        'approve' => 'Aprovar',
        'export' => 'Exportar (JSON)',
        'candidates' => 'Avaliações em falta',
        'close' => 'Fechar',
    ],

    'notifications' => [
        'approved' => 'Avaliação aprovada',
        'no_risks' => 'Avalie pelo menos um risco antes de aprovar.',
    ],
];
