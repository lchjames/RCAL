<?php

$activityId = "";
$activityState = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['activity_update'])) {
    $allow_to_input = TRUE;
    $activityId = $_POST['activityID'];
    $activityState = $_POST['activitestate'];
    if ($allow_to_input == TRUE) {
        if (include 'DBConnect.php') {
            $sql = "UPDATE activity SET state = '$activityState', description = '$discription' WHERE activity_id = '$activityId'";
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
        header("location: adminActivity.php");
    }
} else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['activity_delete'])) {
    if (include 'DBConnect.php') {
        $activityId = $_POST['activityID'];
        $sql = "DELETE FROM activity WHERE activity_id = '$activityId'";
        if ($conn->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        header("location: adminActivity.php");
    }
}
?>