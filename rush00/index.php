<?php
session_start();
if ($_SESSION['user'] == null)
    $_SESSION['user'] = "non-auth";
$cart = json_encode("json/cookies.json");

$_POST["page"] == "Домой";
require ("tmp/header.php");
require ("tmp/main.php");
require ("tmp/footer.php");
?>