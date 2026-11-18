<?php

return [
    'resource' => [
        'label' => 'Gizlilik etki değerlendirmesi',
        'plural_label' => 'Gizlilik etki değerlendirmeleri (EFVP)',
    ],

    'fields' => [
        'title' => 'Başlık',
        'type' => 'Tür',
        'processing_activity' => 'İşleme faaliyeti',
        'description' => 'Projenin açıklaması',
        'necessity' => 'Gereklilik ve orantılılık',
        'risks' => 'Riskler',
        'risk_title' => 'Risk',
        'threat' => 'Tehdit (LINDDUN)',
        'likelihood' => 'Olasılık',
        'impact' => 'Etki',
        'measures' => 'Sözleşmesel olanlar dahil koruma önlemleri',
        'residual_likelihood' => 'Önlemlerden sonra olasılık',
        'residual_impact' => 'Önlemlerden sonra etki',
        'destination' => 'Hedef (eyalet veya ülke)',
        'legal_framework' => 'Hedefin hukuki çerçevesi ve gizlilik ilkeleri (md. 17)',
        'adequate_protection' => 'Bilgiler yeterli korumaya sahip olur (md. 17)',
        'portability' => 'Sistem bilgisayarlı bilgileri yapılandırılmış, yaygın kullanılan bir biçimde aktarabilir (md. 3.3)',
        'person_in_charge_opinion' => 'Kişisel bilgilerin korunmasından sorumlu kişinin görüşü',
        'status' => 'Durum',
        'inherent_risk' => 'En yüksek risk',
        'residual_risk' => 'En yüksek kalıntı risk',
        'next_review_at' => 'Sonraki inceleme',
        'allows_communication' => 'Aktarılabilir',
        'approved_by' => 'Onaylayan',
    ],

    'help' => [
        'description' => 'Proje, topladığı bilgiler ve nedeni; hassasiyete, amaca, miktara, dağıtıma ve ortama orantılı olarak (md. 3.3).',
        'necessity' => 'Bilgilerin neden gerekli olduğu ve projenin amaçlarıyla orantılı olduğu.',
        'risks' => 'Risk seviyesi = olasılık x etki: 1-2 düşük, 3-4 orta, 6-9 yüksek. Önlem sonrası puanlar yoksa kalıntı risk doğal risktir.',
        'outside_quebec' => 'Yalnızca Quebec dışı: onaydan sonra ve yeterli korumayla aktarın.',
        'portability' => 'Yalnızca projeler (md. 3.3).',
        'person_in_charge_opinion' => 'Projenin başından itibaren sorumlu kişiye danışın (md. 3.3).',
        'candidates' => 'Hassas bilgi veya profilleme içeren ve proje değerlendirmesi olmayan ya da Quebec dışına aktarılan ve ilgili değerlendirmesi olmayan işleme faaliyetleri.',
        'no_candidates' => 'Bu işleme faaliyetlerinin hepsinin değerlendirmesi var.',
    ],

    'scale' => [
        '1' => '1 - Düşük',
        '2' => '2 - Orta',
        '3' => '3 - Yüksek',
    ],

    'levels' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'types' => [
        'project' => 'Bilgi sistemi projesi (md. 3.3)',
        'outside_quebec' => 'Quebec dışına aktarım (md. 17)',
        'research' => 'Araştırma (md. 21)',
    ],

    'threats' => [
        'linking' => 'Bağlantılama',
        'identifying' => 'Tanımlama',
        'non_repudiation' => 'İnkâr edilemezlik',
        'detecting' => 'Tespit',
        'data_disclosure' => 'Verilerin ifşası',
        'unawareness' => 'Habersizlik',
        'non_compliance' => 'Uyumsuzluk',
    ],

    'statuses' => [
        'draft' => 'Taslak',
        'approved' => 'Onaylandı',
        'review_due' => 'İnceleme zamanı geldi',
    ],

    'reasons' => [
        'sensitive' => 'hassas bilgiler (md. 12)',
        'profiling' => 'profilleme (md. 8.1)',
        'outside_quebec' => 'Quebec dışına aktarılan (md. 17)',
    ],

    'actions' => [
        'approve' => 'Onayla',
        'export' => 'Dışa aktar (JSON)',
        'candidates' => 'Eksik değerlendirmeler',
        'close' => 'Kapat',
    ],

    'notifications' => [
        'approved' => 'Değerlendirme onaylandı',
        'no_risks' => 'Onaylamadan önce en az bir riski değerlendirin.',
    ],
];
