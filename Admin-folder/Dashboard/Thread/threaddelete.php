<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

// for establishing a database connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    // echo "con successful";
} else {
    // echo "not success";
}

if (isset($_POST['postid'])) { // Change "threadid" to "postid"
    $threadid = $_POST['postid'];

    $sql = "DELETE FROM thread WHERE `thread_id` = $threadid";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $response = [
            'code' => 200,
            'message' => "Thread deleted successfully!",
        ];
        echo json_encode($response);
        exit();
    }
}

?>
