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

# taken from mochikit: range( [start,] stop[, step] )
function pyjslib_range($start, $stop = null, $step = 1) {
    if( $stop === null ) {
        $stop = $start;
        $start = 0;
    }
    if( $stop <= $start && $step < 0 ) {
        $arr = range( $stop, $start, -$step );
        array_pop( $arr );
        return array_reverse( $arr, false );
    }
    $arr = range( $start, $stop, $step );
    array_pop( $arr );
    return $arr;
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
    if( $depth == 1) {
        $buf .= $nl ? "\n" : " ";
    }
    return $buf;
}

function pyjslib_print($objs, $multi_arg=false) {
    echo pyjslib_printWorker($objs, false, $multi_arg);
}

function pyjslib_printnl($objs, $multi_arg=false) {
    echo pyjslib_printWorker($objs, true, $multi_arg);
}

function py2php_kwargs_function_call($funcname, $params) {
    
    $named = array_shift( $params );
    
    $num_ordered = count($params);
    $count = 1;

    $refFunc = new ReflectionFunction($funcname);
    foreach( $refFunc->getParameters() as $param ){
        //invokes ReflectionParameter::__toString
        if( $count > $num_ordered ) {
            $name = $param->name;
            $params[] = @$named[$name] ?: $param->getDefaultValue();
        }
        
        $count ++;
    }
    
    return call_user_func_array($funcname, $params);
}

function py2php_kwargs_method_call( $obj, $method, $params ) {
    
    $named = array_shift( $params );
    
    $num_ordered = count($params);
    $count = 1;

    $refFunc = new ReflectionMethod($obj, $method);
    foreach( $refFunc->getParameters() as $param ){
        //invokes ReflectionParameter::__toString
        if( $count > $num_ordered ) {
            $name = $param->name;
            $params[] = @$named[$name] ?: $param->getDefaultValue();
        }
        
        $count ++;
    }
   
    $callable = [$obj, $method]; 
    return call_user_func_array($callable, $params);
}


