<?php

return array(
    'default-connection' => 'concrete',
    'connections' => array(
        'concrete' => array(
            'driver' => 'c5_pdo_mysql',
            'server' => 'localhost',
            'database' => 'fedresults',
            'username' => 'fedresults',
            'password' => 'password1',
            'charset' => 'utf8',
        ),
    ),
);
