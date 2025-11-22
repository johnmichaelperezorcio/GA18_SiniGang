<form action="scenario4.php" method="POST"> <!-- setting up a form field when using POST method -->
  <input type="text" name="fname" placeholder="First Name">
  <input type="text" name="lname" placeholder="Last Name">
  <button type="submit">Insert</button>
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db");

$first = $_POST['fname']; 
$last = $_POST['lname'];

//if loop condition to validate if fields are empty
if(!empty($first) && !empty($last)) {
    $sql = "INSERT INTO students (first_name,last_name) VALUES ('$first', '$last')";
    if (mysqli_query($conn, $sql)) {
        echo "Inserted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>