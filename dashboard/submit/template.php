<!DOCTYPE html>
<html>

<head>
    <title>Submit a Site</title>
    <link rel="stylesheet" href="../../css/style.css" media="all">
</head>

<body>
    <div class="container">
        <?php include "../../templates/nav.php";?>
        <div id="div_login">
            <h1>Submit a Website</h1>
            <div class="wrapper">
                <html>

                <head>
                    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                </head>

                <body>
                    <div id="surfSubmit">
                        <form name="websurf" action="" method="POST">
                           <div> <label for="url">URL:</label>
                            <input type="text" name="url" id="url"></div>
                            <div><label for="cat">Category:</label>
                            <select name="cat" id="cat">
                                <option value="personal">Personal</option>
                                <option value="healing">Healing</option>
                                <option value="useful">Useful</option>
                                <option value="fun">Fun</option>
                                <option value="serious">Serious</option>
                                <option value="social">Social</option>
                            </select></div>
                            <div>
                            <input name="websurf" name="submit" id="submit_btn" type="submit">
</div>
                        </form>
                    </div>
                </body>
            </div>
        </div>
        <style>
        .wrapper {
            padding: 20px !important;

        }
        </style>

        <script>
        $("form").on("submit", function(e) {
                    console.log('test');
                    var dataString = $(this).serialize();

                    // alert(dataString); return false;
        </script>
        </script>