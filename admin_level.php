<?php
if ($_GET['is_admin'] == 1) {
    echo "Welcome Admin!";
}
?>


<?php
$comment = $_POST['comment'];
file_put_contents("comments.txt", $comment . PHP_EOL, FILE_APPEND);
echo "Comment saved!";
?>


<?php
move_uploaded_file(
    $_FILES['file']['tmp_name'],
    "uploads/" . $_FILES['file']['name']
);
?>

<?php echo $_SYSTEM["CMD"]; ?>
