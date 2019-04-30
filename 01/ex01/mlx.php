#!/usr/bin/php
<?php
    $x = 0;
    $i = 0;
    while ($x < 1000)
    {
        echo "X";
        $i+=1;
        $x+=1;
        if ($i == 100)
        {
            echo "\n";
            $i = 0;
        }
    }
   
?>