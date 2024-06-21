<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['restaurant'] = 'EXT:restaurant/Configuration/RTE/Default.yaml';

call_user_func(static function () {

    // Add module configuration
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        'plugin.tx_form {
    settings {
        yamlConfigurations {
            100 = EXT:restaurant/Configuration/Sets/Restaurant/Form/Setup.yaml
            130 = EXT:restaurant/Configuration/Sets/Restaurant/Form/FormDefinition/Contactform.form.yaml
        }
    }
}
module.tx_form {
    settings {
        yamlConfigurations {
            100 = EXT:restaurant/Configuration/Sets/Restaurant/Form/Setup.yaml
            130 = EXT:restaurant/Configuration/Sets/Restaurant/Form/FormDefinition/Contactform.form.yaml
        }
    }
}'
    );

    ExtensionUtility::configurePlugin(
    // extension name, matching the PHP namespaces (but without the vendor)
        'restaurant',
        // arbitrary, but unique plugin name (not visible in the backend)
        'List',
        // all actions
        [\Surfcamp\Restaurant\Controller\ProductController::class => 'list'],
        // non-cacheable actions
        [],
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tx_restaurant_domain_model_product',
        'categories'
    );
});

// Include vite generated manifest file (global)
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['vite_asset_collector']['defaultManifest'] = 'EXT:restaurant/Resources/Public/Vite/.vite/manifest.json';