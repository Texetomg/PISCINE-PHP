#!/usr/bin/php
<?php
   if ($argc > 1)
   {
        $string = preg_replace("/\s+/ ", " ", $argv[1]);
        echo(trim($string))."\n";
   }
?>