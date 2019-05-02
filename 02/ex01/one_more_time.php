#!/usr/bin/php
<?php
	if ($argc > 1)
	 {
		date_default_timezone_set('Europe/Paris');
		$days = ["lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi", "dimanche"];
		$months = [	1=>"janvier",
					2=>"février",
					3=>"mars",
					4=>"avril",
					5=>"mai",
					6=>"juin",
					7=>"juillet",
					8=>"août",
					9=>"septembre",
					10=>"octobre",
					11=>"novembre",
					12=>"décembre"];
		$array = explode(" ", $argv[1]);
		$time = explode(":", $array[4]);   
		if(in_array(strtolower($array[0]), $days) &&
			strlen($array[1]) < 3 &&
			preg_match("/[1-31]/", $array[1]) &&
			in_array(strtolower($array[2]), $months))
			echo mktime($time[0], $time[1], $time[2], array_search(strtolower($array[2]), $months), $array[1], $array[3]) . "\n";
		else
			echo "Wrong Format" . "\n";
	 }
?>