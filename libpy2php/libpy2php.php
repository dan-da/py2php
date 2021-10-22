<?php

# Copyright 2006 James Tauber and contributors
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

/**
 * This call makes three things happen:
 *
 *   1) a global error handler for php errors that causes an exception to be
 *      thrown instead of standard php error handling.
 *
 *   2) a global exception handler for any exceptions that are somehow not
 *      caught by the application code.
 *
 *   3) error_reporting is set to E_STRICT, so that even notices cause an
 *      exception to be thrown.  This way we are forced to deal with even
 *      the minor issues during development, and hopefully fewer issues
  make it out into the world.
 */
require_once( dirname(__FILE__) . DIRECTORY_SEPARATOR . 'strict_mode.php' );
init_strict_mode();



# iteration from Bob Ippolito's Iteration in JavaScript
# pyjs_extend from Kevin Lindsey's Inteheritance Tutorial (http://www.kevlindev.com/tutorials/javascript/inheritance/)

# type functions from Douglas Crockford's Remedial Javascript: http://www.crockford.com/javascript/remedial.html
function pyjslib_isObject($a) {

    return is_object($a);

}

function pyjslib_isFunction($a) {

    return is_function($a);

}

function pyjslib_isString($a) {

    return is_string($a);

}

function pyjslib_isNull($a) {

    return is_null($a);

}

function pyjslib_isArray($a) {

    return is_array($a);

}

function pyjslib_isUndefined($a) {

    return !isset($a);

}

function pyjslib_isIteratable($a) {

    return $a instanceof Traversable;

}

function pyjslib_isNumber($a) {

    return is_numeric($a);

}

function pyjslib_int($a) {
    return (int)$a;
}

function pyjslib_str($val) {
    return (string)$val;
}

function pyjslib_del_slice(&$list, $from, $to, $step=1) {
    if( $from <= 0 ) {
        $from = 0;
    }
    if( $to === null ) {
        $to = count($list);
    }
    if( $step <= 0 ) {
        $step = 1;
    }
    for( $i = $from; $i < $to; $i += $step ) {
        unset( $list[$i]);
    }
}

function pyjslib_array_slice($list, $from, $to, $step=1) {
    $newlist = [];
    if( $from <= 0 ) {
        $from = 0;
    }
    if( $to === null ) {
        $to = count($list);
    }
    if( $step <= 0 ) {
        $step = 1;
    }
    for( $i = $from; $i < $to; $i += $step ) {
        $newlist[] = $list[$i];
    }
    return $newlist;
}

function pyjslib_foreachlist($item) {
    // In python, chars in a string can be iterated eg for x in "abc"
    if(is_string($item)) {
        return str_split($item);
    }
    return $item;
}

/* array list([iterable])
 *  Return a list (array) whose items are the same and in the same order
 *  as iterable’s items. iterable may be either a sequence, a container
 *  that supports iteration, or an iterator object. If iterable is
 *  already a list, a copy is made and returned, similar to iterable[:].
 *  For instance, list('abc') returns ['a', 'b', 'c'] and list( (1, 2, 3) )
 *  returns [1, 2, 3]. If no argument is given, returns a new empty list, [].
 *
 *  list is a mutable sequence type, as documented in Sequence Types — str,
 *  unicode, list, tuple, bytearray, buffer, xrange. For other containers
 *  see the built in dict, set, and tuple classes, and the collections
 *  module.
 */
function pyjslib_list($item = null) {
    // In python, chars in a string can be iterated eg for x in "abc"
    if( $item === null ) {
        return [];
    }
    if(is_string($item)) {
        return str_split($item);
    }
    if(is_array($item)) {
        return $item;
    }
    if($item instanceof \Traversable) {
        $list = [];
        foreach($item as $k => $v) {
            $list[$k] = $v;
        }
        return $list;
    }
    
    throw new \Exception("Invalid arg passed to pyjslib_list()");
}

function pyjslib_sum(Iterator $list) {
    if(is_array($list)) {
        return array_sum($list);
    }
    $sum = 0;
    foreach($list as $val) {
        $sum += $val;
    }
    return $sum;
}

function pyjslib_min(Iterator $list) {
    if(is_array($list)) {
        return array_min($list);
    }
    $list->rewind();
    $min = $list->current();
    foreach($list as $val) {
        $min = $val < $min ? $val : $min;
    }
    return $min;
}

function pyjslib_max(Iterator $list) {
    if(is_array($list)) {
        return array_max($list);
    }
    $list->rewind();
    $max = $list->current();
    foreach($list as $val) {
        $max = $val > $max ? $val : $max;
    }
    return $max;
}


# taken from https://stackoverflow.com/a/69672938/912236
function pyjslib_range($start, $stop = null, $step = null) {
    if ($stop === null) {
        $stop = $start;
        $start = 0;
    }
    $step = $step ?? 1;
    if ($start <= $stop) {
        for ($i = $start; $i < $stop; $i += $step)
            yield $i;
    } else
        if ($step < 0)
            for ($i = $start; $i > $stop; $i += $step)
                yield $i;
}

function pyjslib_filter($callback, $iterable) {
    $a = [];
    foreach( $iterable as $item ) {
        if( call_user_func( $callback, $item ) ) {
            $a[] = $item;
        }
    }
    return $a;
}

function pyjslib_globals() {
    return $GLOBALS;
}


function pyjslib_map($callable) {
    $done = false;
    $call_cnt = 0;
    $results = [];
    
    $params = func_get_args();
    array_shift( $params );
    
    while( !$done ) {
        $func_args = [];
        $found = false;
        for( $i = 0; $i < count($params); $i ++ ) {
            $func_args[] = @$params[$i][$call_cnt];
            if( count($params[$i]) > $call_cnt + 1 ) {
                $found = true;
            }
        }
        if( !$found ) {
            $done = true;
        }
        $results[] = call_user_func_array($callable, $func_args);
        $call_cnt ++;
    }
    return $results;
}

function pyjslib_zip() {
    $params = func_get_args();
    if (count($params) === 1){ // this case could be probably cleaner
        // single iterable passed
        $result = array();
        foreach ($params[0] as $item){
            $result[] = array($item);
        };
        return $result;
    };
    $result = call_user_func_array('array_map',array_merge(array(null),$params));
    $length = min(array_map('count', $params));
    return array_slice($result, 0, $length);
}

function pyjslib_is_assoc($arr)
{
    return array_keys($arr) !== range(0, count($arr) - 1);
}

function pyjslib_dict($arg=null) {
    if( $arg === null ) {
        return [];
    }
    if( pyjslib_is_assoc( $arg )) {
        return $arg;
    }
    $dict = [];
    foreach( $arg as $a ) {
        if( count($a) == 2 ) {
            $dict[$a[0]] = $a[1];
        }
    }
    return $dict;
}

function pyjslib_printWorker($objs, $nl, $multi_arg, $depth=1) {
    $buf = '';
    if( is_array( $objs ) && $multi_arg && $depth == 1) {
        $cnt = 0;
        foreach( $objs as $obj ) {
            if( $cnt ++ > 0 ) {
               $buf .= " ";
            }
            $buf .= pyjslib_printWorker( $obj, $nl, $multi_arg, $depth + 1 );
        }
    }
    else if( is_bool( $objs )) {
        $buf = $objs ? "True" : "False";
    }
    else if( is_null( $objs )) {
        $buf = 'None';
    }
    else if( is_float( $objs )) {
        $buf = (int)$objs;
    }
    else if( is_string( $objs ) && ($multi_arg && $depth > 2 || (!$multi_arg && $depth > 1) ) ) {
        $buf = "'$objs'";
    }
    elseif( is_array( $objs )) {
        $buf = '[';
        $cnt = 0;
        foreach( $objs as $obj ) {
            $val = pyjslib_printWorker($obj, $nl, false, $depth + 1);
            if( $cnt ++ > 0 ) {
                $buf .= ', ';
            }
            $buf .= $val;
        }
        $buf .= "]";
//        $buf = '[' . implode( ", ", $objs ) . ']';
    }
    else {
        $buf = $objs;
    }
    if( $depth == 1 && (!strlen($buf) || $buf[strlen($buf)-1] != "\n") ) {
        $buf .= $nl ? "\n" : " ";
    }
    return $buf;
}

function pyjslib_repr($obj) {
    return pyjslib_printWorker($obj, false, false);
}

function pyjslib_print($objs, $multi_arg=false) {
    echo pyjslib_printWorker($objs, false, $multi_arg);
}

function pyjslib_printnl($objs, $multi_arg=false) {
    echo pyjslib_printWorker($objs, true, $multi_arg);
}

function py2php_kwargs_function_call($funcname, $ordered, $named) {
    
    if( $funcname == 'array' || $funcname == 'pyjslib_dict' ) {
        return $named;
    }
    
    $num_ordered = count($ordered);
    $count = 1;
    
    if(strstr($funcname, 'new ')) {
        list($new, $class) = explode(' ', $funcname);
        
        $refFunc = new ReflectionMethod( $class, '__construct');
        foreach( $refFunc->getParameters() as $param ){
            //invokes ReflectionParameter::__toString
            if( $count > $num_ordered ) {
                $name = $param->name;
                $default = $param->isDefaultValueAvailable() ? $param->getDefaultValue() : null;
                $ordered[] = isset($named[$name]) ? $named[$name] : $default;
            }    
            $count ++;
        }
        return call_user_func_array( [ new ReflectionClass($class),
                                      'newInstance' ], $ordered);
    }
    
    $refFunc = new ReflectionFunction($funcname);
    foreach( $refFunc->getParameters() as $param ){
        if( $param->isVariadic() ) {
            $ordered[$count-1] = $named;
            break;
        }
        //invokes ReflectionParameter::__toString
        if( $count > $num_ordered ) {
            $name = $param->name;
            $default = $param->isDefaultValueAvailable() ? $param->getDefaultValue() : null;
            $ordered[] = isset($named[$name]) ? $named[$name] : $default;
        }
        
        $count ++;
    }
    //var_dump($ordered);
    return call_user_func_array($funcname, $ordered);
}

function py2php_kwargs_method_call( $obj, $parent, $method, $ordered, $named ) {
    
    $num_ordered = count($ordered);
    $count = 1;

    $cls = $parent ? get_parent_class($obj) : $obj;
    $refFunc = new ReflectionMethod( $cls, $method);
    foreach( $refFunc->getParameters() as $param ){
        //invokes ReflectionParameter::__toString
        if( $count > $num_ordered ) {
            $name = $param->name;
            $default = $param->isDefaultValueAvailable() ? $param->getDefaultValue() : null;
            $ordered[] = isset($named[$name]) ? $named[$name] : $default;
        }
        
        $count ++;
    }
   
    $callable = $parent ? [$obj, 'parent::' . $method] : [$obj, $method]; 
    return call_user_func_array($callable, $ordered);
}

class IOError extends Exception{
}

class ValueError extends Exception{
}


function pyjslib_open( $name, $mode="r", $buffering=null ) {
    return new pyjslib_file( $name, $mode, $buffering );
}

function pyjslib_genexpr($func, $vars) {
    return $func($vars);
}

function pyjslib_listcomp($func, $vars) {
    $list = [];
    $generator = $func($vars);
    foreach( $generator as $item ) {
        $list[] = $item;
    }
    return $list;
}

class pyjslib_file implements Iterator {
    
    private $fh = false;
    private $current_line = null;

    // public attributes of python file class.
    public $closed = true;
    public $encoding = null;
    public $errors = [];
    public $mode = null;
    public $newlines = null;
    public $softspace = false;
    
    function __construct($name_or_fd, $mode="r", $buffering=null) {
        if( is_resource($name_or_fd) ) {
            $this->fh = $name_or_fd;
            $this->closed = false;
            $meta = stream_get_meta_data( $name_or_df );
            $this->mode = $meta['mode'];
            return;
        }
        $name = $name_or_fd;
        try {
            $this->fh = fopen($name, $mode);
            if( !$this->fh ) {
                throw new Exception("Could not open $name");
            }
            $this->closed = false;
            $this->mode = $mode;
        }
        catch( Exception $e ) {
            throw new IOError( $e->getMessage(), $e->getCode() );
        }
    }


    
    function close() {
        if( $this->fh ) {
            fclose( $this->fh );
            $this->fh = null;
            $this->closed = true;
        }
    }
    
    function flush() {
        if( !$this->fh ) {
            throw new ValueError("File is closed.");
        }
        fflush( $this->fh );
    }
    
    function fileno() {
        if( !$this->fh ) {
            throw new ValueError("File is closed.");
        }
        return $this->fh;
    }
    
    function isatty() {
        if( !$this->fh ) {
            throw new ValueError("File is closed.");
        }
        return posix_isatty( $this->fh );
    }
    
    /* ---
     * Begin PHP Iterator implementation
     * ---
     */
    function rewind() {
        fseek( $this->fh, 0 );
        $this->line = 0;
    }

    function current() {
        if( !$this->current_line ) {
            $this->current_line = fgets( $this->fh );
        }
        return $this->current_line;
    }

    function key() {
        return $this->line;
    }

    function next() {
        $this->current();  // ensure current line has been retrieved.
        $this->current_line = fgets( $this->fh );
        $this->line ++;
        return $this->current_line;
    }

    function valid() {
        return $this->fh != false && !feof( $this->fh );
    }
    /* ---
     * End PHP Iterator implementation
     * ---
     */
    
    function read($size=null) {
        if( $size !== null) {
            return fread( $this->fh, $size);
        }
        return stream_get_contents( $this->fh );
    }
    
    function readline($size=null) {
        return fgets( $this->fh, $size );
    }
    
    function readlines($sizehint=null) {
        $len = 0;
        $lines = array();
        while( $line = fgets( $this->fh ) ) {
            $len += strlen( $line );
            $lines[] = $line;
            if( $sizehint && $len >= $sizehint ) {
                break;
            }
        }
        return $lines;
    }
    
    function seek($offset, $whence=SEEK_SET) {
        return fseek( $this->fh, $offset, $whence);
    }
    
    function tell() {
        return ftell($this->fh);
    }
    
    function truncate( $size ) {
        $rc = ftruncate( $this->fh, $size );
    }
    
    function write( $str ) {
        fwrite( $this->fh, $str );
    }
    
    function writelines($sequence) {
        foreach($sequence as $line) {
            $this->write( $line );
        }
    }
}

