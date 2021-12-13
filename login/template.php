<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css" media="all">
</head>
<div class="topbar"></div>
<div class="container">
    <?php include '../templates/nav.php'?>
    <div class="form">
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>

                <div class="form-group">
                    <div class="form-group">
                        <input type="text" class="textbox" id="username" name="username" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="textbox" id="password" name="password" placeholder="Password" />
                    </div>
                    <div class="forgot">
                        <p><a href="../forgot-password/">Forgot password?</a><br>
                            <br><a href="../forgot-username/">Forgot username?</a>
                        </p>
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
        </form>
    </div>
</div>
</body>

</html>