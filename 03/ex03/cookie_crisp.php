#!/usr/bin/php
<?php
    if ($_GET["action"] == "set")
        if ($_GET["name"] != false && $_GET["value"] != false)
            setcookie($_GET["name"], $_GET["value"]);
    else if ($_GET["action"] == "get")
        if ($_GET["name"] != false && $_COOKIE[$_GET["name"]] != false)
            echo $_COOKIE[$_GET["name"]] . "\n";
    else if ($_GET["action"] == "del")
        if ($_GET["name"] != false)
            setcookie($_GET["name"], "#", time() - 1);
?>