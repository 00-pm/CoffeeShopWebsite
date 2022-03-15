<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit291c0a8b6ad9541960efebba9c30ed8b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit291c0a8b6ad9541960efebba9c30ed8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit291c0a8b6ad9541960efebba9c30ed8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit291c0a8b6ad9541960efebba9c30ed8b::$classMap;

        }, null, ClassLoader::class);
    }
}