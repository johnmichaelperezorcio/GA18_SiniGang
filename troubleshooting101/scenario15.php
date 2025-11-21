<?php
$conn = mysqli_connect("localhost", "root", "", "class_db"); //for database connection

$page = $_GET['page'];
$limit = 5;
$offset = $page * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$result = mysqli_query($conn, $sql);//to run sql query

if (mysqli_num_rows($result) > 0) { //to show the limited students 
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['first_name'] . " " . $row['last_name'] . "<br>";
    }
} else {
    echo "No students found.";
}

?>