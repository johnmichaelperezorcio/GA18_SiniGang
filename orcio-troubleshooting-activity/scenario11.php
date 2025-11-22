<form method="POST" action="scenario11.php"> <!-- setting up a form field when using corrected POST method -->
    <input name="email">
    <button type="submit">Search</button>
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "class_db"); //declare the database connection
$email = $_POST['email'];
$sql = "SELECT * FROM students WHERE email = '$email'";
$res = mysqli_query($conn, $sql);

//while loop to fetch the result and using it in a phrase.
while($row = mysqli_fetch_assoc($res)) {
    echo $row['first_name'] . " email is " . $row['email'] . "<br>";
}
?>