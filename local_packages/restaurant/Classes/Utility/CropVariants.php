<?php

namespace Surfcamp\Restaurant\Utility;

class CropVariants
{
    /**
     * Add responsive cropping
     */
    public static function getDefaultConfig($title)
    {
        return [
            'title' => $title,
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => 'NaN',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ]
        ];
    }

    /**
     * Add responsive cropping default 16:9
     */
    public static function getDefault_16_9($title)
    {
        return [
            'title' => $title,
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => '16:9',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ]
        ];
    }

    /**
     * Add responsive cropping default 1:1
     */
    public static function getDefault_1_1($title)
    {
        return [
            'title' => $title,
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => '1:1',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ]
        ];
    }

    public static function getDefault_3_4($title)
    {
        return [
            'title' => $title,
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:2' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.3_2',
                    'value' => 3 / 2
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
                '3:4' => [
                    'title' => '3:4',
                    'value' => 3 / 4
                ]
            ],
            'selectedRatio' => '3:4',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ]
        ];
    }

    /**
    * Add responsive cropping default 4:3
    */
    public static function getSpecial_4_3($title)
    {
        return [
            'title' => $title,
            'allowedAspectRatios' => [
                '16:9' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.16_9',
                    'value' => 16 / 9
                ],
                '3:4' => [
                    'title' => '3:4',
                    'value' => 3 / 4
                ],
                '4:3' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.4_3',
                    'value' => 4 / 3
                ],
                '1:1' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                    'value' => 1.0
                ],
                'NaN' => [
                    'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                    'value' => 0.0
                ],
            ],
            'selectedRatio' => '4:3',
            'cropArea' => [
                'x' => 0.0,
                'y' => 0.0,
                'width' => 1.0,
                'height' => 1.0,
            ]
        ];
    }
}
