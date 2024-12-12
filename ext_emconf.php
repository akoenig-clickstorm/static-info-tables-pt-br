<?php

$EM_CONF['static_info_tables_pt_br'] = [
    'title' => 'Static Info Tables (pt_BR)',
    'description' => 'Brazilian portuguese (pt_BR) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '8.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Max Rösch',
    'author_email' => 'dev@Leuchtfeuer.com',
    'author_company' => 'Leuchtfeuer Digital Marketing',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'php' => '7.2.0-8.2.99',
            'static_info_tables' => '6.7.3-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Bitmotion\\StaticInfoTablesPtBr\\' => 'Classes',
        ],
    ],
];
