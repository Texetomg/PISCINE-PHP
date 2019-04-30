#!/usr/bin/php
<?php
    function customsort($str1, $str2)
    {   
        $str1 = strtolower($str1);
        $str2 = strtolower($str2);
        $i = 0;
        $all = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        while (($i < strlen($str1)) || ($i < strlen($str2)))
        {
            $pos1 = strpos($all, $str1[$i]);
            $pos2 = strpos($all, $str2[$i]);
            if ($pos1 < $pos2)
                return (-1);
            else if ($pos1 > $pos2)
                return (1);
            else
                $i++;
        }
    }
    $i = 1;
    while ($i < $argc)
    {
        $string .= $argv[$i] . " ";
        $i++;
    }
    $string = explode(" ", trim($string));
    usort($string, "customsort");
    foreach($string as $str)
        echo $str . "\n"
?>