<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <body>
        <h1> Activities List</h1>
        <table>
            <tr>
                <th>Activity Name</th>
                <th>Category</th>
                <th>Activity Type</th>
                <th>Rate</th>
                <th>Difficulty</th>
                <th>Description</th>
                <th>State</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                <form class = "Update-form" method = "POST" action="updateActivity.php">
                    <td><?php echo $row ['activity_name']; ?></td>
                    <td><?php echo $row ['category']; ?></td>
                    <td><?php echo $row ['activity_type']; ?></td>
                    <td><?php echo $row ['rating']; ?></td>
                    <td><?php echo $row ['difficulty']; ?></td>
                    <td><textarea rows="4" readonly style="resize: none; width: 100%"><?php echo $row ['description']; ?></textarea></td>   
                    <td>
                        <?php if ($row ['state'] == "active") { ?>
                            <select name="activitestate">
                                <option value="active" selected>Active</option>
                                <option value="not active">Not active</option>
                                <option value="wait for approve">Wait for approve</option>
                            </select>
                        <?php } else if ($row ['state'] == "not active") { ?>
                            <select name="activitestate">
                                <option value="active">Active</option>
                                <option value="not active" selected>Not active</option>
                                <option value="wait for approve">Wait for approve</option>
                            </select>
                        <?php } else if ($row ['state'] == "wait for approve") { ?>
                            <select name="activitestate">
                                <option value="active">Active</option>
                                <option value="not active">Not active</option>
                                <option value="wait for approve" selected>Wait for approve</option>
                            </select>
                        <?php } ?>
                        <?php echo "<input type = 'hidden' name = 'activityID' value = '" . $row['activity_id'] . "'>"; ?>
                        <button type = "submit" name = "activity_update">Update</button>
                </form>
                <form class = "Delete-form" method = "POST" action="updateActivity.php">
                    <?php echo "<input type = 'hidden' name = 'activityID' value = '" . $row['activity_id'] . "'>"; ?>
                    <button type = "submit" name = "activity_delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>