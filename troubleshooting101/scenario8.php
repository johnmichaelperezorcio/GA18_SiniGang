<?php //in here, the line of the condition to loop is wrong, it only feches only one row but it needs to loop all rows of the email
$conn = mysqli_connect("localhost","root","","class_db");
$res = mysqli_query($conn,"SELECT * FROM students");

// corrected loop condition to fetch all rows
while ($row = mysqli_fetch_assoc($res)) {
echo $row['email'] . "<br>";
}
?>