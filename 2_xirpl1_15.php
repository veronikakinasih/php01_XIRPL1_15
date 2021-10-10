<DOCSTYPE html>
    <head>
        <title>
            Belajar PHP 2
        </title>
    </head>
    <body>
        <?php
            echo "<h2> Perulangan </h2>";

            echo date('d - m - Y  h:i:s');
            echo "<br>";
            for($i = 5; $i >=1; $i--) {
                for($j = 1; $j <= $i; $j++) {
                    echo "*";
                    if($j < $i){
                        echo " ";
                    }
                }
                echo "<br />";
            }
        ?>
    </body>