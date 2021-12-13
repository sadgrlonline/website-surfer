<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../css/style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<div class="topbar"></div>
<div class="container">
    <?php include '../templates/nav.php'?>
    <form method="POST" action="index.php" name="reset">
        <div id="div_login">
            <h1>Forgot Password</h1>
            <div class="form-group">
                <div class="form-group">
                    <label><strong>Enter Your Username:</strong></label>
                    <input type="username" name="username" placeholder="username" />
                </div>
                <input type="submit" class="btn btn-info" value="Reset"></button>
            </div>
    </form>