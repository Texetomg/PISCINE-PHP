#!/usr/bin/php
<?php
    $i = 1;
    while ($i < $argc)
    {
        $string .= $argv[$i] . " ";
        $i++;
    }
    $string = explode(" ", trim($string));
    sort($string);
    foreach($string as $str)
        echo $str . "\n"
?>