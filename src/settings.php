<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        'db' => [
            'driver'=> 'mysql',
            'host' => 'localhost',
            // 'host' => 'DESKTOP-C5STNM8\MSSQL2014',    //what is this?
            'hostVar' => 'host',
            'dbVar' => 'dbname',
            'dbname' => 'erp-bleneson',
            'dbuser' => 'root',
            'dbpass' => 'password@sdadmin'
        ],

        'jwt' => [
            'key'=> 'CenturyAppDev123',
            'alg' => array('HS256'),
        ]
    ],
];

