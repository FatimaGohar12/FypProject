<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- BOOTSTRAP-LINK -->
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
    <!-- SLIDER -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <!-- <img src="https://source.unsplash.com/2400x900/?code,python" class="d-block w-100" alt="..." /> -->
                <img src="./images/pic4.jpg" class="d-block w-100" alt="..." />

                <div class="carousel-caption d-none d-md-block">
                    <h5>Code with us</h5>
                    <button class="btn btn-primary">Technology</button>
                    <button class="btn btn-danger">Programming</button>
                    <button class="btn btn-success">Coding</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/pic5.jpg" class="d-block w-100" alt="..." />


                <div class="carousel-caption d-none d-md-block">
                    <h5>Web & Programming</h5>
                    <button class="btn btn-primary">Technology</button>
                    <button class="btn btn-danger">Programming</button>
                    <button class="btn btn-success">Coding</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./images/pic1.jpg" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                    <h5>Programming World</h5>
                    <button class="btn btn-primary">Technology</button>
                    <button class="btn btn-danger">Programming</button>
                    <button class="btn btn-success">Coding</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">iDiscuss-Categories</h2>
        <?php
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn, $sql);

        $cardCount = 0; // Track the number of cards in a row

        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['cat-id'];
            $catTitle = $row['cat-name'];
            $catDesc = $row['cat-desc'];
            $imagePath = $row['image'];

            // Start a new row for every 2 cards
            if ($cardCount % 2 == 0) {
                echo '<div class="row my-4">';
            }

            echo '
            <div class="col-md-6 my-2">
                <div class="card h-100">
                    <img src="Admin-folder/Dashboard/category/' . $imagePath . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="./threadlist.php?catid=' . $id . '">' . $catTitle . '</a></h5>
                        <p class="card-text">' . substr($catDesc, 0, 90) . '</p>
                        <a href="./threadlist.php?catid=' . $id . '" class="btn btn-success">View Categories</a>
                    </div>
                </div>
            </div>';

            $cardCount++;

            // Close the row after 2 cards
            if ($cardCount % 2 == 0) {
                echo '</div>';
            }
        }

        // Close any remaining unclosed rows
        if ($cardCount % 2 != 0) {
            echo '</div>';
        }
        ?>
    </div>
    </div>


    </div>
    </div>

    <!-- footer -->

    <?php

    include('footer/footer.php');
    ?>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>