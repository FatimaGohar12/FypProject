<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD-Comment</title>
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
    <?php

    $th_id = $_GET['thread_id'];
    $sql = "SELECT * FROM `thread` WHERE `thread_id` = '$th_id'";
    $result = mysqli_query($conn, $sql);

    //While loop lagain gah reccord ko iterate kena ka lia
    while
    //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
    ($row = mysqli_fetch_assoc($result)) {
        $thread_title = $row['thread_title'];
    }




    ?>

    <!-- form submit krna ka lia code database main submit ho jaye  -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //form main sa la ka ayein hain
        // $th_title = $_POST['title'];
        $th_desc = $_POST['content'];
        // $id = $_SESSION['Admin-id'];

        //Insert querry add for data in database
        $sql = "INSERT INTO `comments` (`comment _by`, `thread_id`, `comment_time`, `Comment_content`) VALUES (" . $_SESSION['Admin-id'] . ", '$th_id', CURRENT_TIMESTAMP, '$th_desc');";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo "
            <script>
            Swal.fire({
                
                position: 'top-center',
                icon: 'success',
                title: 'New Comment Added',
                showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = './commenthandel.php';
            })
                </script>
                ";
        }
    }
    ?>

    <div class="container my-4">
        <div class="card rounded-0 shadow">
            <div class="card-header">

                <h5 class="card-title">Add New Comment</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="post-form" method="post">
                        <input type="hidden" name="id" value="">
                        <!-- <div class="form-group">
                            <label for="title" class="control-label my-2">Thread Title</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="">
                        </div> -->

                        <div class="form-group">
                            <label for="content" class="control-label my-3">Comment</label>
                            <textarea type="text" class="form-control rounded-0" id="content" name="content"></textarea>


                        </div>

                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit"><i class="fa fa-save"></i> Published</button>
                        <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./commentinsert.php"><i class="fa fa-angle-left"></i> Cancel</a>


                </div>
                </form>
            </div>
        </div>
        <!-- <div class="card-footer py-1 text-center">
                <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./addpost.php"><i class="fa fa-angle-left"></i> Cancel</a>
            </div> -->
    </div>
    </div>


    <!-- FOR-ADD-POST-EDITOR -->
    <script src="./ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("content");
    </script>





</body>

</html>