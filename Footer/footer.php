<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>
    .custom-footer {
        background-color: black;
    }


    /* Style for the copyright section */
    .copyright-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-top: 20px;
        font-size: 14px;
        color: #888;
    }

    /* Style for the columns within the copyright section */
    .copyright-column {
        flex: 0 0 calc(33.33% - 10px);
        max-width: calc(33.33% - 10px);
        text-align: center;
        margin-bottom: 10px;
    }

    /* Style for the horizontal line */
    .hr-line {

        margin: 20px 30px;

        border: none;
        height: 3px;
        background: #fff;
    }

    /* Style for the links (icons) */
    .list-unstyled li a {
        color: #fff;
        /* Set link color to white */
        text-decoration: none;
        /* Remove underline from links */
    }

    /* Style for the links (icons) on hover */
    .list-unstyled li a:hover {
        text-decoration: underline;
        /* Add underline on hover if desired */
    }
    </style>
</head>

<body>
    <!-- Footer -->
    <footer class="page-footer font-small indigo custom-footer">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">iDiscuss Forum</h5>
                    <p style="text-align: justify;" class="text-white">user-friendly platform that is easy to navigate
                        and encourages participation from users.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Contact</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="mailto:contact@example.com">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/Forum2/Footer/contact.php">
                                <i class=" fas fa-phone my-2"></i> Contact Form
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-white">Follow Us</h5>

                    <!-- Social media icons -->
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Horizontal Line -->
        <hr class="hr-line">

        <!-- Copyright Section -->
        <div class="container copyright-section">
            <!-- Column 1 -->
            <div class="copyright-column">
                <p>© 2023 wwwiDiscuss.com. All rights reserved.</p>
            </div>

            <!-- Column 2 -->
            <div class="copyright-column">
                <p>Designed by Fatima Gohar</p>
            </div>

            <!-- Column 3 -->
            <div class="copyright-column">
                <p>Disclaimer: The opinions expressed on the forum are those of the individual users and not necessarily
                    representative of the website or its administrators.</p>
            </div>
        </div>
        <!-- Copyright Section -->

    </footer>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>