<div class="main">
<?php
    if($_POST["page"] == "Регистрация")
        require ("tmp/registration.php");
    else if ($_POST["page"] == "Домой" || $_POST["page"] == null)
        require ("tmp/home.php");
    else if ($_POST["page"] == "Войти" || $_POST["page"] == null)
        require ("tmp/login.php");
    else if ($_POST["page"] == "Выход")
    {
        $_SESSION['user'] = '';
        require ("tmp/home.php");
    }
?>
</div>