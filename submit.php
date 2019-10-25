<?php
include_once 'topbar.php';
include_once 'submitActivity.php';
?>
<html>
    <head>
        <title> Submit activity Page </title>
    </head>
    <body>
        <div class="center">
            <h1>Submit your ideas</h1>
            <form method="post" name="actsub" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off" enctype="multipart/form-data" id="actsub"> 
                <hr>
                <input type="text" value="<?php echo $activityName; ?>" placeholder="Enter Activity Name" name="activityname"><span class="error"><?php echo $activityNameErr; ?></span>
                <select name="category" style="width: 100%; height: 5%">
                    <option value="Science">Science</option>
                    <option value="Technology">Technology</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Mathematics">Mathematics</option>
                </select>
                <input type="text" value="<?php echo $activityType; ?>" placeholder="Enter Activity Type" name="activitytype"><span class="error"><?php echo $activityTypeErr; ?></span>
                <textarea style="resize: none; width: 100%" placeholder="Please input some discription for the activity" name="discription"><?php echo $discription; ?></textarea><span class="error"><?php echo $discriptionErr; ?></span>
                <br>Select activity proposal to upload: (Only PDF file is allowed)<span class="error"><?php echo $fileUploadErr; ?></span>
                <input type="file" name="acticityProposal" id="acticityProposal">
                <hr>
                <input type="submit" form="actsub" value="Submit" name="activity_submit">
            </form>
        </div>
    </body>
</html>