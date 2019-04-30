#!/usr/bin/php
<?php
    if ($argc > 1) {
        $string = trim(preg_replace("/\s+/ ", " ", $argv[1]));
        $string = explode(" ", $string);
        array_push($string, $string[0]);
        unset($string[0]);
        echo implode(" ", $string) . "\n";
    }
?>