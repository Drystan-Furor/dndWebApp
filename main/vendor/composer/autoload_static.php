<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit833c7e34e165fee8a3a46c70062d8fb8
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit833c7e34e165fee8a3a46c70062d8fb8::$classMap;

        }, null, ClassLoader::class);
    }
}