<?php
// Include this code in like_post.php
include '../Partials/_Db-connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postId'])) {
    $postId = $_POST['postId'];
    $userId = $_SESSION['user_id'];

    $checkLikeQuery = "SELECT * FROM likes WHERE user_id = $userId AND post_id = $postId";
    $checkLikeResult = mysqli_query($conn, $checkLikeQuery);

    if (mysqli_num_rows($checkLikeResult) === 0) {
        $recordLikeQuery = "INSERT INTO likes (user_id, post_id) VALUES ($userId, $postId)";
        if (mysqli_query($conn, $recordLikeQuery)) {
            // Successfully liked, send a notification to the post owner
            $postOwnerId = getPostOwnerId($conn, $postId);
            sendNotification($conn, $postOwnerId, $postId);
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'already_liked';
    }
} else {
    echo 'invalid_request';
}

function getPostOwnerId($conn, $postId) {
    $query = "SELECT post_user_id FROM posts WHERE post_id = $postId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['post_user_id'];
}

function sendNotification($conn, $userId, $postId) {
    $notificationType = 'like';
    $query = "INSERT INTO notifications (user_id, post_id, notification_type) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'iis', $userId, $postId, $notificationType);

    if (mysqli_stmt_execute($stmt)) {
        return true;
    } else {
        return false;
    }
}
?>