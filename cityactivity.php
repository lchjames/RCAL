<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> City Hunt</title>
        <!--link rel="stylesheet" href="css/stylebut.css">-->
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> City Hunt </h1>
        <p align="center"><img src="pic/cityicon.png" style="width:90px;height:90px;"></p>
        <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> This activity is designed 
            to teach young children to learn map reading skills, team co-operation, encryption and decryption..  
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For Middle/High school students</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Science, Math</p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 5</p>
                        <p align="center" style="font-family:Comic Sans MS;">Difficulty: 3</p>
                    </div>
                </div>
                <div class="face face2">
                    <h2>Info</h2>
                </div>
            </div>
        </div>
    </center>
    <div class="display-container" align="center">
        <img class="mySlides" src="pic/cityhunt3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/cityhunt4.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/cityhunt1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/cityhunt2.jpg" style="width:40%" border="5">

        <img class="left" src="pic/prevbut.png" onclick="plusDivs(-1)" style="width:5%">
        <img class="right" src="pic/nextbut.png" onclick="plusDivs(1)" style="width:5%">
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
    </br>
    </br>
    <h2>Overall Description</h2>
    <p align="center "style="font-size:17px; color:black; font-family:Comic Sans MS;"> A cityhunt is a outdoor game in which 
        the organizers prepare a list defining specific items, which the participants seek to gather the items or 
        complete the tasks on the list. Usually participants work in small teams. The goal is to finish the list 
        as fast as possible. A cityhunt is distinguished from a treasure hunt, in that the latter involves one or 
        a few items that are desirable and completed in sequence, while a cityhunt primarily collects undesirable 
        or useless objects in random order.
    </p>
    <!-- Demo Video-->
    <h2>Demonstration Video</h2>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For more and more specific details about the activity, 
        please download the PDF file with the link below.
    </p>
    <div class="imgBox" align="center">
        <a href="pdf/CityHunt.pdf" target="_blank">
            <img src="pic/pdf.png" style="width:300px;height:150px;" title="Download the PDF file">
        </a>
    </div>
    <br>
    <hr color="blue" style="width:65%" size="6">
    <!-- Experience Program-->
    <h2>Experience Program &#128269 </h2>
    <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> Here, we have a mini demo experience 
        program for young learners to get to know deeper to the concepts behind this activity.
    </p>
    <h3>Treasure hunt path finding</h3>
    <div class="imgBox1"align="center">
        <img src="images/pathfind.png">
    </div>
    <p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
    <p align="center"> <b> Drag your mouse to the sand to open the path to the treasure (Start from the 'X') </b></p>
    <p align="center"> <b> Young learners will learn more about path findinf concepts</b></p>
    <p align="center"> <b> Note: This program is available on web PC only</b></p>
    <center>
        <a class="button1" onclick="location.href = 'pathfind.php'"><span> Check it out &#128269 </span></a>
    </center>
    <br>
    <br>
    <!--Comment part Start-->
    <center>
        <h1>Leave your comments and feedbacks to us!</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
            <?php echo "<input type=\"hidden\" name=\"user_id\" value=" . $_SESSION["userid"] . ">" ?>
            <input type="hidden" name="activity_id" value="3">
            <textarea name="message"></textarea><br>
            <button type="submit" name="commentSubmit">Post</button>		
        </form>
        <?php
        include_once 'commentFunction.php';
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM `comments` WHERE activity_id = 3";
            $result = $conn->query($sql);
            if ($conn->query($sql) === FALSE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <div class = "comment-box">
                    <p>
                        <?php
                        echo $row['date'] . "<br>";
                        echo $row['message'] . "<br>";
                        if ($_SESSION["usertype"] == 'admin') {
                            echo $row['report_count'];
                        }
                        ?>
                    </p>
                    <?php if ($_SESSION["usertype"] == 'admin') { ?>
                        <form class = "Delete-form" method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <?php echo "<input type = 'hidden' name = 'cid' value = '" . $row['cid'] . "'>"; ?>
                            <button type = "submit" name = "commentDelete">Remove</button>
                        </form>
                        <?php
                    }
                    ?>

                    <form class = "Report-form" method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <?php echo "<input type = 'hidden' name = 'cid' value = '" . $row['cid'] . "'>"; ?>
                        <?php echo "<input type = 'hidden' name = 'reportcount' value = '" . $row['report_count'] . "'>"; ?>
                        <button type = "submit" name = "commentReport">Report</button>
                    </form>

                    <?php if ($_SESSION["usertype"] == 'admin') { ?>
                        <form class = "Resolve-form" method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <?php echo "<input type = 'hidden' name = 'cid' value = '" . $row['cid'] . "'>"; ?>
                            <?php echo "<input type = 'hidden' name = 'reportcount' value = '" . $row['report_count'] . "'>"; ?>
                            <button type = "submit" name = "commentResolve">Resolve</button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }
            $conn->close();
        }
        ?>
        <!--Comment part End-->
    </center>
    </br>
</body>
</html>