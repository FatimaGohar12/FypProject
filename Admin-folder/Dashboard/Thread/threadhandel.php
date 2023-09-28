<?php
session_start();
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

<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Discussion Forum Site</title>
    <link rel="icon" href="">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

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
    <!-- BOOTSTRAP-LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Data-tables-link -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css.">
    <style type="text/css">
    /* Chart.js */
    @keyframes chartjs-render-animation {
        from {
            opacity: .99
        }

        to {
            opacity: 1
        }
    }

    .chartjs-render-monitor {
        animation: chartjs-render-animation 1ms
    }

    .chartjs-size-monitor,
    .chartjs-size-monitor-expand,
    .chartjs-size-monitor-shrink {
        position: absolute;
        direction: ltr;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        overflow: hidden;
        pointer-events: none;
        visibility: hidden;
        z-index: -1
    }

    .chartjs-size-monitor-expand>div {
        position: absolute;
        width: 1000000px;
        height: 1000000px;
        left: 0;
        top: 0
    }

    .chartjs-size-monitor-shrink>div {
        position: absolute;
        width: 200%;
        height: 200%;
        left: 0;
        top: 0
    }



    .form-group.note-form-group.note-group-select-from-files {
        display: none;
    }
    </style>

    <!-- jQuery -->
    <script src="http://localhost/odfs/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/odfs/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/odfs/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <!-- <script src="http://localhost/odfs/plugins/toastr/toastr.min.js"></script> -->

</head>

<body
    class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm sidebar-collapse"
    data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
        <style>
        .user-img {
            position: absolute;
            height: 27px;
            width: 27px;
            object-fit: cover;
            left: -7%;
            top: -12%;
        }

        .btn-rounded {
            border-radius: 50px;
        }
        </style>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light shadow text-sm">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Online Discussion Forum Site - Admin</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <div class="btn-group nav-link">
                        <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon"
                            data-toggle="dropdown">
                            <span><img src="http://localhost/odfs/uploads/logo.png?v=1652665183"
                                    class="img-circle elevation-2 user-img" alt="User Image"></span>
                            <!-- HTML code in Admindashboard.php -->
                            <span class="ml-3 text-black">
                                <?php

                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['ad-username'])) {
                  echo $_SESSION['ad-username'];
                }
                ?>
                            </span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item"
                                href="http://localhost/Forum2/Admin-folder/Dashboard/Admininfo/admininfo.php"><span
                                    class="fa fa-user"></span> My Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="http://localhost/Forum2/Admin-folder/headerAdmin/Admin-logout.php"><span
                                    class="fas fa-sign-out-alt"></span> Logout</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">

                </li>

            </ul>
        </nav>



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/Forum2/index.php" class="brand-link">
                <img src="http://localhost/Forum2/Admin-folder/Dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">iDiscuss</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../userdeafult.jpg" class="img-circle elevation-2 my-2" alt="User Image">
                        <span class="my-2 lead text-white mx-2">
                            <?php

              if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true && isset($_SESSION['ad-username'])) {
                echo $_SESSION['ad-username'];
              }
              ?>
                        </span>

                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>







                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/AdminDashboard.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/Comment/commenthandel.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Comments
                                    <span class="right badge badge-success">New</span>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/Thread/threadhandel.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Thread
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/category/category.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Categories
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/post/posthandel.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Posts
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/postcomment.php/postcommenthandel.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Posts Comment
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="http://localhost/Forum2/Admin-folder/Dashboard/user/userhandel.php"
                                class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Users
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>

        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Thread</h1>
                            <a href="./threadinsert.php" class="btn btn-primary my-3">Create New</a>


                        </div>
            </section>




            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-striped table-hover" id="myTable"
                                        style="text-align:center;">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Thread Title</th>
                                                <th scope="col">Thread Description</th>
                                                <th scope="col">Actions</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php

$sql = "SELECT thread.*, categories.* FROM thread RIGHT JOIN `categories` on categories.`cat-id`= thread.thread_cat_id";
$result = mysqli_query($conn, $sql);
$sno = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $sno = $sno + 1;
    $thread = $row['thread_title'] ?? "No Thread for that category";
    $threadDesc = $row['thread_desc'] ?? "No Thread for that category";
    $thid  = $row['thread_id'];
    $category = $row['cat-name'];

    // Check if thread exists for the category
    $updateButton = '';
    $deleteButton = '';
    if ($thread !== "No Thread for that category") {
        // If thread exists, display the update button
        $updateButton = "<form action='./threadUpdate.php'?thid=" . $thid . "method ='post'>
                            <input type='hidden' name='threadid' value=" . $thid . ">
                            <input type='submit' id='' name='' value='Update' class='btn btn-success'>
                        </form>";

        // Display the delete button
        $deleteButton = "<input type='button' id='' name='' value='Delete' data-id='" . $thid . "' class='btn-delete-post btn btn-danger'>";
    } else {
        // If no thread exists, display a warning message for both buttons
        $updateButton = "<span class='text-danger'>Cannot update: No thread available for this category</span>";
        $deleteButton = "<span class='text-danger'>Cannot delete: No thread available for this category</span>";
    }

    echo "
    <tr>
        <th scope='row'>" . $sno . "</th>
        <td>" . $category . "</td>
        <td>" . $thread . "</td>
        <td>" . substr($threadDesc, 0, 20) . "</td>
        <td>
            " . $updateButton . "
        </td>
        <td>
            " . $deleteButton . "
        </td>
    </tr>
    ";
}
?>

                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                        </container-fluid>
            </section>




            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>





    <!-- /.content -->
    <footer class="main-footer text-sm">
        <!-- <strong>Copyright © 2023. -->
        <!-- <a href=""></a> -->
        </strong>
        <!-- All rights reserved. -->
        <div class="float-right d-none d-sm-inline-block">
            <!-- <b>ODFS - PHP (by: <a href="mailto:oretnom23@gmail.com" target="blank">oretnom23</a> )</b> v1.0 -->
        </div>
    </footer>
    <div id="sidebar-overlay"></div>
    </div>
    <!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/odfs/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/odfs/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/odfs/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/odfs/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/odfs/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/odfs/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/odfs/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/odfs/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/odfs/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
    <!-- AdminLTE App -->
    <script src="http://localhost/odfs/dist/js/adminlte.js"></script>
    <script>
    $("body").on("click", ".btn-delete-post", function() {
        const id = $(this).attr("data-id");
        Swal.fire({
            title: 'Are you sure?',
            text: 'You are about to delete this Thread.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Get the thread ID from the page
                var threadID = id;

                // Send an AJAX request to threaddelete.php
                $.ajax({
                    url: 'threaddelete.php',
                    type: 'POST',
                    data: {
                        postid: threadID // Change "threadid" to "postid"
                    },
                    success: function(response) {
                        console.log(response);
                        response = JSON.parse(response);
                        // Check the response code
                        if (response.code == 200) {
                            // Show the success popup
                            Swal.fire({
                                title: 'Thread Deleted!',
                                text: 'The Thread has been successfully deleted.',
                                icon: 'success'
                            }).then(res => {
                                window.location.reload();
                            });
                        } else {
                            // Show an error popup
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while deleting the Thread.',
                                icon: 'error'
                            });
                        }
                    },
                    error: function() {
                        // Show an error popup
                        Swal.fire({
                            title: 'Error!',
                            text: 'An error occurred while deleting the Thread.',
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
    </script>

</body>

</html>