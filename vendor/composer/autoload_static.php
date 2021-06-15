<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5ba1088b1579000e27c3ba748aa4623
{
    public static $files = array (
        'af5f4795926cae36d007918cfc996bd1' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5ba1088b1579000e27c3ba748aa4623::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5ba1088b1579000e27c3ba748aa4623::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5ba1088b1579000e27c3ba748aa4623::$classMap;

        }, null, ClassLoader::class);
    }
}