<?php
    if ($_POST["login"] == false ||
        $_POST["oldpw"] == false ||
        $_POST["newpw"] == false ||
        $_POST["submit"] != "OK")
		exit("ERROR1\n");
    $to_put = unserialize(file_get_contents("../private/passwd"));
    foreach ($to_put as &$v) {
        if ($v["login"] === $_POST["login"] && $v["passwd"] === hash("whirlpool", $_POST["oldpw"]))
        {
            $v["passwd"] = hash("whirlpool", $_POST["newpw"]);
            file_put_contents("../private/passwd", serialize($to_put));
            exit("OK\n");
        }    
    }
    exit("ERROR2\n");
?>