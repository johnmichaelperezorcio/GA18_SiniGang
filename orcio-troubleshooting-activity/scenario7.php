<form action="scenario7.php" method="POST"> <!-- setting up a form field when using GET/POST method -->
  <input type="text" name="id" placeholder="Student ID">
  <input type="email" name="email" placeholder="New Email">
  <button type="submit">Update</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");

//assuming form POST method is used
$id = $_POST['id'];
$email = $_POST['email'];

$sql = "UPDATE students SET email='$email' WHERE student_id=$id";

$res = mysqli_query($conn, $sql);

//conditional to check if update was successful
if ($res) {
    echo "Updated!";
} else {
    echo "Error updating: " . mysqli_error($conn);
}
?>