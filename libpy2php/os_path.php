<?php

/**
 * A class to emulate python's os.path
 */
class os_path {

    static function realpath($path) {
        return realpath($path);
    }
    
    static function isdir($path) {
        return is_dir($path);
    }
    
    static function isfile($path) {
        return is_file($path);
    }
    
    static function islink($path) {
        return is_link($path);
    }
    
    static function ismount($path) {
        self::_unimplemented();
    }
    
    static function split($path) {
        $parts = explode(DIRECTORY_SEPARATOR, $path);
        $first =  implode(DIRECTORY_SEPARATOR, array_slice($parts, 0, count($parts)-1 ));
        $last = $parts[count($parts)-1];
        return array($first, $last);
    }
    
    static function join($path, ...$paths) {
        $buf = rtrim($path, '/');
        foreach( $paths as $p ) {
            $i = 0;
            $p = trim( $p, '/');
            $buf .= DIRECTORY_SEPARATOR . $p;
        }
        return $buf;
    }
    
    
    private static function _unimplemented() {
        throw new Exception( "Unimplemented.  Please consider submitting a patch to py2php project on github.");
    }
    
}