<form action="scenario10.php" method="POST"> <!-- setting up a form field when using POST/GET method -->
  <input type="text" name="age" placeholder="Enter Age">
  <button type="submit">Search</button>
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "class_db"); //declare the database connection
$age = $_POST['age']; 
$sql = "SELECT * FROM students WHERE age = $age"; // corrected spelling of the variable
$res = mysqli_query($conn, $sql);

//while loop to fetch the result and using it in a phrase.
while($row = mysqli_fetch_assoc($res)) {
    echo $row['first_name'] . " is " . $row['age'] . " years old.<br>";
}
?>