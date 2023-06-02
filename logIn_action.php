<?php
session_start();

include "includes/connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $password = $_POST['txtpassword'];

    $query = "SELECT * FROM employee WHERE email='$email' AND username='$username' AND password='$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $username;
        $_SESSION['role'] = $row['role'];

        // Redirect the user based on their role
        if ($_SESSION['role'] == 'hr') {
            header("location: hr.php");
        } elseif ($_SESSION['role'] == 'volunteer') {
            header("location: volunteer.php");
        } elseif ($_SESSION['role'] == 'employee') {
            header("location: employee.php");
        }
    } else {
        $_SESSION['login_error'] = "Invalid email or password";
        header("location: login.php");
    }
} else {
    header("location: login.php");
}
?>
