<?php 
$conn = mysqli_connect("localhost", "root", "", "class_db");

//changing method from POST to GET that reads id from the URL (?id=3)
$id = $_GET['id']; 

//id is not declared in the students table so calling id does not call anything, change it to student_id
$sql = "SELECT * FROM students WHERE student_id = $id"; 
$res = mysqli_query($conn, $sql);

$r = mysqli_fetch_assoc($res); 
echo $r['first_name']; 
?>