<?php

/**
 * Gets the application start timestamp.
 */
defined('YII_BEGIN_TIME') or define('YII_BEGIN_TIME', microtime(true));

/**
 * This constant defines the project root directory.
 * TODO: find a solution without file_exists
 */
if (!defined('YII_ROOT')) {
    (function () {
        $dirs = [
            dirname(__DIR__, 1),
            dirname(__DIR__, 3),
        ];
        foreach ($dirs as $dir) {
            if (file_exists($dir . '/vendor/autoload.php')) {
                define('YII_ROOT', $dir);
                return;
            }
        }
        die('Could not find composer autoload! You may need to setup project dependencies or define YII_ROOT constant manually.');
    })();
}

/**
 * This constant defines the framework installation directory.
 */
defined('YII_PATH') or define('YII_PATH', dirname(__DIR__) . '/src');
/**
 * This constant defines in which environment the application is running. Defaults to 'prod', meaning production environment.
 * You may define this constant in the bootstrap script. The value could be 'prod' (production), 'dev' (development), 'test', 'staging', etc.
 */
defined('YII_ENV') or define('YII_ENV', $_ENV['ENV'] ?? 'prod');
/**
 * Whether the the application is running in production environment
 */
defined('YII_ENV_PROD') or define('YII_ENV_PROD', YII_ENV === 'prod');
/**
 * Whether the the application is running in development environment
 */
defined('YII_ENV_DEV') or define('YII_ENV_DEV', YII_ENV === 'dev');
/**
 * Whether the the application is running in testing environment
 */
defined('YII_ENV_TEST') or define('YII_ENV_TEST', YII_ENV === 'test');

/**
 * This constant defines whether the application should be in debug mode or not.
 * Enabled in `dev` by default.
 */
defined('YII_DEBUG') or define('YII_DEBUG', YII_ENV_DEV);

/**
 * This constant defines whether error handling should be enabled. Defaults to true.
 */
defined('YII_ENABLE_ERROR_HANDLER') or define('YII_ENABLE_ERROR_HANDLER', true);

