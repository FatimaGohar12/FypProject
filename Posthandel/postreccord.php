<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="path/to/sweetalert2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
</head>

<body>
    <?php
    // Database-connection include
    include '../Partials/_Db-connect.php';
    // Header include
    require '../navbar/_header.php';
    ?>

    <style>
    body {
        background: #ddd;
    }
    </style>

    <?php
    // Fetching thread details
    $id = $_GET['id'];
    $sql = "SELECT * FROM `posts` WHERE `post_id` = $id";
    $result = mysqli_query($conn, $sql);

    //While loop lagain gah reccord ko iterate kena ka lia
    while ($row = mysqli_fetch_assoc($result)) {
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];
        $post_content = $row['post_content'];
    }





    ?>
    <!-- form submit krna ka lia code database main submit ho jaye  -->


    <!-- form submit krna ka lia code database main submit ho jaye  -->
    <?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    // Form submission logic
    $comment = $_POST['content'];
    $sno = $_SESSION['user_id'];

    // Insert the comment into the database
    $sqlInsert = "INSERT INTO `postscomment` (`comment_content`, `comment_user_id`, `time`, `comment_post_id`) VALUES ('$comment', '$sno', CURRENT_TIMESTAMP, '$id')";
    $resultInsert = mysqli_query($conn, $sqlInsert);

    if ($resultInsert) {
        $showAlert = true;
    }
}

if ($showAlert) {
    echo '
    <script src="path/to/sweetalert2.js"></script>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "Your comment has been submitted successfully.",
        });
    </script>
    ';
}
?>



    <!-- JUMBOTRON FOR SHOW CATEGORIES -->
    <div class="container my-4">

        <div class="jumbotron  bg-light bg-gradient p-4">
            <!-- catka name show krna ka lia catname variable lagya -->
            <h1 class="display-6 my-4">Welcome to <?php echo $post_title; ?> Post</h1>

            <p class="lead"><?php echo $post_content; ?></p>
            <hr class="my-4">
            <p class="display-7 lead">Do not Post Irrelevant Questions and materials.</p>
            <a class="btn btn-success btn" href="#" role="button">Learn more</a>
        </div>
    </div>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '
        <div class="container">
            <h1>Post a Comment</h1>
            <form action="' . $_SERVER["REQUEST_URI"] . '" method="post"  id="commentForm">
                <div class="form-group">

                    <label for="exampleInputEmail1">Leave a comment here</label>
                    <div class="form-floating">
<textarea class="form-control my-3" placeholder="Leave a comment here" id="content" name="content" rows="3"></textarea>

                    </div>
                </div>
                <button type="submit" class="btn btn-success my-2">Submit</button>
            </form>
        </div>';
    } else {
        echo
        '<div class="container">

       <h1>Post a Comments</h1>
       <p class="lead">Please Logedin to post a Comments</p>
       </div>';
    }
    ?>

    <div class="container my-4">
        <h3 class="display-7">Discussions</h3>


        <?php
        // Fetching and displaying comments
        $id = $_GET['id'];
        $sql = "SELECT * FROM `postscomment` WHERE `comment_post_id` = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;

        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $content = $row['comment_content'];
            $thread_user_id = $row['comment_user_id'];

            $sql2 = "SELECT `name` FROM `users` WHERE `sno` ='$thread_user_id'";
            $result2 = mysqli_query($conn, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            // $posted_by = $row2['name'];

            echo '
            <div class="container">
                <div class="media ">
                    <img src="./userdeafult.jpg" alt="" width="30" class="mx-2">
                    <div class="media-body my-2">
                        <p class="lead display-8">' . $content . '</p>
                    </div>
                </div>
            </div>';
        }

        if ($noResult) {
            echo '<div class="container">
    
       <h1>Post a Comments</h1>
       <p class="lead">No comments found.</p>
       </div>';
        }
        ?>

    </div>
</body>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const commentForm = document.getElementById("commentForm");

    commentForm.addEventListener("submit", function(event) {
        const contentInput = document.getElementById("content");

        if (contentInput.value.trim() === "") {
            event.preventDefault(); // Prevent the form from submitting
            Swal.fire({
                icon: "error",
                title: "Empty Comment",
                text: "Please enter a comment before submitting.",
            });
        }
    });
});
</script>


</html>