#!/usr/bin/php
<?php
if ($argc == 2)
{
	$r = file_get_contents($argv[1]);
	$r = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches) {
		//print_r($matches);
		return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
	}, $r);
	$r = preg_replace_callback('/(<a[^<]*>)([^<]*<)/', function ($matches)
	{
		//print_r($matches);
		return (str_replace($matches[2], strtoupper($matches[2]), $matches[0]));
	}, $r);
	echo $r;
}
?>
