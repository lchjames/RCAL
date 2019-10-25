<?php

$activityName = "";
$category = "";
$activityType = "";
$discription = "";
$activityNameErr = "";
$categoryErr = "";
$activityTypeErr = "";
$discriptionErr = "";
$fileUploadErr = "";
$target_dir = "pdf/";
$target_file = "";
$fileexist = TRUE;
$allow_to_input = TRUE;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['activity_submit'])) {
    if (empty($_POST["activityname"])) {
        $activityNameErr = "Activity name is required";
        $allow_to_input = FALSE;
    } else {
        $activityName = test_input($_POST["activityname"]);
        $allow_to_input = TRUE;
// check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $activityName)) {
            $activityNameErr = "Only letters and white space allowed";
            $allow_to_input = FALSE;
        }
    }
    if (empty($_POST["category"])) {
        $categoryErr = "Category is required";
        $allow_to_input = FALSE;
    } else {
        $category = test_input($_POST["category"]);
        $allow_to_input = TRUE;
    }
    if (empty($_POST["activitytype"])) {
        $activityTypeErr = "Activity type is required";
        $allow_to_input = FALSE;
    } else {
        $activityType = test_input($_POST["activitytype"]);
        $allow_to_input = TRUE;
// check if activity only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z0-9 ]*$/", $activityType)) {
            $activityTypeErr = "Only letters and white space allowed";
            $allow_to_input = FALSE;
        }
    }
    if (empty($_POST["discription"])) {
        $discriptionErr = "Discription is required";
        $allow_to_input = FALSE;
    } else {
        $discription = test_input($_POST["discription"]);
        $allow_to_input = TRUE;
    }

    if (!is_uploaded_file($_FILES['acticityProposal']['tmp_name'])) {
        $fileUploadErr = "No file to upload";
        $fileexist = FALSE;
    } else {
        $file_type = $_FILES['acticityProposal']['type'];
        if ($file_type != "application/pdf") {
            $fileUploadErr = "You had upload a wrong file type";
            $fileexist = FALSE;
        } else {
            $target_file = $target_dir . basename($_FILES["acticityProposal"]["name"]);
            if (file_exists($target_file)) {
                $fileUploadErr = "Sorry, file already exists.";
                $fileexist = FALSE;
            }
        }
    }
    if ($allow_to_input == TRUE && $fileexist == TRUE) {
        if (include 'DBConnect.php') {
            if (move_uploaded_file($_FILES["acticityProposal"]["tmp_name"], $target_file)) {
                //echo "The file " . basename($_FILES["acticityProposal"]["name"]) . " has been uploaded.";
                $sql = "INSERT INTO activity (activity_name, description, category, activity_type, state, pic_link, PDF_upload) "
                        . "VALUES ('$activityName', '$discription', '$category', '$activityType', 'wait for approve', 'pic/no-image-icon.png', '$target_file')";
                if ($conn->query($sql) === FALSE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                $fileUploadErr = "Sorry, there was an error uploading your file.";
            }
        }
        //header("Location:activity.php");
        $conn->close();
    }
}
?>