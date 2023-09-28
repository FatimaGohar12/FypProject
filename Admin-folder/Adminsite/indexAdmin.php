<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  
    <?php

    //Database-connection include
    // require dirname(__DIR__) . "/Partials/_Db-connect.php";


    $servername ="localhost";
    $username="root";
    $password="";
    $database="idiscuss-forum";
    
    //for generating a connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    if($conn){
        //  echo "con successful";
    }
    
    else{
        echo "not success";
    }

    // Header include
      include '../headerAdmin/headeradmin.php';
    

    ?>

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
                <img src="./Images/pic4.jpg" class="d-block w-100" alt="..." />

                <div class="carousel-caption d-none d-md-block">
                    <h5>Code with us</h5>
                    <button class="btn btn-primary">Technology</button>
                    <button class="btn btn-danger">Programming</button>
                    <button class="btn btn-success">Coding</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/pic5.jpg" class="d-block w-100" alt="..." />


                <div class="carousel-caption d-none d-md-block">
                    <h5>Web & Programming</h5>
                    <button class="btn btn-primary">Technology</button>
                    <button class="btn btn-danger">Programming</button>
                    <button class="btn btn-success">Coding</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./Images/pic1.jpg" class="d-block w-100" alt="..." />
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

        <h2 class="text-center my-4 ">iDiscuss-Categories</h2>

        <div class="row my-4">

            <!-- CATEGORIES-SHOW -->
            <?php

            //Querry likhi hai jo categories table ka reccord database sa fetch kar ka lah ka aye ghi 

            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn, $sql);
            //While loop lagain gah reccord ko iterate kena ka lia

            while
            //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
            ($row = mysqli_fetch_assoc($result)) {
                $id = $row['cat-id'];
                $catTitle = $row['cat-name'];
                $catDesc = $row['cat-desc'];


                //Ya cards ka code hai 
                echo '
    <div class="col-md-4 my-2">
        <div class="card" style="width: 18rem;">
            <img src="./Images/card' . $id . '.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><a href ="./threadlist.php?catid=' . $id . '"> ' . $catTitle . '</a></h5>


                <p class="card-text">' . substr($catDesc, 0, 90) . '</p>
                <a href="./threadlist.php?catid=' . $id . ' " class="btn btn-success">View Threads</a>
                
            </div>
        </div>
    </div>';
            }
            ?>
        </div>
    </div>

    <!-- footer -->

    <footer class="pt-3 mt-4 text-muted border-top text-center">
        © 2022
    </footer>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>