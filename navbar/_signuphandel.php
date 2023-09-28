<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

//for generating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    //  echo "con successful";
} else {
    echo "not success";
}


?>

<!-- Jab user sign up kare gah tou is page pa aye gah  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signuphandel</title>
</head>

<body>
    <?php
    
    $showError = "false";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $email = $_POST['signupemail'];
        $name = $_POST['signupname'];
        $pass = $_POST['signupPassword'];
        $cpass = $_POST['signupcPassword'];
        $age = $_POST['signupage'];
        $location = $_POST['signuplocation'];
        $education = $_POST['signupedu'];


        // check this email exists
        $existsql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $result = mysqli_query($conn, $existsql);
        $numRows = mysqli_num_rows($result);
        if ($numRows > 0) {
            $showError = "Email already in use";
            echo
            "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Email already in use',
            showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = './registrationform.php';
          })

          </script>";
        }

        //Check password match with confirm password

        else {

            if ($pass == $cpass) {
                //ya line password ka hash banana ka lia likhi hai 
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`name`, `user_pass`, `timestamp`, `email`, `age`, `Location`, `Education`) VALUES ('$name', '$hash', CURRENT_TIMESTAMP, '$email', '$age', '$location', '$education')";


                $result = mysqli_query($conn, $sql);
                if ($result) {
                    $showAlert = true;
                    //redirect function 
                    echo "
            <script>
            Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Your Account has been Created',
                showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = 'http://localhost/Forum2';
            })
                </script>
                ";
               
                    exit();
                }
            } else {
                // $showError="pass not match";
                echo
                "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password not match!',
            showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = 'http://localhost/Forum2/navbar/registrationform.php';
          })

          </script>";
            }
        }

     
    }

    ?>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javasript">

</script>

</html>