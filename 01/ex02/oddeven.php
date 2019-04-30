#!/usr/bin/php
<?php
    echo "Enter a number: ";
    while (1)
    {
        $line = trim(fgets(STDIN));
        if (feof(STDIN)) {
			echo "\n";
			break ;
		}
        if (!is_numeric($line))
            echo "'$line' is not a number\n";
        else {
            if ($line % 2 != 0)
                echo "The number '$line' is odd\n";
            else
                echo "The number '$line' is even\n";
        }
        echo "Enter a number: ";
    }
?>