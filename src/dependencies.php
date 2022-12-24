<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};


// db
$container['db'] = function ($c) {
    $settings = $c->get('settings')['db'];
    
    // Connection String, Username, Password
    // Connection String - Driver Host (Address +':'+ Port), Db Name
    $connect_str = $settings["driver"].":".$settings["hostVar"]."=".$settings["host"].";".$settings["dbVar"]."=".$settings["dbname"];
    $dbConnection = new PDO($connect_str, $settings["dbuser"], $settings["dbpass"]);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $dbConnection;
};

// JWT
$container['jwt'] = function ($c) {
    $settings = $c->get('settings')['jwt'];
    return $settings;
};

