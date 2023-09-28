<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentId = $_POST['comment_id'];
    $commentContent = $_POST['comment_content'];

    $sql = "UPDATE comments SET Comment_content = '$commentContent' WHERE comment_id = $commentId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Comment updated successfully.";
    } else {
        echo "Error updating comment: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
