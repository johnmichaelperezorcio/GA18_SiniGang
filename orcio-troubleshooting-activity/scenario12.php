<?php 
$id = $_GET['id']; 
$sql = "SELECT * FROM students WHERE student_id = $id"; //use/call the defined variable name in db, since id is not a string,remove the quotes around $id
?> 