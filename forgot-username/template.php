<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css" media="all">
</head>
<div class="topbar"></div>
<div class="container">
    <?php include '../templates/nav.php'?>
    <div class="form">
        <form method="post" action="" name="reset">
            <div id="div_login">
                <h1>Forgot Username</h1>
                <div class="form-group">
                    <div class="form-group">
                        <label><strong>Enter Your Email:</strong></label>
                        <input type="email" name="email" placeholder="username@email.com" />
                    </div>
                    <input type="submit" value="Remind" />
                </div>
        </form>