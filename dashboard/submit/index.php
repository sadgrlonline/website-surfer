<?php
session_start();
include "../../auth-session.php";
include "../../config.php";
include "template.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['newCat'])) {
    $newCategory = $_POST['newCat'];

    $stmt2 = $con->prepare("INSERT INTO websites (category) VALUES ?");
    $stmt2->bind_param('s', $newCategory);
    $stmt2->execute();
    $stmt2->close();
}

if (isset($_POST['url'])) {
    $url = $_POST['url'];

    // filter the input
    $url = filter_input(INPUT_POST, 'url');

    // this escapes the slashes
    $url = preg_replace("#^[^:/.]*[:/]+#i", "", $url);
    echo $url;

}

if (isset($_POST['submit'])) {
$stmt = $con->prepare("INSERT INTO websites(url, category) VALUES (?, ?);");
$stmt->bind_param('ss', $url, $cat);
echo $stmt->error;
$stmt->execute();
$stmt->close();
}