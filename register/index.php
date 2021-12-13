<?php

// enable error reporting
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR;

// include
include "../config.php";

// set time zone
date_default_timezone_set("US/Eastern");
$datetime = date("Y-m-d H:i:s");
if (isset($_POST['btnsignup'])) {
    header('Location: ../success/');
}
?>
<?php
$error_message = "oops";
$success_message = "";

// Register user
if (isset($_POST['btnsignup'])) {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);
    $confirmpassword = trim($_POST['confirmpassword']);
    $hash = md5(rand(0, 1000)); // Generate random 32 character hash and assign it to a local variable.
    // Example output: f4552671f8909587cf485ea990207f3b

    $to = $email; // Send email to our user
    $subject = 'Login Verification'; // Give the email a subject
    $message = '

    Your account has been created, you can log in with the following credentials after you have activated your account by pressing the url below.

    ------------------------
    Username: ' . $username . '
    ------------------------

    Please click this link to activate your account:
    https://yourwebsite.com/login-demo/verify/?email=' . $email . '&hash=' . $hash . '

    '; // Our message above including the link

    $headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
    mail($to, $subject, $message, $headers); // Send our email

    // Check fields are empty or not
    if ($email == '' || $username == '' || $name == '' || $password == '' || $confirmpassword == '') {
        $error_message = "Please fill all fields.";
    }

    // Check if confirm password matching or not
    if ($password != $confirmpassword) {
        $error_message = "Confirm password not matching";
    }

    // Check if username already exists
    $stmt = $con->prepare("SELECT * FROM users WHERE username = '$username'");

    if (false === $stmt) {
        die('prepare() failed:' . htmlspecialchars($stmt->error));
        exit();
    }

    $stmt->bind_param("s", $username);

    if (false === $stmt) {
        die('bind_params() failed:' . htmlspecialchars($stmt->error));
        exit();
    }

    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $error_message = "<div style='color:red; font-weight:strong; text-align:center;'>Username already exists. Please try a different one.</div>";
        echo $error_message;
    }

    if (false === $stmt) {
        die('execute() failed:' . htmlspecialchars($stmt->error));
        exit();
    }

    $stmt->close();

}

$hashedpass = password_hash($password, PASSWORD_DEFAULT);
if (isset($_POST['btnsignup'])) {
// Insert records
    $insertSQL = "INSERT INTO users(datetime,email,username,name,password,hash ) values(?,?,?,?,?,?)";
    $stmt = $con->prepare($insertSQL);
    $stmt->bind_param("ssssss", $datetime, $email, $username, $name, $hashedpass, $hash);
    $stmt->execute();
    $stmt->close();
}

include "template.php";
