<?php

/**
 * Extension Manager/Repository config file for ext "restaurant".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Restaurant',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Surfcamp\\Restaurant\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TYPO3',
    'author_email' => 'surfcamp@typo3.com',
    'author_company' => 'TYPO3',
    'version' => '1.0.0',
];
