<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY-POST</title>

    <!-- BOOTSTRAP-LINK -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- LINK-FOR-SEARCH-ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">

    <!-- SWEETALERT2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

    <style>
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
    </style>
</head>

<body>
    <?php
    // Database-connection include
    include '../Partials/_Db-connect.php';
    // Header include
    require '../navbar/_header.php';
    ?>

    <!-- POST-HERE -->
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss-Posts</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 my-4">
            <!-- CATEGORIES-SHOW -->
            <?php
        // Query to fetch posts for the logged-in user
        $sql = "SELECT posts.* FROM posts INNER JOIN users ON posts.post_user_id=users.sno WHERE users.sno = " . $_SESSION['user_id'];
        $result = mysqli_query($conn, $sql);

        // Loop through the fetched posts
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['post_id'];
            $postTitle = $row['post_title'];
            $postcontent = $row['post_content'];
 // Initialize the LinkedIn share link variable
 $linkedinShareLink = 'https://www.linkedin.com/sharing/share-offsite/?url=';

 // Set the LinkedIn share link within the loop
 $linkedinShareLink .= urlencode('https://your-website.com/threadlist.php?id=' . $id);
            // Display the post card with delete button
            echo '
            <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body">
                <h5 class="card-title"><a href="./threadlist.php?id=' . $id . '">' . $postTitle . '</a></h5>
                <p class="card-text">' . substr($postcontent, 0, 90) . '</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div>
                    <a href="./postreccord.php?id=' . $id . '" class="btn btn-success">View Posts</a>
                    <button class="btn btn-danger delete-post" data-id="' . $id . '"><i class="fas fa-trash"></i></button>
                    <a href="' . $linkedinShareLink . '" class="btn btn-primary" target="_blank"><i class="fab fa-linkedin"></i> Share</a>
                    </div>
                    <div class="notification-icon" data-id="' . $id . '"><i class="fas fa-bell"></i></div>
                </div>
            </div>
            </div>

    ';
    }
    ?>
        </div>
    </div>
    <!-- Modal to display notifications -->
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <!-- Container to display notifications -->
                    <div class="notification-container"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Script to handle delete functionality -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


    <script>
    // Function to delete a post
    function deletePost(postId) {
        // Display a warning message using SweetAlert2
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to recover this post!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // User confirmed the deletion, send an AJAX request to delete the post
                const url = 'delete_post.php'; // Replace with your actual delete post endpoint
                const data = {
                    postId: postId
                };

                // Send the AJAX request
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function(response) {
                        // Post deleted successfully, show success message
                        Swal.fire({
                            title: 'Deleted!',
                            text: 'Your post has been deleted.',
                            icon: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        }).then(() => {
                            // Reload the page after deletion
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        // An error occurred, show error message
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while deleting the post.',
                            icon: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                });
            }
        });
    }

    // Attach event listener to delete buttons
    $(document).on('click', '.delete-post', function() {
        const postId = $(this).data('id');
        deletePost(postId);
    });

    $(document).on('click', '.notification-icon', function() {
        const postId = $(this).data('id');
        console.log('Clicked on notification icon for postId:', postId);

        // Make an AJAX request to fetch notifications for the post
        const url = 'fetch_notifications.php'; // Replace with the actual endpoint
        const data = {
            postId: postId
        };

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function(response) {
                // Update the modal's notification container with the fetched notifications
                const notificationContainer = $('#notificationModal').find(
                    '.notification-container');
                notificationContainer.html(response);

                // Show the modal
                $('#notificationModal').modal('show');
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error('Error fetching notifications:', error);
            }
        });
    });
    </script>
</body>

</html>