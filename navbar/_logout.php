<?php
session_start();
echo"logout";
session_destroy();
header("Location:/Forum2/index.php");
?>