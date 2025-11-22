<form action="scenario13.php" method="POST"> <!-- setting up a form field when using GET/POST method -->
  <input type="text" name="id" placeholder="Student ID">
  <input type="email" name="email" placeholder="New Email">
  <button type="submit">Update</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");//undefined $conn, always declare before use
$newEmail = $_POST['email'];
$id = $_POST['id']; // student identifier

//no WHERE clause, without it, it will update all records, adding WHERE student_id=$id clauseso only the specific student record is updated
$sql = "UPDATE students SET email='$newEmail' WHERE student_id=$id";
mysqli_query($conn, $sql);
?>
