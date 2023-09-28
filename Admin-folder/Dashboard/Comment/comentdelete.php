
<?php

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



if (isset($_POST['updateid'])) {
   $threadid = $_POST['updateid'];


   $sql = "DELETE FROM `comments` WHERE `comment_id`= $threadid";

   $result = mysqli_query($conn, $sql);


   if ($result) {

      $response = [
         'code' => 200,
         'message' => "Thread deleted successfully!",
      ];

      echo json_encode($response);
      exit();

      // header('location: '.explode("?", $_SERVER['HTTP_REFERER'])[0].'?successMsg=deleted succesfully!');
   }
}







?> 



