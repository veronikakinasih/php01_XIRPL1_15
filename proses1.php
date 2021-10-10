<?php
if(isset($_GET['Nama']) and isset($_GET['E-mail']))
{
    $nama =$_GET['Nama'];
    $email =$_GET['E-mail'];
}
else{
    echo "silahkan mengisi terlebih dahulu<br><br>";
}
if(!empty($nama) ){
    echo "nama: $nama </br>";
    echo "E-mail: $email";
}
else{
    die("silahkan isi nama terlebih dahulu");
}
if(empty($email)){
    die("-");
}
?>
