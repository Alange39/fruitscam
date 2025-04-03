<?php
$servername = "localhost";
$dbname= "fruitscam" ;
$username="root";
$password="";
try {
    $conn= new PDO("mysql:host=$servername;dbname=$dbname;$username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo"cool";
} catch (PDOException $e) {
    echo"pas cool". $e->getMessage();
}
?>