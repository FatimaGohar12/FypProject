<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Discussion Forum Site</title>
    <link rel="icon" href="">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/odfs/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/odfs/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">




    <?php
    include('./Partials/_Db-connect.php');


    // $sql="SELECT * FROM `users`";
    // $result = mysqli_query($conn, $sql);



    // while
    //         //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
    //         ($row = mysqli_fetch_assoc($result)) {
    //             $id=$row['sno'];
    //             var_dump($id);
    //         }



    if (isset($_POST['submit'])) {
        $name = $_POST['updatename'];
        $age = $_POST['updateage'];
        $location = $_POST['updatelocation'];
        $email = $_POST['updateemail'];
        $gender = $_POST['updategender'];
     
    }
    //     $sql = "UPDATE users
    // SET `name` = '$name', `User_name` = ' $email',`age`= $age,`Location`='$location',`Education`='$education',`gender` = '$gender'
    // WHERE `sno` = ";



    // $result = mysqli_query($conn, $sql);

    // if ($result) {
    //             echo "
    //  <script>
    //  Swal.fire({
    //      position: 'top-center',
    //      icon: 'success',
    //      title: 'Data Updated Successfully',
    //      showConfirmButton: false,
    //      timer: 1500
    // }).then(()=>{
    //     window.location.href = 'http://localhost/Forum2/';
    // })
    // </script>
    // ";
    //         } else {
    //             echo "
    // <script>alert('Error while processing')</script>";
    //         }
    //     }

    ?>