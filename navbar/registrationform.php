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
                <p class="login-box-msg">Please Register</p>
                <form action="./_signuphandel.php" method="post">
                    <!-- name-input -->
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="signupname" name="signupname" aria-describedby="emailHelp" placeholder="Username" required pattern="[A-Za-z0-9]+" minlength="3" maxlength="20">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>


                    <div class="input-group mb-2">


                        <!-- email-input -->
                        <input type="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" class="form-control" id="signupemail" name="signupemail" aria-describedby="emailHelp" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>



                    <div class="input-group mb-2">
                        <input type="number" class="form-control" id="signupage" name="signupage" aria-describedby="emailHelp" placeholder="Age" required min="11" max="99">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-up" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z" />
                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->

                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="signuplocation" name="signuplocation" placeholder="Location" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- EDUCATION -->

                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="signupedu" name="signupedu" placeholder="Education">

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-heart-fill" viewBox="0 0 16 16">
                                    <path d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- PASSWORD -->
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Password 8 characters(A,l,8,@)" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlength="8" maxlength="20" title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character.">
                        <div class="input-group-append">
                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- CONFIRM-PASSWORD -->
                    <div class="input-group mb-2">
                        <input type="password" class="form-control" id="signupcPassword" name="signupcPassword" placeholder="Confirm Password" required minlength="8" maxlength="20">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-8">
                            <a href="../index.php">Login</a>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-success">Register</button>
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