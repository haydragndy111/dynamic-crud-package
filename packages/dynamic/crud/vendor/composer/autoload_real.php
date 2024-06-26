<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderIniteb40a42a2369e6c288ea151c10c5ca4d
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

        spl_autoload_register(array('ComposerAutoloaderIniteb40a42a2369e6c288ea151c10c5ca4d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderIniteb40a42a2369e6c288ea151c10c5ca4d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticIniteb40a42a2369e6c288ea151c10c5ca4d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
