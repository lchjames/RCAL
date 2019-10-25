<?php

$username = "";
$Lusername = "";
$email = "";
$passwd = "";
$Lpasswd = "";
$repasswd = "";
$usernameErr = "";
$LusernameErr = "";
$emailErr = "";
$passwdErr = "";
$LpasswdErr = "";
$repasswdErr = "";
$allow_username_to_input = FALSE;
$allow_email_to_input = FALSE;
$allow_passwd_to_input = FALSE;
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
    if (basename($_SERVER['PHP_SELF']) == "login.php") {
        header("location: about.php");
        exit;
    }
} else {
    if (basename($_SERVER['PHP_SELF']) != "login.php" && basename($_SERVER['PHP_SELF']) != "about.php") {
        header("location: login.php");
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register_submit'])) {
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
        $allow_username_to_input = FALSE;
    } else {
        $username = test_input($_POST["username"]);
        $allow_username_to_input = TRUE;
// check if name only contains letters and number
        if (!preg_match("/^[a-zA-Z0-9]+$/", $username)) {
            $usernameErr = "Only letters and number are allowed";
            $allow_username_to_input = FALSE;
        }
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
// check if password only contains letters and number
        if (!preg_match("/^[a-zA-Z0-9]+$/", $passwd)) {
            $passwdErr = "Only letters and number are allowed";
            $allow_passwd_to_input = FALSE;
        }
// check if name only contains letters and whitespace
        if ($passwd != $repasswd) {
            $passwdErr = "Password mismatch";
            $repasswdErr = "Password mismatch";
            $allow_passwd_to_input = FALSE;
        }
    }

    if ($allow_username_to_input == TRUE && $allow_passwd_to_input == TRUE) {
        if (include 'DBConnect.php') {
            $sql = "SELECT username FROM user_account WHERE username='$username'";
            $result = $conn->query($sql);
            if ($result === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } else if ($result->num_rows == 0) {
                $sql = "INSERT INTO user_account (username, password, user_type)"
                        . "VALUES ('$username', '$passwd', 'user')";
                if ($conn->query($sql) === FALSE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                print "Username Used";
            }
        }
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM user_account WHERE username='$username'";
            $result = $conn->query($sql);
            if ($result === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } else {
// Password is correct, so start a new session
                session_start();
                $row = mysqli_fetch_array($result);
// Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $row ['username'];
                $_SESSION["usertype"] = $row ['user_type'];
                $_SESSION["userid"] = $row ['user_id'];

// Redirect user to activity page
                if ($_SESSION["usertype"] == 'admin') {
                    header("location: adminActivity.php");
                } else
                    header("location: userDataPage.php");
            }
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $LusernameErr = "User not exists";
        }


        $conn->close();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
    if (empty($_POST["Lusername"])) {
        $LusernameErr = "Username is required";
        $allow_username_to_input = FALSE;
    } else {
        $Lusername = test_input($_POST["Lusername"]);
        $allow_username_to_input = TRUE;
    }
    if (empty($_POST["Lpasswd"])) {
        $LpasswdErr = "Password is required";
        $allow_passwd_to_input = FALSE;
    } else {
        $Lpasswd = test_input($_POST["Lpasswd"]);
        $allow_passwd_to_input = TRUE;
    }

    if ($allow_username_to_input == TRUE && $allow_passwd_to_input == TRUE) {
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM user_account WHERE BINARY username like '$Lusername'&& BINARY password like '$Lpasswd'";
            $result = $conn->query($sql);
            if ($result === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } else if ($result->num_rows == 0) {
                $LusernameErr = 'Username or Password Incorrect';
                $LpasswdErr = 'Username or Password Incorrect';
            } else if ($result->num_rows > 0) {
// Password is correct, so start a new session
                session_start();
                $row = mysqli_fetch_array($result);
// Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["username"] = $row ['username'];
                $_SESSION["usertype"] = $row ['user_type'];
                $_SESSION["userid"] = $row ['user_id'];

// Redirect user to activity page
                if ($_SESSION["usertype"] == 'admin') {
                    header("location: adminActivity.php");
                } else {
                    header("location: activity.php");
                }
            }
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $LusernameErr = "User not exists";
        }
    }
    $conn->close();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

