<?php 

include"database.php";
 
$name = $_POST["name"];

$Update = $db->query("UPDATE `note book` SET name = '$name' ");


header("location: index.php");

?>