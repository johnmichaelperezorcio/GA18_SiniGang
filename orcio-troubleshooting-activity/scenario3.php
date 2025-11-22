<form action="scenario3.php" method="GET">  <!-- use a form field when using GET/POST method -->
  <input type="number" name="age" placeholder="Enter age">
  <button type="submit">Search</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");

$age = $_GET['age'];

// Use the prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age); // "i" = integer
$stmt->execute();

$res = $stmt->get_result();
// Fetch and display all matching records
while ($row = $res->fetch_assoc()) {
    echo $row['first_name'] . " - " . $row['email'] . "<br>";
}
?>