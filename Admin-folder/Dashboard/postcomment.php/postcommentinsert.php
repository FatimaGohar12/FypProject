<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD-POST</title>
    <!-- BOOTSTRAP-LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- sweetalert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<style>
    .form-group.note-form-group.note-group-select-from-files {
        display: none;
    }
</style>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "idiscuss-forum";

    // Establish a database connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the admin's ID from the session
    $adminId = $_SESSION['Admin-id'];
    ?>

    <?php
    $sql = "SELECT * FROM `posts`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['post_id'];
    }

    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $post_user_id = $row['sno'];
    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        $th_title = $_POST['title'];
        $th_desc = $_POST['content'];

        // Insert query to add data to the database
        $sql = "INSERT INTO `posts` (`post_title`, `post_content`, `post_user_id`, `time`,`is_admin`)
                VALUES ('$th_title', '$th_desc', '$adminId', CURRENT_TIMESTAMP,1);";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo "
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'New Post Added',
                showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = './posthandel.php';
            })
            </script>";
        }
    }
    ?>

    <div class="container my-4">
        <div class="card rounded-0 shadow">
            <div class="card-header">
                <h5 class="card-title">Add New Post Comment </h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" id="post-form" method="post">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="title" class="control-label my-2">Post Title</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="">
                        </div>

                        <div class="form-group">
                            <label for="content" class="control-label my-3">Comment Content</label>
                            <textarea type="text" class="form-control rounded-0" id="content" name="content"></textarea>
                        </div>

                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit"><i class="fa fa-save"></i> Published</button>
                        <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./postcommentinsert.php"><i class="fa fa-angle-left"></i> Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- FOR-ADD-POST-EDITOR -->
    <script src="./ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("content");
    </script>
</body>

</html>