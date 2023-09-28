<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD-Category</title>
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

    //for generating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn) {

        // echo "con successful";
    } else {
        //  echo "not success"; 
    }

    ?>

    <!-- form submit krna ka lia code database main submit ho jaye  -->
    <?php
$showAlert = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST') {
    // Form data
    $th_title = $_POST['title'];
    $th_desc = $_POST['content'];

    // Image upload handling
    $image = $_FILES['image'];
    $image_name = $image['name'];
    $image_tmp_name = $image['tmp_name'];
    $image_size = $image['size'];
    $image_error = $image['error'];

    // Check if an image is uploaded
    if ($image_error === UPLOAD_ERR_OK) {
        // Move the uploaded image to the desired directory
        $target_directory = "uploads/";
        $target_file = $target_directory . basename($image_name);
        $destination_path = $_SERVER['DOCUMENT_ROOT'] . "/Forum2/Admin-folder/Dashboard/category/" . $target_file;

        if (move_uploaded_file($image_tmp_name, $destination_path)) {
            // Insert query to add data with the image path to the database
            $sql = "INSERT INTO `categories` (`cat-name`, `cat-desc`, `image`, `time`) VALUES ('$th_title', '$th_desc', '$target_file', CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn, $sql);
            $showAlert = true;
        } else {
            echo "Failed to move the uploaded image.";
        }
    }

    if ($showAlert) {
        echo "
        <script>
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'New Category Added',
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = './category.php';
        })
            </script>
            ";
    }
}
?>

    <div class="container my-4">
        <div class="card rounded-0 shadow">
            <div class="card-header">
                <h5 class="card-title">Add New Category</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="post-form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="title" class="control-label my-2">Category Name</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="">
                        </div>
                        <div class="form-group">
                            <label for="content" class="control-label my-3">Category Description</label>
                            <textarea type="text" class="form-control rounded-0" id="content" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label my-2">Category Image</label>
                            <input type="file" class="form-control rounded-0" name="image" id="image">
                        </div>
                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit"><i class="fa fa-save"></i>Published</button>
                        <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./postinsert.php"><i class="fa fa-angle-left"></i> Cancel</a>
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
