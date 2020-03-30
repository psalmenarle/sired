<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-image: url('img/piggylogo2.png');background-repeat: no-repeat;
background-attachment: fixed; margin-left:50%;">

    <div class="form-style-10">

            <form method="post" action="register.php">
                <h1>Register</h1>
                <?php include('errors.php'); ?>

                <div class="inner-wrap">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                    <br>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                    <br>
                    <label>Password</label>
                    <input type="password" name="password_1">
                    <br>
                    <label>Confirm password</label>
                    <input type="password" name="password_2">
                </div>

                <div class="button-section">
                    <input type="submit" class="btn" name="reg_user" value="Register"/>
                </div>

                    <br>

                <p>
                    Already have a account? <a href="login.php">Sign in here</a>
                </p>
            </form>
    </div> 
</body>
</html>