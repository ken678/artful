<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76570fc2aef274b409b8f977e977829f
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6b998e7ad3182c0d21d23780badfa07b' => __DIR__ . '/..' . '/yansongda/supports/src/Functions.php',
        '35fab96057f1bf5e7aba31a8a6d5fdde' => __DIR__ . '/..' . '/topthink/think-orm/stubs/load_stubs.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '988d02680beedec88d52f2787b2d2007' => __DIR__ . '/..' . '/yansongda/artful/src/Functions.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '8c783b3a3de2f6d9177022b5ccdcc841' => __DIR__ . '/..' . '/yansongda/pay/src/Functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\trace\\' => 12,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'Y' => 
        array (
            'Yansongda\\Supports\\' => 19,
            'Yansongda\\Pay\\' => 14,
            'Yansongda\\Artful\\' => 17,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\EventDispatcher\\' => 20,
            'Psr\\Container\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\trace\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-trace/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
            1 => __DIR__ . '/..' . '/topthink/think-orm/src',
            2 => __DIR__ . '/..' . '/topthink/framework/src/think',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Yansongda\\Supports\\' => 
        array (
            0 => __DIR__ . '/..' . '/yansongda/supports/src',
        ),
        'Yansongda\\Pay\\' => 
        array (
            0 => __DIR__ . '/..' . '/yansongda/pay/src',
        ),
        'Yansongda\\Artful\\' => 
        array (
            0 => __DIR__ . '/..' . '/yansongda/artful/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
            1 => __DIR__ . '/..' . '/psr/http-factory/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/event-dispatcher/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/extend',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76570fc2aef274b409b8f977e977829f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76570fc2aef274b409b8f977e977829f::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInit76570fc2aef274b409b8f977e977829f::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit76570fc2aef274b409b8f977e977829f::$classMap;

        }, null, ClassLoader::class);
    }
}