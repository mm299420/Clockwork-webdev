<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8d9d42d7d10f2e58831d70fc3f8d58a
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite8d9d42d7d10f2e58831d70fc3f8d58a::$classMap;

        }, null, ClassLoader::class);
    }
}
