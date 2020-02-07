<?php

$EM_CONF['static_info_tables_pt_br'] = [
    'title' => 'Static Info Tables (pt_BR)',
    'description' => 'Brazilian portuguese (pt_BR) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.8.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Florian Wessels',
    'author_email' => 'typo3-ext@bitmotion.de',
    'author_company' => 'Bitmotion GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-10.2.99',
            'php' => '7.0.0-7.4.99',
            'static_info_tables' => '6.7.0-6.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'Bitmotion\\StaticInfoTablesPtBr\\' => 'Classes'
        ]
    ],
];
