<?php
// Include database connection and session start
include '../Partials/_Db-connect.php';
session_start();

// Debugging statement to check if the script is being executed
error_log("fetch_notifications.php is being executed.", 0);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postId'])) {
    $postId = $_POST['postId'];

    // Debugging statement to check received POST data
    error_log("Received POST data: " . print_r($_POST, true));

    // Use prepared statements to prevent SQL injection
    $query = "SELECT users.name FROM likes
              INNER JOIN users ON likes.user_id = sno
              WHERE likes.post_id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind the parameter
        mysqli_stmt_bind_param($stmt, "i", $postId);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Get the result set
            $result = mysqli_stmt_get_result($stmt);

            // Check if the query was successful
            if (mysqli_num_rows($result) > 0) {
                // Display usernames of users who liked the post
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<p>User ' . $row['name'] . ' liked the post.</p>';
                }
            } else {
                echo '<p>No users liked this post.</p>';
            }
        } else {
            // Print any database errors
            error_log('MySQL Error: ' . mysqli_error($conn));
            echo 'MySQL Error: ' . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        // Print any database errors
        error_log('MySQL Error: ' . mysqli_error($conn));
        echo 'MySQL Error: ' . mysqli_error($conn);
    }
} else {
    echo 'Invalid request.';
}

// Close the database connection
mysqli_close($conn);
?>