<?php 

$user = 'root';
$pass = '';
$host = 'localhost';
$db = 'bloom-app';

try{
    $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo 'conected!';
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();

}




?>