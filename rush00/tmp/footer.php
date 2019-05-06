</body>
<footer>
 &copy;bfalmer- trhogoro 2019
 <br>
 <div class='card'>
 <?php
    $folder_cookies = "json/cookies.json";
    $folder_goods = "json/goods.json";
    $cookies = json_decode(file_get_contents($folder_cookies));
    $goods = json_decode(file_get_contents($folder_goods));
    foreach ($cookies as $v)
    {
        $key = 0;
        foreach ($goods as $s)
        {
            $key++;
            if ($key == $v->name)
            {
                echo "<div class='card-item'>";
                echo $s->name . "<br>";
                echo "<img src=".$s->image.">" . "<br>";
                echo "кол-во: " . $v->count . "<br>";
                echo "<form method='post' action='utils/add_good.php'>";
                echo "<button type='submit' art='$key' name='del' value='$key'>Удалить</button> <br>" ;
                echo "</div>";
            }
        }  
    }
 ?>
 </div>
</footer>
</html>