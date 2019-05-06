<?php
	if ($_POST["login"] == false || $_POST["passwd"] == false || $_POST["submit"] != "OK")
		exit("ERROR\n");
	$new_user = ["login" => $_POST["login"], "passwd" => hash('whirlpool', $_POST["passwd"])];
	if (!file_exists("../private"))
		mkdir("../private", 0755, true);
	if (!file_exists("../private/passwd")) {
		$to_put[] = $new_user;
		file_put_contents("../private/passwd", serialize($to_put));
	}
	else {
		$to_put = unserialize(file_get_contents("../private/passwd"));
		foreach ($to_put as $v)
			if ($v['login'] == $_POST['login'])
				exit("ERROR\n");
		$to_put[] = $new_user;
		file_put_contents("../private/passwd", serialize($to_put));
	}
	exit("OK\n");
?>