
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



if (isset($_POST['postid'])) {
  $post_id = $_POST['postid'];


    $sql = "DELETE FROM `posts` WHERE `post_id`= $post_id";

    $result = mysqli_query($conn, $sql);


if ($result) {

    $response = [
        'code' => 200,
        'message' => "Thread deleted successfully!",
    ];

    echo json_encode($response);exit();

  
}}
   

?> 








