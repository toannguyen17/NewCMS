<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit206a2e177d3771140d376ab4ce704a4a
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' =>
        array (
            'Zend\\Stdlib\\'         => 12,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\I18n\\'           => 10,
            'Zend\\Diactoros\\'      => 15,
        ),
        'P' =>
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\'     => 14,
        ),
        'M' =>
        array (
            'Mobicms\\Errors\\'  => 15,
            'Mobicms\\Captcha\\' => 16,
            'Mobicms\\'          => 8,
        ),
        'L' =>
        array (
            'Library\\'        => 8,
            'League\\Plates\\' => 14,
        ),
        'I' =>
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' =>
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stdlib\\' =>
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stdlib/src',
        ),
        'Zend\\ServiceManager\\' =>
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\I18n\\' =>
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-i18n/src',
        ),
        'Zend\\Diactoros\\' =>
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Psr\\Http\\Message\\' =>
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' =>
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Mobicms\\Errors\\' =>
        array (
            0 => __DIR__ . '/..' . '/mobicms/errors-exceptions-handler/src',
        ),
        'Mobicms\\Captcha\\' =>
        array (
            0 => __DIR__ . '/..' . '/mobicms/captcha/src',
        ),
        'Mobicms\\' =>
        array (
            0 => __DIR__ . '/../../..' . '/system/src',
        ),
        'Library\\' =>
        array (
            0 => __DIR__ . '/../../..' . '/modules/library/classes',
        ),
        'League\\Plates\\' =>
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Interop\\Container\\' =>
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' =>
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'GeSHi'  => __DIR__ . '/..' . '/geshi/geshi/src/geshi.php',
        'upload' => __DIR__ . '/..' . '/verot/class.upload.php/src/class.upload.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit206a2e177d3771140d376ab4ce704a4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4    = ComposerStaticInit206a2e177d3771140d376ab4ce704a4a::$prefixDirsPsr4;
            $loader->classMap          = ComposerStaticInit206a2e177d3771140d376ab4ce704a4a::$classMap;

        }, null, ClassLoader::class);
    }
}