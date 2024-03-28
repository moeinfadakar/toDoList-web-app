
<?php 

include"database.php";


$id = $_POST["id"];
$task_time = $_POST["time"];
$task_text = $_POST["answer"];

$Update = $db->query("UPDATE task SET name = '$task_text ', time = '$task_time'  WHERE id = $id ;");

header("location: index.php");
?>