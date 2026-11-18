<?php

return [
    'resource' => [
        'label' => '隐私影响评估',
        'plural_label' => '隐私影响评估（EFVP）',
    ],

    'fields' => [
        'title' => '标题',
        'type' => '类型',
        'processing_activity' => '处理活动',
        'description' => '项目说明',
        'necessity' => '必要性与相称性',
        'risks' => '风险',
        'risk_title' => '风险',
        'threat' => '威胁（LINDDUN）',
        'likelihood' => '可能性',
        'impact' => '影响',
        'measures' => '保护措施，包括合同措施',
        'residual_likelihood' => '采取措施后的可能性',
        'residual_impact' => '采取措施后的影响',
        'destination' => '目的地（省份或国家）',
        'legal_framework' => '目的地的法律框架及其隐私原则（第17条）',
        'adequate_protection' => '信息将得到充分保护（第17条）',
        'portability' => '系统能以结构化、常用的格式提供电子化信息（第3.3条）',
        'person_in_charge_opinion' => '个人信息保护负责人的意见',
        'status' => '状态',
        'inherent_risk' => '最高风险',
        'residual_risk' => '最高剩余风险',
        'next_review_at' => '下次审查',
        'allows_communication' => '可提供',
        'approved_by' => '批准人',
    ],

    'help' => [
        'description' => '项目、其收集的信息及原因，需与信息的敏感性、目的、数量、分发和载体相称（第3.3条）。',
        'necessity' => '为何需要这些信息，以及项目为何与其目的相称。',
        'risks' => '风险等级 = 可能性 x 影响：1-2 低，3-4 中，6-9 高。没有措施后评分时，剩余风险等于固有风险。',
        'outside_quebec' => '仅限魁北克省外：须经批准且具备充分保护后方可提供。',
        'portability' => '仅限项目（第3.3条）。',
        'person_in_charge_opinion' => '从项目一开始就咨询负责人（第3.3条）。',
        'candidates' => '含有敏感信息或画像分析但没有项目评估的处理活动，或向魁北克省外提供但没有相应评估的处理活动。',
        'no_candidates' => '所有此类处理活动都已有评估。',
    ],

    'scale' => [
        '1' => '1 - 低',
        '2' => '2 - 中',
        '3' => '3 - 高',
    ],

    'levels' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'types' => [
        'project' => '信息系统项目（第3.3条）',
        'outside_quebec' => '向魁北克省外提供（第17条）',
        'research' => '研究（第21条）',
    ],

    'threats' => [
        'linking' => '关联',
        'identifying' => '识别',
        'non_repudiation' => '不可否认',
        'detecting' => '检测',
        'data_disclosure' => '数据泄露',
        'unawareness' => '不知情',
        'non_compliance' => '不合规',
    ],

    'statuses' => [
        'draft' => '草稿',
        'approved' => '已批准',
        'review_due' => '需要审查',
    ],

    'reasons' => [
        'sensitive' => '敏感信息（第12条）',
        'profiling' => '画像分析（第8.1条）',
        'outside_quebec' => '向魁北克省外提供（第17条）',
    ],

    'actions' => [
        'approve' => '批准',
        'export' => '导出（JSON）',
        'candidates' => '缺少的评估',
        'close' => '关闭',
    ],

    'notifications' => [
        'approved' => '评估已批准',
        'no_risks' => '批准前请至少评估一项风险。',
    ],
];
