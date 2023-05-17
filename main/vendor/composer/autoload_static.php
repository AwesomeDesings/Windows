<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fe1f9bfdc591b21e7043075a5511208
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7fe1f9bfdc591b21e7043075a5511208::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7fe1f9bfdc591b21e7043075a5511208::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7fe1f9bfdc591b21e7043075a5511208::$classMap;

        }, null, ClassLoader::class);
    }
}