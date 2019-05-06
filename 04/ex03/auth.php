<?php
    function auth($login, $passwd)
    {
        $users = unserialize(file_get_contents("../private/passwd"));
        foreach ($users as $value)
        {
            if ($value["login"] == $login && $value["passwd"] == hash('whirlpool', $passwd))
                return true;
            else
                return false;
        }
    }
?>