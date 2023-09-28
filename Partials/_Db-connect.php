<?php
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

?>