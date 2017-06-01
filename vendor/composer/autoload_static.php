<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Validator\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Subscriber\\Oauth\\' => 28,
            'GuzzleHttp\\Subscriber\\Log\\' => 26,
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'Cardinity\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'GuzzleHttp\\Subscriber\\Oauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/oauth-subscriber/src',
        ),
        'GuzzleHttp\\Subscriber\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/log-subscriber/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Cardinity\\' => 
        array (
            0 => __DIR__ . '/..' . '/cardinity/cardinity-sdk-php/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/klarna/kco_rest/src',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'D' => 
        array (
            'Divido' => 
            array (
                0 => __DIR__ . '/..' . '/divido/divido-php/lib',
            ),
        ),
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static $classMap = array (
        'scss_formatter' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_formatter_compressed' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_formatter_nested' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_parser' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scss_server' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
        'scssc' => __DIR__ . '/..' . '/leafo/scssphp/scss.inc.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcf10b8371a79db84df0e1f7a71ecc810::$classMap;

        }, null, ClassLoader::class);
    }
}
