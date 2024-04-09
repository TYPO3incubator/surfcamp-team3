<?php
defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey) {
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items']['2']['label'] =  'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.textpic.teaser';
        $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items']['2']['description'] =  'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_db.xlf:tt_content.type.textpic.teaser.description';
    }, 'restaurant'
);