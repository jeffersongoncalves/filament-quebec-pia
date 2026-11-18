<?php

return [
    'resource' => [
        'label' => 'Maxfiylikka ta\'sirni baholash',
        'plural_label' => 'Maxfiylikka ta\'sirni baholashlar (EFVP)',
    ],

    'fields' => [
        'title' => 'Sarlavha',
        'type' => 'Turi',
        'processing_activity' => 'Ishlov berish faoliyati',
        'description' => 'Loyiha tavsifi',
        'necessity' => 'Zaruriyat va mutanosiblik',
        'risks' => 'Xavflar',
        'risk_title' => 'Xavf',
        'threat' => 'Tahdid (LINDDUN)',
        'likelihood' => 'Ehtimollik',
        'impact' => 'Ta\'sir',
        'measures' => 'Himoya choralari, shu jumladan shartnomaviy',
        'residual_likelihood' => 'Choralardan keyingi ehtimollik',
        'residual_impact' => 'Choralardan keyingi ta\'sir',
        'destination' => 'Manzil (viloyat yoki mamlakat)',
        'legal_framework' => 'Manzilning huquqiy asoslari va uning maxfiylik tamoyillari (17-modda)',
        'adequate_protection' => 'Axborot yetarli himoyaga ega bo\'ladi (17-modda)',
        'portability' => 'Tizim kompyuterlashtirilgan axborotni tuzilgan, keng qo\'llaniladigan formatda uzata oladi (3.3-modda)',
        'person_in_charge_opinion' => 'Shaxsiy axborotni himoya qilish uchun mas\'ul shaxsning fikri',
        'status' => 'Holat',
        'inherent_risk' => 'Eng yuqori xavf',
        'residual_risk' => 'Eng yuqori qoldiq xavf',
        'next_review_at' => 'Keyingi tekshiruv',
        'allows_communication' => 'Uzatish mumkin',
        'approved_by' => 'Tasdiqlagan',
    ],

    'help' => [
        'description' => 'Loyiha, u to\'playdigan axborot va nima uchun, uning nozikligi, maqsadi, hajmi, tarqatilishi va tashuvchisiga mutanosib ravishda (3.3-modda).',
        'necessity' => 'Axborot nima uchun zarurligi va loyiha maqsadlariga mutanosibligi.',
        'risks' => 'Xavf darajasi = ehtimollik x ta\'sir: 1-2 past, 3-4 o\'rta, 6-9 yuqori. Choralardan keyingi baholar bo\'lmasa, qoldiq xavf dastlabki xavfga teng.',
        'outside_quebec' => 'Faqat Kvebekdan tashqari: faqat tasdiqlangandan keyin, yetarli himoya bilan uzating.',
        'portability' => 'Faqat loyihalar (3.3-modda).',
        'person_in_charge_opinion' => 'Loyiha boshidanoq mas\'ul shaxs bilan maslahatlashing (3.3-modda).',
        'candidates' => 'Nozik axborot yoki profillash mavjud va loyiha bahosi yo\'q, yoki Kvebekdan tashqariga uzatiladigan va tegishli bahosi yo\'q qayta ishlash faoliyatlari.',
        'no_candidates' => 'Bunday faoliyatlarning barchasida baholash bor.',
    ],

    'scale' => [
        '1' => '1 - Past',
        '2' => '2 - O\'rta',
        '3' => '3 - Yuqori',
    ],

    'levels' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'types' => [
        'project' => 'Axborot tizimi loyihasi (3.3-modda)',
        'outside_quebec' => 'Kvebekdan tashqariga uzatish (17-modda)',
        'research' => 'Tadqiqot (21-modda)',
    ],

    'threats' => [
        'linking' => 'Bog\'lash',
        'identifying' => 'Identifikatsiya',
        'non_repudiation' => 'Rad etib bo\'lmaslik',
        'detecting' => 'Aniqlash',
        'data_disclosure' => 'Ma\'lumotlarni oshkor qilish',
        'unawareness' => 'Xabarsizlik',
        'non_compliance' => 'Nomuvofiqlik',
    ],

    'statuses' => [
        'draft' => 'Qoralama',
        'approved' => 'Tasdiqlangan',
        'review_due' => 'Tekshiruv vaqti keldi',
    ],

    'reasons' => [
        'sensitive' => 'nozik axborot (12-modda)',
        'profiling' => 'profillash (8.1-modda)',
        'outside_quebec' => 'Kvebekdan tashqariga uzatiladi (17-modda)',
    ],

    'actions' => [
        'approve' => 'Tasdiqlash',
        'export' => 'Eksport (JSON)',
        'candidates' => 'Yetishmayotgan baholashlar',
        'close' => 'Yopish',
    ],

    'notifications' => [
        'approved' => 'Baholash tasdiqlandi',
        'no_risks' => 'Tasdiqlashdan oldin kamida bitta xavfni baholang.',
    ],
];
