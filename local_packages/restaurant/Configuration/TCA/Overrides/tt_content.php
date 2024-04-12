<?php

use Surfcamp\Restaurant\Utility\CropVariants;

defined('TYPO3') || die();

call_user_func(static function () {
    $GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
        'desktop' => CropVariants::getDefaultConfig('Desktop'),
        'mobile' => CropVariants::getDefaultConfig('Mobil')
    ];

    $GLOBALS['TCA']['tt_content']['columns']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
        'desktop' => CropVariants::getDefaultConfig('Desktop'),
        'mobile' => CropVariants::getDefaultConfig('Mobil')
    ];

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    // extension name, matching the PHP namespaces (but without the vendor)
        'restaurant',
        // arbitrary, but unique plugin name (not visible in the backend)
        'List',
        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
        'List of products',
    );
});
