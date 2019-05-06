<?php
    $folder = "json/goods.json";
    $goods = json_decode(file_get_contents($folder));
    
    foreach ($goods as $v)
    {
        $key++;
        echo "<div class='goods'>";
        echo $v->name . "<br>";
        echo "<img src=".$v->image.">" . "<br>";
        echo "цена: " . $v->cost . "<br>";
        echo "<form method='post' action='utils/add_good.php'>";
        echo "<button type='submit' art='$key' name='buy' value='$key'>Купить</button> <br>" ;
        echo "</div>";
    }
?>