<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url('img/piggylogo2.png');background-repeat: no-repeat;
 background-attachment: fixed; margin-left:50%;">
  <div class="form-style-10">
            <form method="post" action="login.php">
                <h1>Login</h1>
                    <?php include('errors.php'); ?>

                <div class="inner-wrap">
                    <label>Username</label>
                    <input type="text" name="username" >
                <br>
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
               
                <div class="button-section">
                    <input type="submit" class="btn" name="login_user" value="Login"/>
                </div>

                <br>
                
                <p>
                    Don't have an account? <a href="register.php">Sign up here</a>
                </p>
            </form>
</div>
</body>
</html>