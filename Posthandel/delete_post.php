<?php
// Database connection
include '../Partials/_Db-connect.php';

// Check if the post ID is provided
if (isset($_POST['postId'])) {
    $postId = $_POST['postId'];

    // Delete the post from the database
    $sql = "DELETE FROM posts WHERE post_id = '$postId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Post deleted successfully
        echo json_encode(['status' => 'success']);
    } else {
        // Error occurred while deleting the post
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete the post.']);
    }
} else {
    // Invalid request, post ID not provided
    echo json_encode(['status' => 'error', 'message' => 'Invalid request.']);
}
?>
