
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



if (isset($_POST['userid'])) {
  $user_id = $_POST['userid'];


    $sql = "DELETE FROM `users` WHERE `sno`= $user_id";

    $result = mysqli_query($conn, $sql);


if ($result) {

    $response = [
        'code' => 200,
        'message' => "User deleted successfully!",
    ];

    echo json_encode($response);exit();

  
}}
   

?> 








