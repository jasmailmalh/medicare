<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23b8448d0e895c566d61a79050d26f88
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23b8448d0e895c566d61a79050d26f88::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23b8448d0e895c566d61a79050d26f88::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
