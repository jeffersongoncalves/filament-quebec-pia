<?php

return [
    'resource' => [
        'label' => 'Ocena skutków dla prywatności',
        'plural_label' => 'Oceny skutków dla prywatności (EFVP)',
    ],

    'fields' => [
        'title' => 'Tytuł',
        'type' => 'Typ',
        'processing_activity' => 'Czynność przetwarzania',
        'description' => 'Opis projektu',
        'necessity' => 'Niezbędność i proporcjonalność',
        'risks' => 'Ryzyka',
        'risk_title' => 'Ryzyko',
        'threat' => 'Zagrożenie (LINDDUN)',
        'likelihood' => 'Prawdopodobieństwo',
        'impact' => 'Wpływ',
        'measures' => 'Środki ochrony, w tym umowne',
        'residual_likelihood' => 'Prawdopodobieństwo po środkach',
        'residual_impact' => 'Wpływ po środkach',
        'destination' => 'Miejsce docelowe (prowincja lub kraj)',
        'legal_framework' => 'Ramy prawne miejsca docelowego i jego zasady prywatności (art. 17)',
        'adequate_protection' => 'Informacje byłyby odpowiednio chronione (art. 17)',
        'portability' => 'System może przekazywać informacje skomputeryzowane w ustrukturyzowanym, powszechnie używanym formacie (art. 3.3)',
        'person_in_charge_opinion' => 'Opinia osoby odpowiedzialnej za ochronę informacji osobowych',
        'status' => 'Status',
        'inherent_risk' => 'Najwyższe ryzyko',
        'residual_risk' => 'Najwyższe ryzyko szczątkowe',
        'next_review_at' => 'Następny przegląd',
        'allows_communication' => 'Może przekazać',
        'approved_by' => 'Zatwierdził',
    ],

    'help' => [
        'description' => 'Projekt, zbierane informacje i powód, proporcjonalnie do ich wrażliwości, celu, ilości, rozpowszechnienia i nośnika (art. 3.3).',
        'necessity' => 'Dlaczego informacje są niezbędne, a projekt proporcjonalny do celów.',
        'risks' => 'Poziom ryzyka = prawdopodobieństwo x wpływ: 1-2 niskie, 3-4 średnie, 6-9 wysokie. Bez ocen po środkach ryzyko szczątkowe równa się ryzyku inherentnemu.',
        'outside_quebec' => 'Tylko poza Quebekiem: przekazuj dopiero po zatwierdzeniu, przy odpowiedniej ochronie.',
        'portability' => 'Tylko projekty (art. 3.3).',
        'person_in_charge_opinion' => 'Konsultuj się z osobą odpowiedzialną od początku projektu (art. 3.3).',
        'candidates' => 'Czynności przetwarzania z informacjami wrażliwymi lub profilowaniem bez oceny projektu albo przekazywane poza Quebec bez stosownej oceny.',
        'no_candidates' => 'Każda taka czynność przetwarzania ma ocenę.',
    ],

    'scale' => [
        '1' => '1 - Niskie',
        '2' => '2 - Średnie',
        '3' => '3 - Wysokie',
    ],

    'levels' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'types' => [
        'project' => 'Projekt systemu informacyjnego (art. 3.3)',
        'outside_quebec' => 'Przekazanie poza Quebec (art. 17)',
        'research' => 'Badania (art. 21)',
    ],

    'threats' => [
        'linking' => 'Powiązanie',
        'identifying' => 'Identyfikacja',
        'non_repudiation' => 'Niezaprzeczalność',
        'detecting' => 'Wykrywanie',
        'data_disclosure' => 'Ujawnienie danych',
        'unawareness' => 'Nieświadomość',
        'non_compliance' => 'Niezgodność',
    ],

    'statuses' => [
        'draft' => 'Szkic',
        'approved' => 'Zatwierdzona',
        'review_due' => 'Wymagany przegląd',
    ],

    'reasons' => [
        'sensitive' => 'informacje wrażliwe (art. 12)',
        'profiling' => 'profilowanie (art. 8.1)',
        'outside_quebec' => 'przekazywane poza Quebec (art. 17)',
    ],

    'actions' => [
        'approve' => 'Zatwierdź',
        'export' => 'Eksportuj (JSON)',
        'candidates' => 'Brakujące oceny',
        'close' => 'Zamknij',
    ],

    'notifications' => [
        'approved' => 'Ocena zatwierdzona',
        'no_risks' => 'Przed zatwierdzeniem oceń co najmniej jedno ryzyko.',
    ],
];
