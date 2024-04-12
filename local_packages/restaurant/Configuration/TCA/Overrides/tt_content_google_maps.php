<?php
defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.google_maps',
                'google_maps',
                'content-map',
                'default',
                 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.google_maps.description',
            ],
            'CType',
            'restaurant'
        );

        $temporaryColumn = [
            'source_url' => [
                'label' =>  'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.google_maps.source_url',
                'config' => [
                    'type' => 'text',
                    'size' => 50,
                    'eval' => 'trim,required',
                ],
            ]
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
            'tt_content',
            $temporaryColumn
        );

        $GLOBALS['TCA']['tt_content']['types']['google_maps'] = [
            'showitem' => ' --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                   --palette--;;general,
                   header,
                   header_link,
                   subheader,
                   source_url,
                   --palette--;;language,
                   --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks, 
                   --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                   --palette--;;hidden,
                   --palette--;;access,
           ',
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
            'tt_content',
            'google_maps',
            '',
            'after:header'
        );

    }, 'restaurant'
);

