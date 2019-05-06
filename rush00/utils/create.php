<?php
	if ($_POST["login"] == false || $_POST["passwd"] == false || $_POST["submit"] != "OK")
	{
		echo "<script>alert('Пустые поля.');</script>";
		echo '<script>location.replace("http://localhost:8080/index.php");</script>';
		exit ;
	}
    $new_user = array(
        "login" => $_POST["login"],
        "passwd" => hash('adler32', $_POST["passwd"])
    );
    $folder = "../json/users.json";
	if (!file_exists($folder)) {
        $to_put[] = $new_user;
		file_put_contents($folder, json_encode($to_put));
	}
	else {
        $to_put = json_decode(file_get_contents($folder));
		foreach ($to_put as $v)
			if ($v->login == $_POST['login'])
			{
				echo "<script>alert('Логин занят.');</script>";
				echo '<script>location.replace("http://localhost:8080/index.php");</script>';
				exit ;
			}
		$to_put[] = $new_user;
		file_put_contents($folder, json_encode($to_put));
	}
	echo '<script>location.replace("http://localhost:8080/index.php");</script>';
	exit ;
?>
