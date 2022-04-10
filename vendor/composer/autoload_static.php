<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit893fa27900a120f219ae9562292056f3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit893fa27900a120f219ae9562292056f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit893fa27900a120f219ae9562292056f3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit893fa27900a120f219ae9562292056f3::$classMap;

        }, null, ClassLoader::class);
    }
}
