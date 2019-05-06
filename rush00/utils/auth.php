<?php
    if ($_POST["login"] == false || $_POST["passwd"] == false || $_POST["submit"] != "OK")
    {
        echo "<script>alert('Пустые поля.');</script>";
		echo '<script>location.replace("http://localhost:8080/index.php");</script>';
		exit ;
    }
    $folder = "../json/users.json";
    $to_put = json_decode(file_get_contents($folder));
    foreach ($to_put as $v) {
        if ($v->login == $_POST['login'] && $v->passwd == hash('adler32', $_POST["passwd"]))
        {
            session_start();
            $_SESSION['user'] = $_POST["login"];
            echo '<script>location.replace("http://localhost:8080/index.php");</script>';
            exit;
        }
    }
    echo "<script>alert('Нет такой пары логин/пароль.');</script>";
    echo '<script>location.replace("http://localhost:8080/index.php");</script>';
?>
