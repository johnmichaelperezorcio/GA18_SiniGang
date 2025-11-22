<?php 
$page = isset($_GET['page']) ? intval($_GET['page']) : 0; //uses intval to ensure we get numeric input

// if condition loop, validate and restrict page number, without it, users can input negative numbers or excessively high values
if ($page < 0) {
    $page = 0; // minimum page
}
if ($page > 100) {
    $page = 100; // maximum allowed page
}

$limit = 5; 
$offset = $page * $limit; 

$sql = "SELECT * FROM students LIMIT $offset, $limit"; 
?>
