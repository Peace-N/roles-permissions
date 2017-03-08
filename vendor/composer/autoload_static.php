<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36e34dae620e5eab021a2f4fe2f828d5
{
    public static $files = array (
        'a14f0608a516babdb987b089065bf70e' => __DIR__ . '/../..' . '/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EONConsulting\\RolesPermissions\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EONConsulting\\RolesPermissions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36e34dae620e5eab021a2f4fe2f828d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36e34dae620e5eab021a2f4fe2f828d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}