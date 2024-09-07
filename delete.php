<?php

include('config.php');
echo $ID = $_GET['id'];
mysqli_query($con , "DELETE FROM products WHERE id=$ID ");
header('location:products.php');
?>