<?php
    session_start();
    function change_count(&$count, $value, $folder, $to_put)
    {
        $count = $count + $value;
        file_put_contents($folder, json_encode($to_put));
        echo '<script>location.replace("http://localhost:8080/index.php");</script>';
        exit;
    }
    $good = $_POST["buy"];
    $folder = "../json/cookies.json";
    $new_cart = array(
        "user" => $_SESSION["user"],
        "name" => $_POST["buy"],
        "count" => 1
    );
    if (!file_exists($folder)) {
        $to_put[] = $new_user;
        file_put_contents($folder, json_encode($to_put));
        print_r($to_put);
    }
    else if ($_POST["buy"] != "buy")
    {
        $to_put = json_decode(file_get_contents($folder));
        foreach ($to_put as &$v) {
            if ($v->name == $_POST["buy"])
                change_count($v->count, 1, $folder, $to_put);
            if ($v->name == $_POST["del"])
            {
                if ($v->count > 0)
                    change_count($v->count, -1, $folder, $to_put);
                //if ($v->count == 0)
                    //unset??
            }
        }
        $to_put[] = $new_cart;
        file_put_contents($folder, json_encode($to_put));
    }
    echo '<script>location.replace("http://localhost:8080/index.php");</script>';
?>