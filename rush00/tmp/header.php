<!DOCTYPE html>

<html lang="ru">
    <head>
        <title>SHOP</title>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="wrap">
            <div class="header">
                <div class="nav">
                    <div class="head">
                    <form method="POST" action="index.php">
                        <div class="logo"><input type="image" src="imgs/logo.png" name="page" value="Домой" href="#" onclick=""/></div>
                    </form>
                    </div>
                    <ul id="links">
                        <form method="POST" action="index.php">
                            <li><?php if ($_SESSION['user'] != "non-auth") echo $_SESSION['user'] ?></li>
                            <li><input type="submit" name="page" value="Войти" href="#" onclick=""/></li>
                            <li><input type="submit" name="page" value="Регистрация" href="#" onclick=""/></li>
                            <li><input type="submit" name="page" value="Выход" href="#" onclick=""/></li>
                        </form>
                    </ul>    
                </div> 
            </div>
        </div>
