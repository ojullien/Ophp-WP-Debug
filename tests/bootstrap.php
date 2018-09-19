<?php
// -------------------------------
// Defines application constants -
// -------------------------------
define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'development'));
define('APPLICATION_NAME', 'Ophp-WP-Debug');
define('APPLICATION_VERSION', '2018.09.19');
define('APPLICATION_PATH', dirname(__DIR__));
define('APPLICATION_PATH_PROVIDER', \APPLICATION_PATH . \DIRECTORY_SEPARATOR . 'tests' . \DIRECTORY_SEPARATOR . 'provider');

// -------------------------------
// Autoload                      -
// -------------------------------
$autoloader = APPLICATION_PATH . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';
if (! file_exists($autoloader)) {
    echo "Composer autoloader not found: $autoloader" . PHP_EOL;
    echo "Please issue 'composer install' and try again." . PHP_EOL;
    exit(1);
}
require $autoloader;
