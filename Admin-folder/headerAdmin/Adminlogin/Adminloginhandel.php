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
    <title>Document</title>
</head>

<body>


    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "idiscuss-forum";

    //for generating a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        echo "not success";
    }

    $showAlert = false;
    $showError = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $loguser = $_POST['loguser'];
        $logpass = $_POST['logpass'];

        // VERIFY USERNAME
        $sql = "SELECT * FROM `admin` WHERE `ad-username`='$loguser'";
        $result = mysqli_query($conn, $sql);
        $numRows = mysqli_num_rows($result);

        if ($numRows == 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($logpass, $row['ad-password'])) {
                $showAlert = true;

                // Start session here
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['Admin-id'] = $row['Admin-id'];
                $_SESSION['ad-username'] = $loguser;
                header("Location: /Forum2/Admin-folder/Dashboard/AdminDashboard.php?loginsuccess=true");
                exit();
            } else {
                $showError = "Invalid Credentials";
            }
        } else {
            $showError = "Invalid Credentials";
        }
    }
    ?>

    <?php
    if ($showAlert) {
        echo "
    <script>
    Swal.fire({
        position: 'top-center',
        icon: 'success',
        title: 'You are Logged In',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = 'http://localhost/Forum2/Admin-folder/Dashboard/AdminDashboard.php';
    });
    </script>
    ";
    }

    if ($showError) {
        echo "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Oops',
        text: '" . $showError . "',
        showConfirmButton: false,
        timer: 1500
    }).then(() => {
        window.location.href = 'http://localhost/Forum2/Admin-folder/headerAdmin/Adminlogin/adminlogin.php';
    });
    </script>";
    }
    ?>

</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javasript">
    $(function(){
alert('hello.');
    });
</script>

</html>