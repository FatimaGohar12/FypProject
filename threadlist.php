<!-- ya page jab category pa click krein gah us ki detail show kare gah  -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threads Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- sweetalert -->
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body>
    <?php

    //Database-connection include
    include './Partials/_Db-connect.php';
    // Header include
    require './navbar/_header.php';

    

    ?>

    <style>
    body {
        background: #ddd;
    }
    </style>


    <!-- yahan pa wo querry likhi hai jo show karti hai category ka name jumbotron pa ur neecha questions show krna ka lia  -->
    <?php
    // ya catid URL main di hoi hai is lia get request ki hai id lana ka lia
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE `cat-id` = '$id'";
    $result = mysqli_query($conn, $sql);

    //While loop lagain gah reccord ko iterate kena ka lia
    while
    //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
    ($row = mysqli_fetch_assoc($result)) {
        $cat_id =$row['cat-id'];
        $catname = $row['cat-name'];
        $catdesc = $row['cat-desc'];
    }

     //user-id la ka ana ka lia
     $sql = "SELECT * FROM `users`";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $comment_id = $row['sno']; 
    ?>
    <!-- form submit krna ka lia code database main submit ho jaye  -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //form main sa la ka ayein hain
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];

        //Insert querry add for data in database
        $sql = "INSERT INTO `thread` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$comment_id',current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if ($showAlert) {
            echo '<script>
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "Your question has been submitted successfully",
                showConfirmButton: false,
                timer: 2000 // Close the message after 2 seconds
            });
        </script>';
        }
    }
    ?>

    <!-- JUMBOTRON FOR SHOW CATEGORIES -->
    <div class="container my-4">

        <div class="jumbotron  bg-light bg-gradient p-4">
            <!-- catka name show krna ka lia catname variable lagya -->
            <h1 class="display-6 my-4">Welcome to <?php echo $catname; ?> forum</h1>

            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p class="display-7 lead">Do not Post Irrelevant Questions and materials.</p>
            <a class="btn btn-success btn" href="#" role="button">Learn more</a>
        </div>
    </div>

    <!-- Form banayin gah  -->
    <!-- $_SERVER['REQUEST_URI'] is lia lia hai taka url ko pora catch out kar lah catid ka sath -->

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


        echo '
    <div class="container">
        <h1>Post a Question</h1>
        <form action = ' . $_SERVER["REQUEST_URI"] . '  method="post" id="threadForm">
            <div class="form-group">
                <label for="exampleInputEmail1">Thread Title</label>

                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">

                <br>
                <label for="exampleInputEmail1">Thread Description</label>
                <div class="form-floating">

                    <textarea class="form-control my-3" placeholder="Leave a comment here" id="desc" name="desc" rows="3"></textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-success my-2">Submit</button>
        </form>
    </div>';
    } else {
        echo
        '<div class="container">
    
       <h1>Post a Question</h1>
       <p class="lead">Please Logedin to post a questions</p>
       </div>';
    }
    ?>
    <div class="container"></div>

    <!-- Add- media object for adding questions -->

    <div class="container my-4">
        <h3 class="display-7">Browse Questions</h3>

        <?php
        // ya catid URL main di hoi hai is lia get request ki hai id lana ka lia
        $id = $_GET['catid'];
        // Thread wala table sa thread_cat_id ko id ka equal kar dia 

        // this code write for fetch title and desc of thread for displaying question
        $sql = "SELECT * FROM `thread` WHERE `thread_cat_id` = '$id'";
        $result = mysqli_query($conn, $sql);
        //agar koi sawal nhi hai wahan pa tou no result true kar doh
        $noResult = true;
        //While loop lagain gah reccord ko iterate kena ka lia
        while
        //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
        ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_time = $row['timestamp'];

            // $thread_user_id = $row['thread_user_id'];
            // Yahan wali querry is lia ka user ka name show ho jo post kre 
            // $sql2 = "SELECT `name` FROM `users` WHERE `sno` = '$thread_user_id'";
            // $result2 = mysqli_query($conn, $sql2);
            // $row2 = mysqli_fetch_assoc($result2);
            echo '
            <div class="container">
        <img src="./Partials/userdeafult.jpg" class="mr-3" alt="img" width="30">

            <div class="media">
            <div class="media-body my-2">
            <h6> Posted at ' . $thread_time . '</h6>
            <h5 class="mt-0 my-2" ><a class="text-dark" href="./thread.php?threadid=' . $id . '">' . $title . '</a></h5>

            <p class=" display-7">' . $desc . '</p>
            
            </div>
            </div>
            </div>
            </div>';
        }
        //agar koi result nhi hai tou ya echo ho gah means koi sawal nhi hai us thread ka tou
        if ($noResult) {
            echo '<div class="jumbotron jumbotron-fluid">
            <div class="container">
            
        <p class="display-6 lead">No Question Found</p>
        <p class="lead">Be the First Person to Ask a Question</p>
      </div>
      </div>';
        }

        ?>
    </div>

    <!-- footer -->

    <footer class="pt-3 mt-4 text-muted border-top text-center">
        © 2022
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const threadForm = document.getElementById("threadForm");

        threadForm.addEventListener("submit", function(event) {
            const titleInput = document.getElementById("title");
            const descInput = document.getElementById("desc");

            if (titleInput.value.trim() === "" && descInput.value.trim() === "") {
                event.preventDefault(); // Prevent the form from submitting
                Swal.fire({
                    icon: "error",
                    title: "Empty Fields",
                    text: "Please enter a thread title or description.",
                });
            }
        });
    });
    </script>

</body>

</html>