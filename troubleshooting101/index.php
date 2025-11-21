<form action="scenario5.php" method="POST">
  <input type="email" name="email" placeholder="Enter email">
  <button type="submit">Search</button>
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "class_db");
$res = mysqli_query($conn, "SELECT all FROM students")
while ($row = mysqli_fetch_assoc($res)) {
    echo $row['first_names'] . "<br>";
    }
?>