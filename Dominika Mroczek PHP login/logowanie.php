<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
$login = $_POST["login"];
$haslo = $_POST["haslo"];
$users = [
    ["login" => "admin1", "haslo" => "123"],
    ["login" => "admin2", "haslo" => "1234"],
    ["login" => "admin3", "haslo" => "12345"],
    ["login" => "admin4", "haslo" => "123456"],
    ["login" => "admin5", "haslo" => "1234567"],
];

$zalogowano = false;

foreach($users as $user){
    if($login == $user["login"] && $haslo == $user["haslo"]){
        $zalogowano=true;
        break;
    }
}
if($zalogowano){
      echo "<p id='success'>Logowanie zakonczone pomyslnie</p>";
        echo "<button onclick=\"window.location.href = 'index.php'\">Wyloguj</button>";
        echo "
            
    <hr> 
    <form action=\"sport.php\" method='post'>
         <input type=\"text\" name=\"tytul\" id=\"tytul\" placeholder='tytul'><br> <br>
        <input type=\"text\" name=\"opis\" id=\"opis\" placeholder='opis'> <br> <br> 
        <input type=\"text\" name='img' id='img' placeholder='link do zdjecia'> <br> <br>
        <button type=\"submit\">przeslij do bazy</button>
    </form>
            ";     
       
}
if($zalogowano=false){
    echo "<p>Zly login lub haslo</p>";
    echo "<button onclick=\'window.location.href = index.php'\">Wroc do logowania</button>";
}

?>


    <?php
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $users = [
        ["login" => "admin1", "haslo" => "123"],
        ["login" => "admin2", "haslo" => "1234"],
        ["login" => "admin3", "haslo" => "12345"],
        ["login" => "admin4", "haslo" => "123456"],
        ["login" => "admin5", "haslo" => "1234567"],
    ];

    $zalogowano = false;

    foreach($users as $user){
        if($login == $user["login"] && $haslo == $user["haslo"]){
            $zalogowano=true;
            break;
        }
    }
   
    ?>
</body>
</html>

