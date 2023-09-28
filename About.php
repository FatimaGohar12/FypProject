<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php

    //Database-connection include
    include './Partials/_Db-connect.php';
    // Header include
    require './navbar/_header.php';


    ?>

<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item">
      <img src="./Images/pic2.jpg" alt="" width="100%" height="500"> 
       

      <div class="container">
         
        </div>
      </div>
      <div class="carousel-item">
       <img src="./Images/pic5.jpg" alt="" width="100%" height="500"> 
        

        <div class="container">
         
        </div>
      </div>
      <div class="carousel-item active">
      <img src="./Images/pic1.jpg" alt="" width="100%" height="500"> 
       

        <div class="container">
      
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!-- categorie-show -->
 <div class="container my-5">
 <div class="container marketing ">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
   <img src="./Images/card2.jpg" width="90%" height="50%" alt="">

    <h3 class="fw-normal my-2">JQUERRY</h3>
    <p>Python is a computer programming language often used to build websites and software, autom</p>
    <p><a class="btn btn-danger" href="#">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <img src="./Images/card2.jpg" width="90%" height="50%" alt="">
   

    <h2 class="fw-normal my-2">JAVASCRIPT</h2>
    <p>JavaScript (often shortened to JS) is a lightweight, interpreted, object-oriented language</p>
    <p><a class="btn btn-success" href="#">View details »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
  <img src="./Images/card2.jpg" width="90%" height="50%" alt="">
   

    <h2 class="fw-normal my-2">PYTHON</h2>
    <p>Python is a computer programming language often used to build websites and software, autom</p>
    <p><a class="btn btn-primary" href="#">View details »</a></p>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

 </div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 my-5">Programming today is a race between software engineers striving to build bigger and better<span class="text-muted">  idiot-proof programs</span></h2>
        <p class="lead">Make it work, make it right, make it fast.</p>
      </div>
      <div class="col-md-5">
     <img src="./Images/card4.jpg" alt=""  width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1 my-5">Any fool can write code that a computer can understand. <span class="text-muted">Good programmers write code that humans can understand.</span></h2>
        <p class="lead">Make it work, make it right, make it fast. – Kent Beck.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="./Images/card2.jpg" alt=""  width="100%" height="100%">
    

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 my-5">First, solve the problem.   <span class="text-muted">Then, write the code.</span></h2>
        <p class="lead">Coding like poetry should be short and concise.</p>
      </div>
      <div class="col-md-5">
      <img src="./Images/pic4.jpg" alt=""  width="100%" height="100%">
    

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>

    <!-- footer -->

    <footer class="pt-3 mt-4 text-muted border-top text-center">
        © 2022
    </footer>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>