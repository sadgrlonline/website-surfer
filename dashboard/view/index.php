<?php
session_start();
// includes
include "../../auth-session.php";
include "../../config.php";
include "template.php";

if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $stmt = $con->prepare("DELETE FROM websites WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    //$message = "Address " . $id . " is deleted!";
    //echo $message;
    $stmt->close();
}

if (isset($_POST['newUrl'])) {
    $id2 = $_POST['id'];
    $newUrl = $_POST['newUrl'];
    $newCat = $_POST['newCat'];

    $stmt = $con->prepare("UPDATE websites SET url=?, category=?  WHERE id=?");
    $stmt->bind_param("sss", $id2, $newUrl, $newCat);
    $stmt->execute();

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