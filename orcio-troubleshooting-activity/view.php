<?php
// code for displaying the information of students from "?id=3" link in scenario9.php
$conn = mysqli_connect("localhost", "root", "", "class_db");

// id from URL (?id=3)
$id = intval($_GET['id']); // uses intval for safe integer conversion

// query, fetching the student by id
$sql = "SELECT * FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $sql);

// using while loop to echo the deets
while ($row = mysqli_fetch_assoc($res)) {
    echo "Student Details: <br><br>";
    echo "First Name: " . $row['first_name'] . "<br>";
    echo "Last Name: " . $row['last_name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Age: " . $row['age'] . "<br>";
}
?>