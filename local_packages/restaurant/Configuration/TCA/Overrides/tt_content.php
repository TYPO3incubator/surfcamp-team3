<?php

use Surfcamp\Restaurant\Utility\CropVariants;

defined('TYPO3') || die();

call_user_func(function () {
    $GLOBALS['TCA']['tt_content']['columns']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
        'desktop' => CropVariants::getDefaultConfig('Desktop'),
        'mobile' => CropVariants::getDefaultConfig('Mobil')
    ];

    $GLOBALS['TCA']['tt_content']['columns']['assets']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants'] = [
        'desktop' => CropVariants::getDefaultConfig('Desktop'),
        'mobile' => CropVariants::getDefaultConfig('Mobil')
    ];
});
