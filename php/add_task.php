<?php include"header.php";
include"database.php";
?>
<head>
    <link rel="stylesheet" href="add_task.css" type="text/css">
</head>
<br><br>
<form action="Add_task_process.php" method="post">
    <div class="container mt-3">
   

<br>
<div class="task__name">
<h2 class="title__head">Add a task time</h2>
<br>
<input type="text" name="name" id="" class="input__name__add" placeholder="Click me">
</div>

<div class="task__time">
<h2 class="title__head">enter the task number</h2>
<br>
<input type="number" name="number" id="" class="input__time__add" placeholder="Click me">
</div>
<div class="task__time">
<h2 class="title__head">Add a task time</h2>
<br>
<input type="time" name="time" id="" class="input__time">
</div>
<button type="submit" class="btn__submit">Send</button>
</div></form>

