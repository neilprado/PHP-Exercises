<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b46fc2ce00989a41eb8d0919ec18736
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b46fc2ce00989a41eb8d0919ec18736::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b46fc2ce00989a41eb8d0919ec18736::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
