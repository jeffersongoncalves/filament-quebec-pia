<?php

return [
    'resource' => [
        'label' => 'プライバシー影響評価',
        'plural_label' => 'プライバシー影響評価（EFVP）',
    ],

    'fields' => [
        'title' => 'タイトル',
        'type' => '種類',
        'processing_activity' => '処理活動',
        'description' => 'プロジェクトの説明',
        'necessity' => '必要性と比例性',
        'risks' => 'リスク',
        'risk_title' => 'リスク',
        'threat' => '脅威（LINDDUN）',
        'likelihood' => '発生可能性',
        'impact' => '影響度',
        'measures' => '契約上の措置を含む保護措置',
        'residual_likelihood' => '対策後の発生可能性',
        'residual_impact' => '対策後の影響度',
        'destination' => '提供先（州または国）',
        'legal_framework' => '提供先の法的枠組みとそのプライバシー原則（第17条）',
        'adequate_protection' => '情報は適切に保護される（第17条）',
        'portability' => 'システムは電子化された情報を構造化された一般的な形式で提供できる（第3.3条）',
        'person_in_charge_opinion' => '個人情報保護責任者の意見',
        'status' => 'ステータス',
        'inherent_risk' => '最大のリスク',
        'residual_risk' => '最大の残存リスク',
        'next_review_at' => '次回レビュー',
        'allows_communication' => '提供可',
        'approved_by' => '承認者',
    ],

    'help' => [
        'description' => 'プロジェクト、収集する情報とその理由。センシティブ性、目的、量、配布、媒体に見合ったものとします（第3.3条）。',
        'necessity' => '情報が必要な理由と、プロジェクトが目的に見合っている理由。',
        'risks' => 'リスクレベル = 発生可能性 x 影響度：1-2 低、3-4 中、6-9 高。対策後の評価がない場合、残存リスクは固有リスクと同じです。',
        'outside_quebec' => 'ケベック州外のみ：承認後、適切な保護がある場合にのみ提供します。',
        'portability' => 'プロジェクトのみ（第3.3条）。',
        'person_in_charge_opinion' => 'プロジェクトの初期段階から責任者に相談してください（第3.3条）。',
        'candidates' => 'センシティブ情報やプロファイリングを含みプロジェクト評価がない処理活動、またはケベック州外へ提供されるのに州外向け評価がない処理活動。',
        'no_candidates' => '該当する処理活動はすべて評価済みです。',
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
        'project' => '情報システムのプロジェクト（第3.3条）',
        'outside_quebec' => 'ケベック州外への提供（第17条）',
        'research' => '研究（第21条）',
    ],

    'threats' => [
        'linking' => 'リンク付け',
        'identifying' => '識別',
        'non_repudiation' => '否認防止',
        'detecting' => '検知',
        'data_disclosure' => 'データの開示',
        'unawareness' => '認識の欠如',
        'non_compliance' => '非遵守',
    ],

    'statuses' => [
        'draft' => '下書き',
        'approved' => '承認済み',
        'review_due' => 'レビュー期限',
    ],

    'reasons' => [
        'sensitive' => 'センシティブ情報（第12条）',
        'profiling' => 'プロファイリング（第8.1条）',
        'outside_quebec' => 'ケベック州外へ提供（第17条）',
    ],

    'actions' => [
        'approve' => '承認',
        'export' => 'エクスポート（JSON）',
        'candidates' => '不足している評価',
        'close' => '閉じる',
    ],

    'notifications' => [
        'approved' => '評価を承認しました',
        'no_risks' => '承認する前に少なくとも1つのリスクを評価してください。',
    ],
];
