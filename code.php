<?php
$ip = $_GET['ip'];
$output = shell_exec("ping -c 4 " . $ip);
echo $output;
?>



<?php
$name = $_GET['name'];
echo "Hello " . $name;
?>


<?php
$page = $_GET['page'];
include($page . ".php");
?>


<?php
$db_user = "admin";
$db_pass = "admin123";

$conn = new PDO("mysql:host=localhost;dbname=test", $db_user, $db_pass);
?>



<?php
$data = $_POST['data'];
$obj = unserialize($data);
?>



<?php
$file = $_GET['file'];
readfile("/var/www/uploads/" . $file);
?>
