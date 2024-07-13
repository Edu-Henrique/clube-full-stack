<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63e5632fbc7c186c2fe76d8c1dc016d2
{
    public static $files = array (
        '103284c1c458afe8d31093c56c201d89' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '3ec4d1246ed3fef16f6ec364a7f1052b' => __DIR__ . '/../..' . '/app/router/router.php',
        '7b4562d4d224d67fa64d28cc399c87b2' => __DIR__ . '/../..' . '/app/core/controller.php',
        '58489048275ffd6c96522714f22020a5' => __DIR__ . '/../..' . '/app/database/connect.php',
        'e290edd6fa6d4c96863784346e490f7d' => __DIR__ . '/../..' . '/app/database/fetch.php',
        'f89aa1966e15c28841107708e025913f' => __DIR__ . '/../..' . '/app/database/create.php',
        'dd1b92da85604a131c476590c13bf837' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        'ce0d14a36265ba33e13b73d8382ac4d8' => __DIR__ . '/../..' . '/app/helpers/flash.php',
        '01728758b34cc9d3d0d871b3640ae7f2' => __DIR__ . '/../..' . '/app/helpers/sessions.php',
        '247f1344fb27368e6ce3ca0c3646cf37' => __DIR__ . '/../..' . '/app/helpers/validate.php',
        '537de483f7c37e376f9f0ce8f88e5535' => __DIR__ . '/../..' . '/app/helpers/validations.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63e5632fbc7c186c2fe76d8c1dc016d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63e5632fbc7c186c2fe76d8c1dc016d2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit63e5632fbc7c186c2fe76d8c1dc016d2::$classMap;

        }, null, ClassLoader::class);
    }
}
