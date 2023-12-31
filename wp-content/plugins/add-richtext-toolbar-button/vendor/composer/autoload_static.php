<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82d1a44da2a467b4f2ae74f06b0a6519
{
    public static $files = array (
        '689b08b7620712b04324ecd7ed167c6b' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p10.php',
        'cbd6bada88b6bca5d1b8b1b5733f514e' => __DIR__ . '/..' . '/wp-content-framework/core/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Technote\\' => 9,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Technote\\' => 
        array (
            0 => __DIR__ . '/..' . '/technote/gutenberg-package-versions/src',
            1 => __DIR__ . '/..' . '/technote/gutenberg-packages/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82d1a44da2a467b4f2ae74f06b0a6519::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82d1a44da2a467b4f2ae74f06b0a6519::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
