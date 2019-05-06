<?php
    echo "<h3>Вход</h3><br>";
    echo "<form method='POST' action='utils/auth.php'>";
    echo "Username: <input type='text' name='login' value=''/>";
    echo "<br/>";
    echo "Password: <input type='password' name='passwd' value=''/>";
    echo "<br/>";
    echo "<input type='submit' name='submit' value='OK'/>";
    echo "</form>";
?>