<?php
session_start();

// Check if the user is logged in as HR
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'hr') {
    header("location: login.php");
    exit();
}

include "includes/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Delete the record from the database
    $query = "DELETE FROM employee WHERE id = '$id'";
    mysqli_query($con, $query);

    // Redirect back to the HR page after deletion
    header("location: hr.php");
    exit();
} else {
    header("location: login.php");
    exit();
}
?>