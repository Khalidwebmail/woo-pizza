<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34697d8ea84034022493b1cbcc1aa3a2
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woo\\Pizza\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woo\\Pizza\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34697d8ea84034022493b1cbcc1aa3a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34697d8ea84034022493b1cbcc1aa3a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit34697d8ea84034022493b1cbcc1aa3a2::$classMap;

        }, null, ClassLoader::class);
    }
}