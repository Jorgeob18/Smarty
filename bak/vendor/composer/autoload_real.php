<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit9f5e4a6d7c9cb3f9a6c6727e5ebb6786
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit9f5e4a6d7c9cb3f9a6c6727e5ebb6786', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit9f5e4a6d7c9cb3f9a6c6727e5ebb6786', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit9f5e4a6d7c9cb3f9a6c6727e5ebb6786::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
