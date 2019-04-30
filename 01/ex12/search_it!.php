#!/usr/bin/php
<?php
    if ($argc > 3)
    {
        $i = 2;
        while ($i < $argc)
        {
            $array = explode(":", $argv[$i]);
            if (strcmp($argv[1], $array[0]) == 0)
                echo $array[1] . "\n";
            $i++;
        }
    }
?>