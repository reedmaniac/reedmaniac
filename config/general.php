<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see craft\config\GeneralConfig
 */

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 0,

        // Enable CSRF Protection (recommended)
        'enableCsrfProtection' => true,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => getenv('CP_TRIGGER'),

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => getenv('SECURITY_KEY'),

        'siteUrl' => getenv('APP_URL'),

        // Dev Mode (see https://craftcms.com/support/dev-mode)
        'devMode' => getenv('APP_DEBUG'),
        
        'aliases' => [
        	'siteUrl' => getenv('APP_URL'),
        ],
    ],

    // Dev environment settings
    'dev' => [

    ],

    // Staging environment settings
    'staging' => [

    ],

    // Production environment settings
    'production' => [

    ],
];
