<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Context Menu',
    'description' => 'Extends the TYPO3 Backend with custom Context Menu Options',
    'category' => 'example',
    'author' => 'Manuel Schnabel',
    'author_email' => 'service@passionweb.de',
    'author_company' => 'PassionWeb Manuel Schnabel',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.0.0-13.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];