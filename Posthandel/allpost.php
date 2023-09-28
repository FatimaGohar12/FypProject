<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Include SweetAlert -->
    <title>Posts</title>
</head>
<style>
.card-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card {
    flex-basis: calc(33.33% - 20px);
    margin: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    padding: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

body {
    background-color: #eee;
    font-family: "Poppins", sans-serif;
    font-weight: 300;
}

.height {
    height: 100vh;
}

.search {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1);
}

.search input {
    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4;
}

.search input:focus {
    box-shadow: none;
    border: 2px solid blue;
}

.search .fa-search {
    position: absolute;
    top: 20px;
    left: 16px;
}

.search button {
    position: absolute;
    top: 5px;
    right: 5px;
    height: 50px;
    width: 110px;
    background: blue;
}

.card {
    box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
    transition: all 0.5s ease-in-out;
}

.card:hover {
    cursor: pointer;
    background-color: RGBA(47, 0, 80, 0.06);
    transform: scale(0.9);
}

.no-results {
    text-align: center;
    margin-top: 20px;
}

/* Add a style for the liked button */
.liked {
    background-color: red !important;
    /* Change this to your desired liked color */
}

/* Add a style for the liked button */
.like-button.liked {
    background-color: red !important;
    /* Change this to your desired liked color */
    color: white;
    /* Text color for the liked state */
}
</style>

<body>
    <?php
    // Database connection include
    include '../Partials/_Db-connect.php';
    // Header include
    require '../navbar/_header.php';
    if (!isset($_SESSION['user_id'])) {
    echo '<p class="text-center text-danger my-2">Please Login to create Your post.</p>';
    }
    ?>
    <div class="container my-3">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search">
                    <form action="" method="post" name="form" id="searchForm">
                        <i class="fa fa-search"></i>
                        <input type="text" id="searchInput" name="searchInput" class="form-control rounded-pill"
                            placeholder="Search Post here...">
                        <button id="searchButton" class="btn btn-primary btn-sm rounded-pill">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss-Posts</h2>
        <div class="row my-4">
            <?php
        $limit = 6; // Number of cards to display per page
        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Get the current page number

        $sql = "SELECT COUNT(*) AS total FROM `posts`";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $totalPages = ceil($row['total'] / $limit); // Calculate the total number of pages

        $offset = ($page - 1) * $limit; // Calculate the offset for the SQL query

        $sql = "SELECT * FROM `posts` LIMIT $offset, $limit";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['post_id'];
            $postTitle = $row['post_title'];
            $postContent = $row['post_content'];

            echo '
            <div class="col-md-4">
                <div class="card post-card">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./threadlist.php?id=' . $id . '">' . $postTitle . '</a></h5>
                       
                        <a href="./postreccord.php?id=' . $id . ' " class="btn btn-success btn-sm">View Posts</a>
                      
<button class="btn btn-outline-primary like-button" data-post-id='. $id.'><i class="fas fa-heart"></i> Like</button>
                    </div>
                </div>
            </div>';
        }
        ?>
        </div>

        <nav>
            <ul class="pagination justify-content-center">
                <?php
            if ($totalPages > 1) {
                if ($page > 1) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
                }

                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<li class="page-item' . ($i == $page ? ' active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                }

                if ($page < $totalPages) {
                    echo '<li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
                }
            }
            ?>
            </ul>
        </nav>
    </div>

    <div id="noResultsMessage" style="display: none; text-align: center;">
        <p>No results found</p>
    </div>

    <!-- Footer -->

    <?php

    include('../Footer/footer.php');
     ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


    <script>
    $(document).ready(function() {
        // Attach a click event listener to like buttons
        $(document).on('click', '.like-button', function() {
            // Get the post ID from the data attribute
            var postId = $(this).data('post-id');
            var button = $(this); // Store the button element in a variable

            console.log('Clicked on like button for post ID:', postId); // Debugging statement

            // Send an AJAX request to like the post
            $.ajax({
                url: 'like_post.php', // Create this PHP file to handle the like action
                type: 'POST',
                data: {
                    postId: postId
                }, // Pass postId as a JavaScript variable
                success: function(response) {
                    console.log('AJAX Response:', response); // Debugging statement

                    if (response === 'success') {
                        // Like was successful
                        // Toggle the "liked" class to change button appearance
                        button.toggleClass('liked');

                        // Show a SweetAlert notification to the user
                        Swal.fire({
                            icon: 'success',
                            title: 'Liked!',
                            text: 'You liked this post.',
                        });
                    } else if (response === 'already_liked') {
                        // Handle case when the user has already liked the post
                        Swal.fire({
                            icon: 'info',
                            title: 'Already Liked',
                            text: 'You have already liked this post.',
                        });
                    } else {
                        // Handle any other errors
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Plz login to like the post.',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors
                    console.error('AJAX Error:', xhr, status, error); // Debugging statement
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'An error occurred while liking the post.',
                    });
                }
            });
        });
    });

    $(document).ready(function() {
        // Attach a submit event listener to the form
        $('#searchForm').submit(function(e) {
            e.preventDefault(); // Prevent the default form submission

            // Get the search input value
            var searchInput = $('#searchInput').val();

            // Send an AJAX request to search_posts.php to fetch search results
            $.ajax({
                url: 'search_posts.php',
                type: 'POST',
                data: {
                    searchInput: searchInput
                },
                success: function(response) {
                    // Update the #ques div with the retrieved results
                    $('#ques').html(response);
                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors
                    console.error('AJAX Error:', xhr, status, error);
                }
            });
        });
    });
    </script>

</body>

</html>