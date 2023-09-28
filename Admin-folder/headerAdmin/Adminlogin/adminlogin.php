<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Discussion Forum Site</title>
    <link rel="icon" href="http://localhost/odfs/uploads/logo.png?v=1652665183">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="http://localhost/odfs/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="http://localhost/odfs/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="http://localhost/odfs/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/jqvmap/jqvmap.min.css">
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
    </style>

    <!-- jQuery -->
    <!-- <script src="http://localhost/odfs/plugins/jquery/jquery.min.js"></script> -->
    <!-- jQuery UI 1.11.4 -->
    <!-- <script src="http://localhost/odfs/plugins/jquery-ui/jquery-ui.min.js"></script> -->
    <!-- SweetAlert2 -->
    <!-- <script src="http://localhost/odfs/plugins/sweetalert2/sweetalert2.min.js"></script> -->
    <!-- Toastr -->
    <!-- <script src="http://localhost/odfs/plugins/toastr/toastr.min.js"></script> -->
    <script>
        // var _base_url_ = 'http://localhost/odfs/';
    </script>
    <!-- <script src="http://localhost/odfs/dist/js/script.js"></script> -->
    <!--?xml version="1.0" encoding="utf-8"?-->

    <!-- <script>
        $(function() {
            var code = (Math.random() + 1).toString(36).substring(2);
            var data = $('<div>')
            data.attr('id', code)
            data.css('top', '4.5em')
            data.css('position', 'fixed')
            data.css('right', '-1.5em')
            data.css('width', 'auto')
            data.css('opacity', '.5')
            data.css('z-index', '9999999')
            data.html('<a href="mailto:oretom23@gmail.com">Developed by oretnom23</a>')
            data.find('a').css('color', '#7e7e7e')
            data.find('a').css('font-weight', 'bolder')
            data.find('a').css('background', '#ebebeb')
            data.find('a').css('padding', '1em 3em')
            data.find('a').css('border-radius', '50px')
            data.find('a').css('text-decoration', 'unset')
            data.find('a').css('font-size', '11px')
            $('body').append(data)
            var is_right = true
            data.find('a').on('mouseover', function() {
                if (is_right) {
                    data.css('right', 'unset')
                    data.css('left', '-1.5em')
                    is_right = false
                } else {
                    data.css('left', 'unset')
                    data.css('right', '-1.5em')
                    is_right = true
                }
            })
        })
    </script> -->
</head>

<body class="hold-transition login-page">
    <script>
        start_loader()
    </script>
    <style>
        body {
            background-image: url("http://localhost/odfs/uploads/cover.png?v=1652665183");
            background-size: cover;
            background-repeat: no-repeat;
            backdrop-filter: contrast(1);
        }

        #page-title {
            text-shadow: 6px 4px 7px black;
            font-size: 3.5em;
            color: #fff4f4 !important;
            background: #8080801c;
        }
    </style>
    <h1 class="text-center text-white px-4 py-5" id="page-title"><b>Online Discussion Forum Site</b></h1>
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-navy my-2">
            <div class="card-body">
                <p class="login-box-msg">Please enter your credentials</p>
                <form id="login-frm" action="./Adminloginhandel.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="loguser" id="loguser" autofocus="" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="logpass" id="logpass" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <a href="">Dont Have account</a>
                            <a href="http://localhost/Forum2/Admin-folder/headerAdmin/AdminRegister/AdminRegister.php" class="btn btn-danger my-2">Register</a>



                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>

                </form>
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p> -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    <script>
        $(document).ready(function() {
            end_loader();
        })
    </script>


</body>

</html>