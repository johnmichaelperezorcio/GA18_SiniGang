<form action="scenario5.php" method="POST">  <!-- use a form field when using GET/POST method -->
  <input type="email" name="email" placeholder="Enter email">
  <button type="submit">Submit</button>
</form>

<?php
$conn = mysqli_connect("localhost","root","","class_db");
$email = $_POST['email']; // corrected spelling of variable
$sql = "SELECT * FROM students WHERE email='$email'";
$res = mysqli_query($conn, $sql);
?>