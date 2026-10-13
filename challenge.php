<?php

$host = "localhost";
$user = "root";
$dbname = "deon";
$pass = "";



// krijimi i databazes
 try{
     $conn = new PDO("mysql:host=$host", $user,$pass);
    $sql = "CREATE DATABASE deon";
     $conn->exec($sql);

     echo "Databasa u krijua";
 }
 catch (Exception $e){
     echo "Databaza nuk eshte kriju";
}





//krijimi i tabeles
// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

//     $sql = "CREATE TABLE kafshet (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)";

//     $pdo ->exec($sql);

//     echo "Tabela u krijua me sukses";
// }
//     catch(Expection $e){

//     echo "tabela nuk eshte krijuar";
// }






//krijimi i kolonave
try{
    $pdo = new PDO("mysql:host=localhost;dbname=deon", "root", "");

    $sql = "ALTER TABLE kafshet ADD emri VARCHAR(255)";

    $pdo->exec($sql);

    echo" Kolona u shtua";

}
catch(PDOException $e){
    echo"Erorr";

}

try{
    $pdo = new PDO("mysql:host=localhost;dbname=deon", "root", "");

    $sql = "ALTER TABLE kafshet ADD mosha VARCHAR(255)";

    $pdo->exec($sql);

    echo" Kolona u shtua";

}
catch(PDOException $e){
    echo"Erorr";
}



//insertimi i te dhenave

try{

$pdo = new PDO("mysql:host=localhost;dbname=deon", "root");

$emri = "qen";

$mosha = "5";

$sql = "INSERT INTO kafshet (emri, mosha) VALUES ('$emri','$mosha')";

$pdo->exec($sql);

echo"Te dhenat jane shtuar";
}
catch(PDOException $e){
    echo"Te dhenat nuk jane shtuar";
}


//fshirja e kolonave
try{
    $pdo = new PDO("mysql:host=localhost;dbname=deon", "root", "");

    $sql = "ALTER TABLE kafshet DROP COLUMN mosha";

        $pdo->exec($sql);

    echo" Kolona u fshi";

}
catch(PDOException $e){
    echo"Erorr";
}

//fshirja e tabeles
try{
    $pdo = new PDO("mysql:host=localhost;dbname=deon", "root", "");

    $sql = "DROP TABLE kafshet";

        $pdo->exec($sql);

    echo" Tabela u fshi";

}
catch(PDOException $e){
    echo"Erorr";
}







?>