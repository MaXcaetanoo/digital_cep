<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31b52e5dc0db4742697314c30feacefe
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wead\\DigitalCep\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wead\\DigitalCep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31b52e5dc0db4742697314c30feacefe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31b52e5dc0db4742697314c30feacefe::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit31b52e5dc0db4742697314c30feacefe::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit31b52e5dc0db4742697314c30feacefe::$classMap;

        }, null, ClassLoader::class);
    }
}
