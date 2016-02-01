<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */


return array(
    '*' => array(
        'cpTrigger' => 'MarcusAurelius',
        'userSessionDuration' => '0', // when browser closes
    ),

    'reedmaniac.app' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'http://reedmaniac.app/blog/', 'basePath' => '/home/vagrant/Code/reedmaniac/public/blog'),
        'devMode' => true,
    ),

    'staging.reedmaniac.com' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'http://staging.reedmaniac.com/blog/', 'basePath' => '/home/forge/staging.reedmaniac.com/public/blog'),
        'devMode' => true,
    ),

    'reedmaniac.com' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'https://reedmaniac.com/blog/', 'basePath' => '/home/forge/shapelesschaos.com/public/blog'),
        'devMode' => false,
    )
);
