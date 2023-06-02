<?php
include "includes/connection.php";

$name=$_POST['txtnamee'];
$email=$_POST['txtemaill'];
$phone=$_POST['txtphone'];
$comment=$_POST['txtcomment'];
$query="INSERT INTO contactus(name, email, phone, comment) VALUES ('$name' , '$email', '$phone', '$comment')";
mysqli_query($con, $query);
header("location : contactUs.php");

?>
