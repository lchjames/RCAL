<?php

date_default_timezone_set('Australia/Brisbane');
$userId = "";
$activityId = "";
$date = "";
$message = "";
$messageErr = "";
$cid = "";
$reportcount = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentSubmit'])) {
    if (empty($_POST["message"])) {
        $messageErr = "Discription is required";
        $allow_to_input = FALSE;
    } else {
        $message = test_input($_POST["message"]);
        $allow_to_input = TRUE;
        $userID = test_input($_POST['user_id']);
        $activityId = test_input($_POST['activity_id']);
        $date = date("Y-m-d H:i:s");
        if ($allow_to_input == TRUE) {
            if (include 'DBConnect.php') {
                $sql = "INSERT INTO comments (user_id,activity_id,date,message) "
                        . "VALUES ('$userID','$activityId','$date','$message')";
                if ($conn->query($sql) === FALSE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            $conn->close();
        }
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentDelete'])) {
    if (include 'DBConnect.php') {
        $cid = test_input($_POST['cid']);
        $sql = "DELETE FROM comments WHERE cid = '$cid'";
        $result = $conn->query($sql);
        $conn->close();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentReport'])) {
    $reportcount = $_POST["reportcount"] + 1;
    $cid = test_input($_POST['cid']);
    if (include 'DBConnect.php') {
        $sql = "UPDATE comments SET report_count = '$reportcount' WHERE cid = '$cid'";
        $result = $conn->query($sql);
        $conn->close();
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['commentResolve'])) {
    $cid = test_input($_POST['cid']);
    if (include 'DBConnect.php') {
        $sql = "UPDATE comments SET report_count = 0 WHERE cid = '$cid'";
        $result = $conn->query($sql);
        $conn->close();
    }
}
?>