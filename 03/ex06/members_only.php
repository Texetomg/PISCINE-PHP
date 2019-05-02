<?php
    if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
    {
        $image = file_get_contents('../img/42.png');
        $base = base64_encode($image);
?>
<html><body>
Hello Zaz<br/>
<img src='<?php echo $base ?>'>
</body></html>
<?php
    }
    else {
?>
<html><body>That area is accessible for members only</body></html>
<?php
    }
?>
