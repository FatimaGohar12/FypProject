<?php
// Include database connection
include '../Partials/_Db-connect.php';

// Get the search query from the main page
$searchInput = $_POST['searchInput'];

// Query to search for posts
$sql = "SELECT * FROM `posts` WHERE `post_title` LIKE '%$searchInput%' OR `post_content` LIKE '%$searchInput%'";
$result = mysqli_query($conn, $sql);

// Check if there are any search results
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['post_id'];
        $postTitle = $row['post_title'];
        $postContent = $row['post_content'];

        // Output the matching posts
        echo '
        <div class="col-md-4">
            <div class="card post-card">
                <div class="card-body">
                    <h5 class="card-title"><a href="./threadlist.php?id=' . $id . '">' . $postTitle . '</a></h5>
                    <p class="card-text">' . substr($postContent, 0, 30) . '</p>
                    <a href="./postreccord.php?id=' . $id . ' " class="btn btn-success btn-sm">View Posts</a>
                  
        <button class="btn btn-outline-primary like-button" data-post-id='. $id.'><i class="fas fa-heart"></i> Like</button>
                </div>
            </div>
        </div>';
    }
} else {
    // No results found
    echo '<p>No results found</p>';
}

// Close the database connection
mysqli_close($conn);
?>