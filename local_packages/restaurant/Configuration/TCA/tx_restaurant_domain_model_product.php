<?php
defined('TYPO3') || die();
$llPath = 'LLL:EXT:restaurant/Resources/Private/Language/locallang_db.xlf:';
return [
    'ctrl' => [
        'title' => $llPath . 'tx_restaurant_domain_model_product',
        'label' => 'name',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name',
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_restaurant_domain_model_product',
                'foreign_table_where' => 'AND tx_restaurant_domain_model_product.pid=###CURRENT_PID### AND tx_restaurant_domain_model_product.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        'invertStateDisplay' => true,
                    ],
                ],
            ],
        ],
        'name' => [
            'label' =>  $llPath . 'tx_restaurant_domain_model_product.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'description' => [
            'label' =>  $llPath . 'tx_restaurant_domain_model_product.description',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'price' => [
            'label' =>  $llPath . 'tx_restaurant_domain_model_product.price',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'label' => [
            'label' =>  $llPath . 'tx_restaurant_domain_model_product.label',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'image' => [
            'label' =>  $llPath . 'tx_restaurant_domain_model_product.image',
            'config' => [
                'type' => 'file',
                'allowed' => 'common-media-types',
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '
            --div--;' . $llPath . 'tx_restaurant_domain_model_product,
                name,description,price,label,image
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,hidden,starttime,endtime,
        ',
        ],
    ],
];