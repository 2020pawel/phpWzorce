<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59ac77a0a4c1b28161321d3b04460e49
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpWzorce\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpWzorce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59ac77a0a4c1b28161321d3b04460e49::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59ac77a0a4c1b28161321d3b04460e49::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
