<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdbe2837074a74dfb16c80e1a0ee6bd4d
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yoda\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yoda\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdbe2837074a74dfb16c80e1a0ee6bd4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdbe2837074a74dfb16c80e1a0ee6bd4d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
