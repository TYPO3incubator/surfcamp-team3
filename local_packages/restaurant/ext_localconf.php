<?php
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
});
