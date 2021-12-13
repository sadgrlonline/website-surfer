<!DOCTYPE html>
<html>

<head>
    <title>Websurfer Dashboard</title>
    <link rel="stylesheet" href="../css/style.css" media="all">
</head>

<body>
    <div class="container">
        <?php include "../templates/nav.php";?>
        <div id="div_login">
            <h1>Websurfer Dashboard</h1>
            <div class="wrapper">
                <p>Below is a summary of the current categories:</p>
                <strong>Personal: </strong><?php echo $personalCount; ?><br>
                <strong>Healing: </strong><?php echo $healingCount; ?><br>
                <strong>Useful: </strong><?php echo $usefulCount; ?><br>
                <strong>Fun: </strong><?php echo $funCount; ?><br>
                <strong>Serious: </strong><?php echo $seriousCount; ?><br>
                <strong>Social: </strong><?php echo $socialCount; ?><br>
            </div>
        </div>
        <style>
        .wrapper {
            padding: 20px !important;

        }
        </style>
        <script>
        var encodeidArray = <?php echo json_encode($idarray); ?>;
        var encodeurlArray = <?php echo json_encode($urlarray); ?>;
        console.log(encodeidArray);
        console.log("line break");
        console.log(encodeurlArray);
        console.log(encodeidArray[1]);
        </script>