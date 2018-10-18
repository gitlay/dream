<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInita85b0ebc1bf0cf3e549ff2f0c4731470
=======
class ComposerAutoloaderInitfd90ef84c9b9a8e35351022f66442805
>>>>>>> develop
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInita85b0ebc1bf0cf3e549ff2f0c4731470', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInita85b0ebc1bf0cf3e549ff2f0c4731470', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInitfd90ef84c9b9a8e35351022f66442805', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitfd90ef84c9b9a8e35351022f66442805', 'loadClassLoader'));
>>>>>>> develop

        $useStaticLoader = PHP_VERSION_ID >= 50600 && !defined('HHVM_VERSION') && (!function_exists('zend_loader_file_encoded') || !zend_loader_file_encoded());
        if ($useStaticLoader) {
            require_once __DIR__ . '/autoload_static.php';

<<<<<<< HEAD
            call_user_func(\Composer\Autoload\ComposerStaticInita85b0ebc1bf0cf3e549ff2f0c4731470::getInitializer($loader));
=======
            call_user_func(\Composer\Autoload\ComposerStaticInitfd90ef84c9b9a8e35351022f66442805::getInitializer($loader));
>>>>>>> develop
        } else {
            $map = require __DIR__ . '/autoload_namespaces.php';
            foreach ($map as $namespace => $path) {
                $loader->set($namespace, $path);
            }

            $map = require __DIR__ . '/autoload_psr4.php';
            foreach ($map as $namespace => $path) {
                $loader->setPsr4($namespace, $path);
            }

            $classMap = require __DIR__ . '/autoload_classmap.php';
            if ($classMap) {
                $loader->addClassMap($classMap);
            }
        }

        $loader->register(true);

        if ($useStaticLoader) {
<<<<<<< HEAD
            $includeFiles = Composer\Autoload\ComposerStaticInita85b0ebc1bf0cf3e549ff2f0c4731470::$files;
=======
            $includeFiles = Composer\Autoload\ComposerStaticInitfd90ef84c9b9a8e35351022f66442805::$files;
>>>>>>> develop
        } else {
            $includeFiles = require __DIR__ . '/autoload_files.php';
        }
        foreach ($includeFiles as $fileIdentifier => $file) {
<<<<<<< HEAD
            composerRequirea85b0ebc1bf0cf3e549ff2f0c4731470($fileIdentifier, $file);
=======
            composerRequirefd90ef84c9b9a8e35351022f66442805($fileIdentifier, $file);
>>>>>>> develop
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequirea85b0ebc1bf0cf3e549ff2f0c4731470($fileIdentifier, $file)
=======
function composerRequirefd90ef84c9b9a8e35351022f66442805($fileIdentifier, $file)
>>>>>>> develop
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        require $file;

        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
    }
}
