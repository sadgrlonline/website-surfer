<?php
session_start();
// includes
include "../../auth-session.php";
include "../../config.php";
include "template.php";
$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR;

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $stmt = $con->prepare("DELETE FROM websites WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    //$message = "Address " . $id . " is deleted!";
    //echo $message;
    $stmt->close();
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $newUrl = $_POST['newUrl'];
    $newCat = $_POST['newCat'];

    

    $stmt = $con->prepare("UPDATE websites SET url=?, category=?  WHERE id=?");
    if (false === $stmt) {
        die('prepare() failed:' . htmlspecialchars($stmt->error));
        exit();
    }

    $stmt->bind_param("sss", $newUrl, $newCat, $id);
    if (false === $stmt) {
        die('bind_params() failed:' . htmlspecialchars($stmt->error));
        exit();
    }
    $stmt->execute();
    if (false === $stmt) {
        die('execute() failed:' . htmlspecialchars($stmt->error));
        exit();
    }
    $result = $stmt->get_result();
    //$message = "Address " . $id . " is deleted!";
    //echo $message;
    $stmt->close();
}

$sql = "SELECT * FROM websites";

if ($result = mysqli_query($con, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        // moving html
        while ($row = mysqli_fetch_array($result)) {
            include "while-tmp.php";
        }
    }
    echo "</table>";
}