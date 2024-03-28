<?php include"database.php";

$task_id = $_GET["task_id"];
$Delete = $db->query("DELETE  FROM  task  WHERE  id = $task_id");

header("location: index.php");
?>