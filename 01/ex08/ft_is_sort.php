#!/usr/bin/php
<?php
    function($arr) {
        $sub_arr = $arr;
        sort($arr);
        $i = 0;
        if (array_diff_assoc($sub_arr, $arr) == NULL)
            return (true);
        return (false);
    }
?>