<?php
session_start();
echo "logout";
session_destroy();
header("Location:http://localhost/Forum2/Admin-folder/headerAdmin/Adminlogin/adminlogin.php");
