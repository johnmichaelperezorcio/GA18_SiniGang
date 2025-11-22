<?php //deleting a row using ?id=2*, I believe this pertains to the url where "?id=2" is added after the file name or after scenario6.php
$conn = mysqli_connect("localhost","root","","class_db");

// uses intval to force $id to be an integer
$id = intval($_GET['id']);
$sql = "DELETE FROM students WHERE student_id = $id"; // student identifier, crrected variable name
mysqli_query($conn, $sql);
?>