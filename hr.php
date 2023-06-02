<?php
session_start();

// Check if the user is logged in as HR
if (!isset($_SESSION['user']) || $_SESSION['role'] != 'hr') {
    header("location: login.php");
    exit();
}

include "includes/connection.php";
include 'common.php';

$query = "SELECT * FROM employee";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/style1.css" />

    <title>HR Page</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <div class="container-fluid">
            <img src="images/LOGO.jpg" class="rounded-pill" style="width:50px;" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="BeAVolunteer.php" target="_blank">Be A Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutUs.php" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactUs.php" target="_blank">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="find-btn dropdown">
                <a class="find-more btn btn-secondary " href="logout.php" role="button">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1>Welcome to the HR Page</h1>
        <p>Hello,
            <?php echo $_SESSION['user']; ?>!
        </p>
        <form action="save_changes.php" method="POST">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <input type="text" name="username[]" value="<?php echo $row['username']; ?>" />
                                <input type="hidden" name="id[]" value="<?php echo $row['id']; ?>" />
                            </td>
                            <td>
                                <input type="email" name="email[]" value="<?php echo $row['email']; ?>" />
                            </td>
                            <td>
                                <input type="text" name="password[]" value="<?php echo $row['password']; ?>" />
                            </td>
                            <td>
                                <input type="text" name="role[]" value="<?php echo $row['role']; ?>" />
                            </td>
                            <td>
                                <form class="delete-form" action="delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>

</html>