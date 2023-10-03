<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit127b35edf50f6763fc0aceaff8912b71
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit127b35edf50f6763fc0aceaff8912b71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit127b35edf50f6763fc0aceaff8912b71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit127b35edf50f6763fc0aceaff8912b71::$classMap;

        }, null, ClassLoader::class);
    }
}
