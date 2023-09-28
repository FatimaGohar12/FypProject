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
    if ($conn) {
        //  echo "con successful";
    } else {
        echo "not success";
    }
    $showError = "false";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // require '/Forum2/Partials/_Db-connect.php';
        // require dirname(__DIR__) . "/Partials/_Db-connect.php";

        $username = $_POST['user'];
        $email = $_POST['email'];
        $registerpass = $_POST['registerpass'];
        $registercpass = $_POST['registercpass'];

        // check this username exist

        $existsql = "SELECT * FROM `admin` WHERE `ad-username` = '$username'";
        $result = mysqli_query($conn, $existsql);
        $numRows = mysqli_num_rows($result);

        if ($numRows > 0) {
            // $showError = "UserName already in use";
            echo
            "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Username ALREADY EXIST!',
            showConfirmButton: false,
                timer: 1500
            }).then(()=>{
                window.location.href = 'http://localhost/Forum2/Admin-folder/headerAdmin/AdminRegister/AdminRegister.php';
          })

          </script>";
        }


        //Check password match with confirm password

        else {
            if ($registerpass == $registercpass) {
                //ya line password ka hash banana ka lia likhi hai
                $hash = password_hash($registerpass, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `admin` (`ad-username`, `ad-password`, `Admin_Email`) VALUES ('$username', '$hash', '$email')";
                $result = mysqli_query($conn, $sql);

                // echo "true";
                // header("Location:./adminlogin.php?signupsuccess=true");
                // exit();
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
                        window.location.href = 'http://localhost/Forum2/Admin-folder/headerAdmin/Adminlogin/adminlogin.php';
                    })
                        </script>
                        ";
                    //  header("Location:./login.php?signupsuccess=true");
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
                        window.location.href = 'http://localhost/Forum2/Admin-folder/headerAdmin/AdminRegister/AdminRegister.php';
                  })
        
                  </script>";
            }
        }







        // header("Location:/Forum2/index.php?signupsuccess=false&error=$showError");
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