$username = $_POST['username'];
$password = $_POST['password'];

// Attacker can enter: ' OR '1'='1 for username to bypass login
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db_connection, $query);
