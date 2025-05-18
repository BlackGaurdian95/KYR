<?php

$dsn = 'mysql:host=localhost;dbname=knowyourrights';
$dbusername = "root";
$dbpassword = "";


try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $е){
    echo "Connection failed: " . $е->getMessage();
}