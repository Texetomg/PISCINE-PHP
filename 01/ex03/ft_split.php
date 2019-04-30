#!/usr/bin/php
<?php
    function ft_split($string)
    {
        $split_str = explode(" ", $string);
        sort($split_str);
        reset($split_str);
        return($split_str);
    }
?>