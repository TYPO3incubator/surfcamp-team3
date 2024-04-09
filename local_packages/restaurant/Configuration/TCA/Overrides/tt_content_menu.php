<?php
defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey) {
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items']['6']['label'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.table.menu';
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items']['6']['description'] = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.table.menu.description';
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items']['6']['group'] = 'default';
    }, 'restaurant'
);
