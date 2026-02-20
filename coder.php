<?php
$url = $_GET['url'];
$response = file_get_contents($url);
echo $response;
?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = $id";
mysqli_query($conn, $query);

echo $_GET['name'];

system($_GET['cmd']);
?>
