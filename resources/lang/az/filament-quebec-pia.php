<?php

return [
    'resource' => [
        'label' => 'Məxfiliyə təsirin qiymətləndirilməsi',
        'plural_label' => 'Məxfiliyə təsirin qiymətləndirmələri (EFVP)',
    ],

    'fields' => [
        'title' => 'Başlıq',
        'type' => 'Növ',
        'processing_activity' => 'Emal fəaliyyəti',
        'description' => 'Layihənin təsviri',
        'necessity' => 'Zərurət və mütənasiblik',
        'risks' => 'Risklər',
        'risk_title' => 'Risk',
        'threat' => 'Təhlükə (LINDDUN)',
        'likelihood' => 'Ehtimal',
        'impact' => 'Təsir',
        'measures' => 'Müqavilə tədbirləri daxil olmaqla qoruma tədbirləri',
        'residual_likelihood' => 'Tədbirlərdən sonra ehtimal',
        'residual_impact' => 'Tədbirlərdən sonra təsir',
        'destination' => 'Təyinat (əyalət və ya ölkə)',
        'legal_framework' => 'Təyinatın hüquqi çərçivəsi və onun məxfilik prinsipləri (maddə 17)',
        'adequate_protection' => 'Məlumatlar adekvat qorunacaq (maddə 17)',
        'portability' => 'Sistem kompüterləşdirilmiş məlumatları strukturlaşdırılmış, geniş istifadə olunan formatda ötürə bilir (maddə 3.3)',
        'person_in_charge_opinion' => 'Şəxsi məlumatların qorunmasına cavabdeh şəxsin rəyi',
        'status' => 'Status',
        'inherent_risk' => 'Ən yüksək risk',
        'residual_risk' => 'Ən yüksək qalıq risk',
        'next_review_at' => 'Növbəti yoxlama',
        'allows_communication' => 'Ötürə bilər',
        'approved_by' => 'Təsdiq edən',
    ],

    'help' => [
        'description' => 'Layihə, onun topladığı məlumatlar və səbəbi, həssaslığına, məqsədinə, həcminə, yayılmasına və daşıyıcısına mütənasib olaraq (maddə 3.3).',
        'necessity' => 'Məlumatların niyə zəruri olduğu və layihənin məqsədlərinə mütənasibliyi.',
        'risks' => 'Risk səviyyəsi = ehtimal x təsir: 1-2 aşağı, 3-4 orta, 6-9 yüksək. Tədbirlərdən sonrakı qiymət olmadıqda qalıq risk ilkin riskə bərabərdir.',
        'outside_quebec' => 'Yalnız Kvebekdən kənar: yalnız təsdiqdən sonra, adekvat qoruma ilə ötürün.',
        'portability' => 'Yalnız layihələr (maddə 3.3).',
        'person_in_charge_opinion' => 'Layihənin əvvəlindən cavabdeh şəxslə məsləhətləşin (maddə 3.3).',
        'candidates' => 'Həssas məlumat və ya profilləşdirmə olan və layihə qiymətləndirməsi olmayan, yaxud Kvebekdən kənara ötürülən və müvafiq qiymətləndirməsi olmayan emal fəaliyyətləri.',
        'no_candidates' => 'Belə fəaliyyətlərin hamısının qiymətləndirməsi var.',
    ],

    'scale' => [
        '1' => '1 - Aşağı',
        '2' => '2 - Orta',
        '3' => '3 - Yüksək',
    ],

    'levels' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'types' => [
        'project' => 'İnformasiya sistemi layihəsi (maddə 3.3)',
        'outside_quebec' => 'Kvebekdən kənara ötürmə (maddə 17)',
        'research' => 'Tədqiqat (maddə 21)',
    ],

    'threats' => [
        'linking' => 'Əlaqələndirmə',
        'identifying' => 'İdentifikasiya',
        'non_repudiation' => 'İnkar edilməzlik',
        'detecting' => 'Aşkarlama',
        'data_disclosure' => 'Məlumatların ifşası',
        'unawareness' => 'Xəbərsizlik',
        'non_compliance' => 'Uyğunsuzluq',
    ],

    'statuses' => [
        'draft' => 'Qaralama',
        'approved' => 'Təsdiqlənib',
        'review_due' => 'Yoxlama vaxtı çatıb',
    ],

    'reasons' => [
        'sensitive' => 'həssas məlumatlar (maddə 12)',
        'profiling' => 'profilləşdirmə (maddə 8.1)',
        'outside_quebec' => 'Kvebekdən kənara ötürülür (maddə 17)',
    ],

    'actions' => [
        'approve' => 'Təsdiq et',
        'export' => 'İxrac (JSON)',
        'candidates' => 'Çatışmayan qiymətləndirmələr',
        'close' => 'Bağla',
    ],

    'notifications' => [
        'approved' => 'Qiymətləndirmə təsdiqləndi',
        'no_risks' => 'Təsdiqdən əvvəl ən azı bir riski qiymətləndirin.',
    ],
];
