<?php 

$hostName="localhost";
$userName="root";
$password="";
$dbName="codeyad";

try {
    $connection=new PDO("mysql:host=$hostName;dbname=$dbName",$userName,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "success";
} catch ( PDOException $e) {
    echo "connection failed".$e->getMessage();
}



?>