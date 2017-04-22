<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),

    'reedmaniac.dev' => array(
        'server'    => 'localhost',
        'user'      => 'homestead',
        'password'  => 'secret',
        'database'  => 'reedmaniac',
    ),

    'staging.reedmaniac.com' => array(
        'server'    => 'localhost',
        'user'      => 'forge',
        'password'  => '3tUVemUka9ZY4RTlJ3bp',
        'database'  => 'blog-dev',
    ),

     'reedmaniac.com' => array(
        'server'    => 'localhost',
        'user'      => 'forge',
        'password'  => '3tUVemUka9ZY4RTlJ3bp',
        'database'  => 'blog',
    )
);