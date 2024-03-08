<?php

/**
 * Manage automatic import of classes
 * with their namespaces.
 */
class Autoloader {

    /**
     * Define the __autoload function on
     * Autoloader::habitualize_autoloader()
     */
    public static function autoload(): void
    {
        spl_autoload_register(array(__CLASS__, "habitualize_autoloader"));
    }

    /**
     * Manages autoload by including files
     * with their path defined in the namespace
     */
    public static function habitualize_autoloader($namespace): void
    {
        $path = str_replace("\\","/", $namespace);
        $path = str_replace("Habitualize", "", $path);
        $path = $path[0] == "/" ? substr($path, 1) : $path;
        require $path . ".php";
    }

}