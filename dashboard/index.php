<?php

session_start();
// includes
include "../config.php";
include "../auth-session.php";

$driver = new mysqli_driver();
$driver->report_mode = MYSQLI_REPORT_ERROR;

$idarray = [];
$urlarray = [];
$catarray = [];

$sql = "SELECT COUNT(*) FROM websites WHERE category='personal'";
$qry = mysqli_query($con, $sql);
$personalCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$qry->close();

$sql = "SELECT COUNT(*) FROM websites WHERE category='healing'";
$qry = mysqli_query($con, $sql);
$healingCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$qry->close();

$sql = "SELECT COUNT(*) FROM websites WHERE category='useful'";
$qry = mysqli_query($con, $sql);
$usefulCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$qry->close();

$sql = "SELECT COUNT(*) FROM websites WHERE category='fun'";
$qry = mysqli_query($con, $sql);
$funCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$qry->close();

$sql = "SELECT COUNT(*) FROM websites WHERE category='serious'";
$qry = mysqli_query($con, $sql);
$seriousCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

$qry->close();

$sql = "SELECT COUNT(*) FROM websites WHERE category='social'";
$qry = mysqli_query($con, $sql);
$socialCount = mysqli_fetch_assoc($qry)['COUNT(*)'];

include "template.php";