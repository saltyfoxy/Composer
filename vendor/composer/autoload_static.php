<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5316a65c0dbfbc48b0db95a3ddbb99a9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5316a65c0dbfbc48b0db95a3ddbb99a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5316a65c0dbfbc48b0db95a3ddbb99a9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5316a65c0dbfbc48b0db95a3ddbb99a9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
