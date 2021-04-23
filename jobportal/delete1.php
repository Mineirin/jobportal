<?php
session_start();
$email=$_SESSION['EMAIL'];
//echo"$email";
$a=$_GET['x'];
//echo"iuiiui=$a";
include("dbconnection.php");
$query="delete from cart where ser_name='$a' and email='$email' ";
$res=mysqli_query($query);
header("location:view_cart.php");
?>