<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Headers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- link-for-css -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  session_start();

  // Nav-bar
  echo '
      <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" 
          href="/Forum2/index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <div class="dropdown-menu" arial-labelledby="navbarDropdown">';

  $sql = "SELECT `cat-name` , `cat-id` FROM `categories` LIMIT 4";
  $result = mysqli_query($conn, $sql);

  //While loop lagain gah reccord ko iterate kena ka lia
  while
  //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
  ($row = mysqli_fetch_assoc($result)) {

    echo '
   <a class="dropdown-item" href="threadlist.php?catid=' . $row['cat-id'] . '">
    '  . $row['cat-name'] . '</a>
  ';
  }

  echo '</div>        
        </li>
        <li class="nav-item">
        <a  class="nav-link" href="/Forum2/About.php">About</a>
        </li>
        <li class="nav-item">
        <a  class="nav-link" href="/Forum2/contact.php">Contact-Us</a>
        </li>
      </ul>

      <div class="row mx-2">

  
  
     <div class="mx-2">
  
     
            
            <a href="http://localhost/Forum2/Admin-folder/headerAdmin/Adminlogin/adminlogin.php" class="btn btn-danger">Login</a>
            <a href="./AdminRegister.php" class="btn btn-primary">Register</a>
       
           
        ';


  echo '</div>
    </div>
  </div>
</nav>
';



  ?>