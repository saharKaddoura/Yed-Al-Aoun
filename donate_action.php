<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $cardnumber = $_POST['cardnumber'];
    $expmonth = $_POST['expmonth'];
    $expyear = $_POST['expyear'];
    $cvv = $_POST['cvv'];

    // Include the database connection file
    include 'includes/connection.php';

    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO donations (fullname, email, address, city, state, cardnumber, expmonth, expyear, cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssss", $fullname, $email, $address, $city, $state, $cardnumber, $expmonth, $expyear, $cvv);

    // Execute the SQL statement
    $stmt->execute();

    // Close the statement and database connection
    $stmt->close();
    $con->close();

    // Redirect to a thank you page
    header('Location: thank_you.php');
    exit();
}
?>
