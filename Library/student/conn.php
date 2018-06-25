<?php
$host="172.27.50.242";
$user="root";
$password="";
$dbname="l_project";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user,$password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
