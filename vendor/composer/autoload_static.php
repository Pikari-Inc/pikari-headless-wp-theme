<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82933c09e3bb8860421610ee953b2bac
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82933c09e3bb8860421610ee953b2bac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82933c09e3bb8860421610ee953b2bac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82933c09e3bb8860421610ee953b2bac::$classMap;

        }, null, ClassLoader::class);
    }
}
