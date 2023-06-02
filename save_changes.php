<?php
session_start();

// Check if the user is logged in as HR
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'hr') {
    header("location: login.php");
    exit();
}

include "includes/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ids = $_POST['id'];
    $usernames = $_POST['username'];
    $emails = $_POST['email'];
    $passwords = $_POST['password'];
    $roles = $_POST['role'];

    // Iterate through the edited data and update the records in the database
    for ($i = 0; $i < count($ids); $i++) {
        $id = mysqli_real_escape_string($con, $ids[$i]);
        $username = mysqli_real_escape_string($con, $usernames[$i]);
        $email = mysqli_real_escape_string($con, $emails[$i]);
        $password = mysqli_real_escape_string($con, $passwords[$i]);
        $role = mysqli_real_escape_string($con, $roles[$i]);

        $query = "UPDATE employee SET username='$username', email='$email', password='$password', role='$role' WHERE id='$id'";
        mysqli_query($con, $query);
    }

    // Redirect back to the HR page after saving the changes
    header("location: hr.php");
    exit();
} else {
    header("location: login.php");
    exit();
}
?>
