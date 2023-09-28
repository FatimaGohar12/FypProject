<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD-Thread</title>
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


    <!-- Categories Fetch -->
    <?php
    // SQL query to select all records from the 'categories' table
    $sql = "SELECT * FROM `categories`";
    
    // Executing the SQL query and storing the result
    $result = mysqli_query($conn, $sql);
    
    // Initializing an empty variable to store the HTML options
    $options = "";

    // Looping through each row in the result set
    while ($row = mysqli_fetch_assoc($result)) {
        // Extracting the category ID and name from the current row
        $cat_id = $row['cat-id'];
        $cat_name = $row['cat-name'];
        
        // Appending an option HTML tag with the category ID and name to the options variable
        $options .= "<option value='$cat_id'>$cat_name</option>";
    }
?>



    <!-- form submit krna ka lia code database main submit ho jaye  -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        $th_title = $_POST['title'];
        $th_desc = $_POST['content'];
        $th_cat_id = $_POST['category'];
    
        $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$th_cat_id', '0', CURRENT_TIMESTAMP);";
        $result = mysqli_query($conn, $sql);
        // Rest of your code
    
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo "
            <script>
            Swal.fire({
                
                position: 'top-center',
                icon: 'success',
                title: 'New Thread Added',
                showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = './threadhandel.php';
            })
                </script>
                ";
        }
    }
    ?>

    <div class="container my-4">
        <div class="card rounded-0 shadow">
            <div class="card-header">

                <h5 class="card-title">Add New Thread</h5>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" id="post-form" method="post">
                        <input type="hidden" name="id" value="">
                        <div class="form-group">
                            <label for="title" class="control-label my-2">Thread Title</label>
                            <input type="text" class="form-control rounded-0" name="title" id="title" value="">
                        </div>
                        <div class="form-group">
                            <label for="content" class="control-label my-3">Thread Content</label>
                            <textarea type="text" class="form-control rounded-0" id="content" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category" class="control-label my-2">Category</label>
                            <select class="form-control rounded-0" id="category" name="category">
                                <?php echo $options; ?>
                            </select>
                        </div>
                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit"><i class="fa fa-save"></i> Published</button>
                        <a class="btn btn-flat btn-sm btn-light bg-gradient-light border rounded-0" href="./postinsert.php"><i class="fa fa-angle-left"></i> Cancel</a>
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