// VULNERABLE: Direct concatenation of $_GET input
<?php 
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;
$result = $conn->query($query);
?>
