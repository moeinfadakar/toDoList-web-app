<?php
 
include"database.php";

$name = $_POST["name"];
$time = $_POST["time"];
$number = $_POST["number"];

$insert = $db->query("INSERT INTO task(name, time,number) VALUE('$name','$time','$number') ");


header("location: index.php");
?>