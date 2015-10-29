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

    'reedmaniac.app' => array(
        'server'    => 'localhost',
        'user'      => 'homestead',
        'password'  => 'secret',
        'database'  => 'reedmaniac',
    ),

    'shapelesschaos.reedmaniac.com' => array(
        'server'    => 'localhost',
        'user'      => 'forge',
        'password'  => '3tUVemUka9ZY4RTlJ3bp',
        'database'  => 'shapelesschaos-dev',
    ),

     'shapelesschaos.com' => array(
        'server'    => 'localhost',
        'user'      => 'forge',
        'password'  => '3tUVemUka9ZY4RTlJ3bp',
        'database'  => 'shapelesschaos',
    )
);