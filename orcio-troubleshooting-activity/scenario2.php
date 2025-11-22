<form action="scenario2.php" method="POST"> <!-- setting up a form field when using POST method -->
  <input type="text" name="fname" placeholder="First Name">
  <button type="submit">Search</button>
</form>

<?php 
$conn = mysqli_connect("localhost","root","","class_db");

$fname = $_POST['fname']; //the value here will be coming from the form field input name="fname"

//missing quote around array key 'fname', by only calling $fname, the system will only interpret it as if you are calling a column name, not the string value
$sql = "SELECT * FROM students WHERE first_name = '$fname'"; 

$res = mysqli_query($conn, $sql);

//while loop to fetch the result
while($r = mysqli_fetch_assoc($res)) {
    echo $r['first_name'] . " " . $r['last_name'] . "<br>";
}
?> 