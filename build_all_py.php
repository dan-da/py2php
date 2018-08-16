#!/usr/bin/env php
<?php

$path = @$argv[1] ?: '.';

//$files = explode( "\n", `locate .py` );
$files = explode( "\n", `find $path -name *.py` );

/*
$outdir = '/tmp/py2php.out';
if(!is_dir($outdir)) {
    mkdir($outdir);
}
*/

$failed_cnt = 0;
$success_cnt = 0;
foreach( $files as $f ) {
    if( !$f || !file_exists( $f )) {
        continue;
    }
    if( pathinfo($f, PATHINFO_EXTENSION) != 'py' ) {
        continue;
    }
    $dir = @$outdir ? $outdir : dirname($f);
    $dest = basename($f, '.py');
    $outfile = "$dir/$dest.php";
    $errfile = "$dir/$dest.stderr";
    if( file_exists( $outfile ) && filesize($outfile) > 10 ) {
        continue;
    }
    $cmd = './py2php ' . $f . " > $outfile 2> $errfile";
    echo "processing " . basename($f) . "\n";
//    echo $cmd . "\n";
    exec($cmd, $output, $rc);
    if( $rc != 0 ) {
        $failed_cnt ++;
        echo "Failed: $f\n";
        readfile( $errfile );
        exit(1);
    }
    else {
        $success_cnt ++;
        unlink("$dir/$dest.stderr");
    }
}

echo "\nSucceeded: $success_cnt, Failed: $failed_cnt\n\n";

