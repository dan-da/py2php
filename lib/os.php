<?php

class OSError extends Exception{
}


class os {
    static function remove($path) {
        if( !is_file( $path ) ) {
            throw new OSError("Path is not a file. $path");
        }
        try {
            unlink( $path );
        }
        catch( Exception $e ) {
            throw new OSError( $e->getMessage(), $e->getCode() );
        }
    }
}
