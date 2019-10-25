<?php
include_once 'resetpwFunction.php';
?>
<html>
    <head>
        <title> Forget password page </title>
        <link rel="stylesheet" href="css/styleBG.css">
    </head>
    <body>
        <h1>Forget password page</h1>
        <br>
    <center>
        <div class="colre">
            <!--    this is to update the Password of the account -->
            <form method="post" name="user_pass_reset" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off" id="pass_reset"> 
                <h2>Reset Password</h2>
                <hr>
                <input type="text" value="<?php echo $username ?>" name="username" placeholder="Input your username"><span class="error"><?php echo $usernameErr; ?></span><br>
                <input type="text" value="<?php echo $email ?>" name="email" placeholder="Input your email"><span class="error"><?php echo $emailErr; ?></span><br>
                <input type="password" value="<?php echo $passwd ?>" placeholder="Enter Password" name="passwd"><span class="error"><?php echo $passwdErr; ?></span><br>
                <input type="password" value="<?php echo $repasswd ?>" placeholder="Repeat Password" name="repasswd"><span class="error"><?php echo $repasswdErr; ?></span><br>
                <hr>
                <input type="submit" form="pass_reset" value="Reset password" name="reset_submit" class="btn">
            </form>
        </div>
    </center>
</body>
</html>