#!/usr/bin/php
<?php
    if ($argc > 1) {
        $string = trim(preg_replace("/\s+/ ", " ", $argv[1]));
        $string = explode(" ", $string);
        $buff = $string[0];
        unset($string[0]);
        array_push($string, $buff);
        print_r($string);
    }
?>