<?php

$username = "";
$usernameErr = "";
$email = "";
$passwd = "";
$repasswd = "";
$emailErr = "";
$passwdErr = "";
$repasswdErr = "";
$allow_passwd_to_input = FALSE;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['reset_submit'])) {
//username input verification
    if (empty($_POST["username"])) {
        $usernameErr = "Please input your username";
        $allow_passwd_to_input = FALSE;
    } else {
        $username = test_input($_POST["username"]);
        $allow_passwd_to_input = TRUE;
    }
//email input verification
    if (empty($_POST["email"])) {
        $emailErr = "Please input your email";
        $allow_passwd_to_input = FALSE;
    } else {
        $email = test_input($_POST["email"]);
        $allow_passwd_to_input = TRUE;
    }
    if (empty($_POST["passwd"])) {
        $passwdErr = "Password is required";
        $allow_passwd_to_input = FALSE;
    }
    if (empty($_POST["repasswd"])) {
        $repasswdErr = "Please re-input password";
    } else {
        $passwd = test_input($_POST["passwd"]);
        $repasswd = test_input($_POST["repasswd"]);
        $allow_passwd_to_input = TRUE;
    }
    if ($passwd != $repasswd) {
        $passwdErr = "Password mismatch";
        $repasswdErr = "Password mismatch";
        $allow_passwd_to_input = FALSE;
    }
//input to database
    if ($allow_passwd_to_input == TRUE) {
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM user_account WHERE username='$username'";
            $result = $conn->query($sql);
            if ($result === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } else if ($result->num_rows > 0) {
                $sql = "SELECT * FROM user_account WHERE email='$email'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    $emailErr = 'email Incorrect';
                } else {
                    $sql = "UPDATE user_account SET password = '$passwd' WHERE (username = '$username' && email = '$email')";
                    $result = $conn->query($sql);
                    $conn->close();
//redundancy below	
                    $allow_email_to_input = FALSE;
                    header("location: login.php");
                }
            } else {
                $usernameErr = "User not exists";
            }
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>