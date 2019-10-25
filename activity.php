<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Activities List</title>
        <link rel="stylesheet" href="css/style3.css">
    </head>
    <body>
        <h1> Activities List</h1>
        <div class="container">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class="box">
                    <div class="imgBox">
                        <a href="<?php echo $row ['link']; ?>">
                            <img src="<?php echo $row ['pic_link']; ?>" alt="<?php echo $row ['activity_name']; ?>">
                        </a>
                    </div>
                    <div class="details">
                        <div class="content">
                            <a href="<?php echo $row ['link']; ?>" style="text-decoration:none" title="Go to <?php echo $row ['activity_name']; ?> page">
                                <h2> <?php echo $row ['activity_name']; ?> </h2>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </body>
</html>