#!/usr/bin/php
<?php
    function ft_split($string)
    {
        $split_str = explode(" ", $string);
        reset(sort($split_str));
        return($split_str);
    }
?>