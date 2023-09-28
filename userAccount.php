<?php
//Database-connection include
include './Partials/_Db-connect.php';
// Header include
require './navbar/_header.php';
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
    <!-- BOOTSTRAP-LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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

        #myTable {
            margin-left: auto;
            margin-right: auto;
            border-spacing: 10px;
            /* border-collapse: separate; */
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

<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm sidebar-collapse" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">


        <?php


        $sql = "SELECT * FROM `users` WHERE sno=" . $_SESSION['user_id'] . "";

        $result = mysqli_query($conn, $sql);
        //While loop lagain gah reccord ko iterate kena ka lia

        while
        //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
        ($row = mysqli_fetch_assoc($result)) {
            // $id = $row['post_id'];
            $name = $row['name'];
            $email = $row['email'];
            $age = $row['age'];
            $location = $row['Location'];
            $education = $row['Education'];
        }
        ?>


        <div class="col-12 mx-auto">
            <div class="container my-4">
                <div class="card rounded-0 shadow">
                    <div class="card-header">

                        <h5 class="card-title">User Reccord</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="" id="post-form" method="post">
                                <input type="hidden" name="id" value="">
                                <div class="form-group">
                                    <label for="title" class="control-label my-2">Username</label>
                                    <input type="text" class="form-control rounded-0" name="updatename" id="title" value="<?php echo "$name" ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="content" class="control-label my-3">Age</label>
                                    <input type="text" class="form-control rounded-0" name="updateage" id="title" value="<?php echo "$age" ?>" required>


                                </div>

                                <div class="form-group">
                                    <label for="content" class="control-label my-3">Email</label>
                                    <input type="email" class="form-control rounded-0" name="updateemail" id="title" value="<?php echo "$email" ?>" required>


                                </div>
                                <div class="form-group">
                                    <label for="content" class="control-label my-3">Location</label>
                                    <input type="text" class="form-control rounded-0" name="updatelocation" id="title" value="<?php echo "$location" ?>">

                                    <div class="form-group">
                                        <label for="content" class="control-label my-3">Education</label>
                                        <input type="text" class="form-control rounded-0" name="updateedu" id="title" value="<?php echo "$education" ?>" required>


                                    </div>



                                    <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit" name="submit"><i class="fa fa-save"></i> Update</button>



                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>






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
    <?php
    $showAlert = false;
    if (isset($_POST['submit'])) {
        $updatename = $_POST['updatename'];
        $updateage = $_POST['updateage'];
        $updatelocation = $_POST['updatelocation'];
        $updateemail = $_POST['updateemail'];
        $updateeducation = $_POST['updateedu'];


        $sql = "UPDATE users
    SET `email` = '$updateemail', `name` = ' $updatename',`age`= $updateage,`Location`='$updatelocation',`Education`='$updateeducation'
    WHERE `sno` = " . $_SESSION['user_id'] . "";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
       <script>
       Swal.fire({
           position: 'top-center',
           icon: 'success',
           title: 'Reccord Updated Successfully',
           showConfirmButton: false,
           timer: 1500
      }).then(()=>{
          window.location.href = './index.php';
      })
      </script>
      ";
        } else {
            echo
            "
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Again Enter!',
                showConfirmButton: false,
                    timer: 1500
                }).then(()=>{
                    window.location.href = './userAccount.php';
              })
    
              </script>";
        }
    }

    ?>




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




    <!-- AdminLTE App -->
    <script src="http://localhost/odfs/dist/js/adminlte.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>

</body>

</html>