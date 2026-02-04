<?php
$server = 'localhost';
$port = 3306;
$baza = 'baza_sport';
$user = 'root';
$password = '';
$polaczenie = new mysqli($server, $user, $password, $baza, $port);
if(mysqli_connect_errno() != 0){
    echo "Blad polaczenia z baza danych".mysqli_connect_error();
}
else{
    echo 'polaczenie do bazy danych powiodlo sie';
}

$tytul = $_POST["tytul"];
$opis = $_POST["opis"];
$img = $_POST["img"];

?>