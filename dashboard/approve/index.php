<?php

$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR;

// includes
include "../../auth-session.php";
include "../../config.php";
include "template.php";

if (isset($_GET['approve'])) {
    $id = $_GET['approve'];
    echo $id;
    $stmt = $con->prepare("UPDATE websites SET pending = 0 WHERE id = ?");
    if (false === $stmt) {
        die('prepare() failed:' . htmlspecialchars($stmt->error));
        exit();
    }
    $stmt->bind_param("s", $id);
    if (false === $stmt) {
        die('bind_params() failed:' . htmlspecialchars($stmt->error));
        exit();
    }
    $stmt->execute();
    if (false === $stmt) {
        die('execute() failed:' . htmlspecialchars($stmt->error));
        exit();
    }
    //$message = "Address " . $id . " is deleted!";
    //echo $message;
    $stmt->close();
} else {
    echo "not set";
}

//$sql = "SELECT * FROM websites ";
$sql = "SELECT * FROM websites WHERE pending = 1";

if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        // moving html
        while ($row = mysqli_fetch_array($result)) {
            include "while-tmp.php";
        }
    }
    echo "</table>";
}