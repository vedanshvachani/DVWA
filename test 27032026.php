<?php

$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
$result = $conn->query($query);




// VULNERABLE: Reflected XSS via direct echo
$name = $_GET['name'];
echo "<h1>Welcome, " . $name . "</h1>";

?>
