<?php
include "includes/connection.php";

$name=$_POST['urname'];
$email=$_POST['uremail'];
$phone=$_POST['urphone'];
$add=$_POST['uraddress'];
$major=$_POST['urmajor'];
$nat=$_POST['urnati'];
$age=$_POST['urage'];

$image=$_FILES['imagefile']['name'];
$file_tmp=$_FILES['imagefile']['tmp_name'];

$query="INSERT INTO volunteer(name, email, phone, address, major, nationality, age, image) VALUES ('$name' , '$email', '$phone', '$add', '$major', '$nat', '$age', '$image')";
mysqli_query($con, $query);

move_uploaded_file ($file_tmp,"/images".$image);
header("location : start.php");

?>
