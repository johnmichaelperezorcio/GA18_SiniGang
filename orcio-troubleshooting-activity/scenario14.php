<form action="scenario14.php" method="POST"> <!-- setting up a form field when using GET/POST method -->
  <input type="text" name="first_name" placeholder="First Name">
  <input type="text" name="last_name" placeholder="Last Name">
  <input type="email" name="email" placeholder="Email">
  <button type="submit">Insert</button>
</form>

<?php
$data = $_POST;
$sql = "INSERT INTO students (first_name, last_name, email)
VALUES ('{$data['first_name']}, '{$data['last_name']}', '{$data['email']}')"; //array keys must be wrapped in quotes, without them the MySQL thinks they are column names
?>