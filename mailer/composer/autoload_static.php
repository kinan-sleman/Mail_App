<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab7dd7141c5a48322a21ae50b6041648
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitab7dd7141c5a48322a21ae50b6041648::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitab7dd7141c5a48322a21ae50b6041648::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitab7dd7141c5a48322a21ae50b6041648::$classMap;

        }, null, ClassLoader::class);
    }
}