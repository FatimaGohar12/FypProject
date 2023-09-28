<!-- ya page question pa jab click karein gah tou aye gah -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Threads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    // ya threadid URL main di hoi hai is lia get request ki hai id lana ka lia
    $id = $_GET['threadid'];
    $sql = "SELECT * FROM `thread` WHERE `thread_id` = $id";
    $result = mysqli_query($conn, $sql);


    //While loop lagain gah reccord ko iterate kena ka lia
    while
    //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
    ($row = mysqli_fetch_assoc($result)) {
        $title = $row['thread_title'];
        $desc = $row['thread_desc'];
        $thread_user_id = $row['thread_user_id'];
        //Query write to fetch user table to find name of the poster
        $sql2 = "SELECT `name` FROM `users` WHERE `sno` ='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        // $posted_by = $row2['name'];
        
    }
    //user-id la ka ana ka lia
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $comment_id = $row['sno']; 


    ?>
    <!-- comment submit krna ka lia code database main submit ho jaye  -->
    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'POST') {
        //form main sa la ka ayein hain
        //form wala text area sa comment name lia
        $comment = $_POST['comment'];
            $payload = [
                'body' => $comment,
            ];
            // Convert the payload to JSON format
            $jsonPayload = json_encode($payload);
            // Set the API endpoint URL
            $apiEndpoint = 'https://3zys7b4t9a.execute-api.us-east-1.amazonaws.com/pred/web-ml-func'; 
        
            // Create a cURL request to the API endpoint
            $ch = curl_init($apiEndpoint);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonPayload);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Content-Length: ' . strlen($jsonPayload),
            ]);
            // Execute the cURL request and capture the response
            $response = curl_exec($ch);
        
            // Check for cURL errors
            if (curl_errno($ch)) {
                echo "Error: " . curl_error($ch);
            } else {
                // Decode the response JSON
                $result = json_decode($response, true);
                // Check if the response is valid and contains the 'prediction' key
                if ($result) {
                    if ($result==1) {
                    $commdelete= '';
                    $result = str_replace($comment, "", $commdelete);
                    echo '<script> alert("Your Comment is Spam. So, Comment is Deleted") </script>' ;
                    }}
                else {
                    // echo "Statement: " . $comment;
                    //Insert querry add for data in database
                    $sql = "INSERT INTO `comments` (`comment _by`, `thread_id`, `comment_time`, `Comment_content`) VALUES ('$comment_id', '$id', current_timestamp(), '$comment');";
                    $result =mysqli_query($conn, $sql);
                    $showAlert = true;
                    if ($showAlert) {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfully</strong> Your Comment Submitted Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        }
        
                }
            }
        
            // Close the cURL request
            curl_close($ch);
        
    }
    ?>

    <!-- JUMBOTRON FOR SHOW QUESTION -->
    <div class="container my-4">

        <div class="jumbotron  bg-light bg-gradient p-4">
            <!-- thread ka title show krna ka lia $title variable lagya -->
            <h1 class="display-6 my-4"><?php echo "$title" ?></h1>

            <p class="lead"><?php echo "$desc" ?></p>
            <hr class="my-4">
            <p class="display-7 lead">Do not Post Irrelevant Questions and materials.</p>
            <!-- <p>Posted By <b><?php echo $posted_by ?> <b></p> -->
        </div>
    </div>

    <!-- Comments add krna ka lia form -->
    <!-- Form banayin gah  -->
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        echo '<div class="container">
        <h1>Post a Comment</h1>
        
        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
            <div class="form-group">

                <small id="emailHelp" class="form-text text-muted">Type Your Comment</small>

                <div class="form-floating">

                    <textarea class="form-control my-3" placeholder="Leave a comment here" rows="3" id="comment" name="comment"></textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-success my-2">Post a Comment</button>
        </form>
    </div>';
    } else {
        echo
        '<div class="container">
        
           <h1>Post a Comment</h1>
           <p class="lead">Please Logedin to post a questions</p>
           </div>';
    }


    
    ?>





    <!-- Add- media object for adding questions -->

    <div class="container my-4">
        <h3 class="display-7">Discussions</h3>

        <?php
        // ya threadid URL main di hoi hai is lia get request ki hai id lana ka lia
        $id = $_GET['threadid'];
        // this code write for fetch id and content of comment for displaying comment
        $sql = "SELECT * FROM `comments` WHERE `thread_id` = $id";
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        //While loop lagain gah reccord ko iterate kena ka lia

        //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
        while ($row = mysqli_fetch_assoc($result)) {
            $noResult = false;
            //Comment ka content ka lia 
            $content = $row['Comment_content'];
            $comment_time = $row['comment_time'];
            // $thread_user_id = $row['comment _by'];

            //Query write to fetch user table to find name of the commentor
            // $sql2 = "SELECT `name` FROM `users` WHERE `sno` ='$thread_user_id'";
            // $result2 = mysqli_query($conn, $sql2);
            // $row2 = mysqli_fetch_assoc($result2);
            // $posted_by = $row2['name'];
            echo
            '<div class="container">
        <div class="media">
            <img src="./Partials/userdeafult.jpg" class="mr-3" alt="img" width="30">
            <div class="media-body my-2">
            <h6>Posted at   ' . $comment_time . '</h6>
                
                <p class=" display-7 ">' . $content . '</p>
                
            </div>
        </div>
    </div>
    </div>';
        }

        ?>


        <!-- footer -->

        <footer class="pt-3 mt-4 text-muted border-top text-center">
            © 2022
        </footer>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>