<?php
defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.menu_teaser',
                'menu_teaser',
                'content-menu-pages',
                'default',
                'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.menu_teaser.description',
            ],
            'CType',
            'restaurant'
        );

        $temporaryColumn = [
            'menu_items' => [
                'label' => 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.menu_teaser.items',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tt_content',
                    'overrideChildTca' => [
                        'columns' => [
                            'CType' => [
                                'config' => [
                                    'default' => 'header',
                                    'items' => [
                                        [
                                            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header',
                                            'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.header.description',
                                            'value' => 'header',
                                            'icon' => 'content-header',
                                            'group' => 'default',
                                        ],
                                    ],
                                ]
                            ],
                            'colPos' => [
                                'config' => [
                                    'default' => 999
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $temporaryColumn
        );

        $GLOBALS['TCA']['tt_content']['types']['menu_teaser'] = [
            'showitem' => ' --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                   --palette--;;general,
                   header,
                   header_link,
                   subheader,
                   menu_items,
                   --palette--;;language,
                   --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                   --palette--;;hidden,
                   --palette--;;access,
           ',
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
            'tt_content',
            'menu_teaser',
            '',
            'after:header'
        );

    }, 'restaurant'
);
