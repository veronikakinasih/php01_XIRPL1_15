<DOCSTYPE html>
<head>
    <title>
        Array Numerik dan Assosiatif
    </title>
</head>
<body>
    <?php
        $data = array("Satria" => "XI RPL 1", "Arsyi" => "XI RPL 2", "Dhika" => "XI RPL 3" , "Evan" => "XI RPL 4" , "Fabian" => "XI RPL 5" , "Irfan" => "XI RPL 6");
        foreach($data as $a => $a_value) {
            echo " Nama : " . $a . " Kelas : " . $a_value;
            echo "<br>";
        }
        
    ?>
</body>
</html>