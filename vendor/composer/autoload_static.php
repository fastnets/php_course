<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc47acde88ad465334a6284a7b06c02d5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc47acde88ad465334a6284a7b06c02d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc47acde88ad465334a6284a7b06c02d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc47acde88ad465334a6284a7b06c02d5::$classMap;

        }, null, ClassLoader::class);
    }
}
