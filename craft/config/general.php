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

    'reedmaniac.dev' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'http://reedmaniac.dev/', 'basePath' => '/home/vagrant/Code/reedmaniac/public'),
        'devMode' => true,
    ),

    'staging.reedmaniac.com' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'http://staging.reedmaniac.com/', 'basePath' => '/home/forge/staging.reedmaniac.com/public'),
        'devMode' => true,
    ),

    'reedmaniac.com' => array(
        'usePathInfo' => true,
        'omitScriptNameInUrls' => true,
        'environmentVariables' => array('siteUrl' => 'https://reedmaniac.com/', 'basePath' => '/home/forge/reedmaniac.com/public'),
        'devMode' => false,
    )
);
