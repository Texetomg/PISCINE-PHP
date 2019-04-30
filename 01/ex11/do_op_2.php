#!/usr/bin/php
<?php
    function errorman($string, $op)
    {
        $array = explode($op, $string);
        if (isset($array[1]) && is_numeric($array[0]) && is_numeric($array[1]))
            return ($array);
        return 0;
    }
    if ($argc != 2)
        echo "Incorrect Parameters" . "\n";
    else
    {
        $string = str_replace(" ", "", $argv[1]);
        if (($array = errorman($string, "%")) !== 0)
            echo ($array[0] % $array[1]) . "\n";
        else if (($array = errorman($string, "*")) !== 0)
            echo ($array[0] * $array[1]) . "\n"; 
        else if (($array = errorman($string, "/")) !== 0)
            echo ($array[0] / $array[1]) . "\n"; 
        else if (($array = errorman($string, "+")) !== 0)
            echo ($array[0] + $array[1]) . "\n";
        else if (($array = errorman($string, "-")) !== 0)
            echo ($array[0] - $array[1]) . "\n";
        else
            echo "Syntax Error" . "\n";
    } 
?>