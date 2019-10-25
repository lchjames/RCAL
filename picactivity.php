<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Pictures Games</title>
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> Pictures Games </h1>
        <p align="center"><img src="pic/picicon.png" style="width:90px;height:90px;"></p>
        <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> This activity is designed 
            to teach young children to learn how to debug by identifying erroneous code by seeing it as out of place. 
            This is taught by using association and done by using spot the differences and spot the strange points.
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For Kindergartens and Primary School students</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Science, Math, Technology, Engineering </p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 4</p>
                        <p align="center" style="font-family:Comic Sans MS;">Difficulty: 2</p>
                    </div>
                </div>
                <div class="face face2">
                    <h2>Info</h2>
                </div>
            </div>
        </div>
    </center>
    <div class="display-container" align="center">
        <img class="mySlides" src="pic/picture1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/picture2.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/picture3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/picture4.jpg" style="width:40%" border="5">

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
    <p align="center"><img src="pic/picicon1.png" style="width:90px;height:90px;"></p>
    <p style="font-size:17px; color:black; font-family:Comic Sans MS;"> Spotting the strange points game in the 
        given images (with the picture of bicycle below as an example) instructors will explain about Science that 
        the bicycle has the balancing paddles and it would not run, for Engineering, instructors will express the 
        structures that make the bicycle, therefore, bicycles are considered as Technologies.
    </p>
    <p align="center"><img src="pic/pictg.jpg" style="width:200px;height:150px;"></p>
    <p align="center"><img src="pic/picicon2.png" style="width:90px;height:90px;"></p>
    <p style="font-size:17px; color:black; font-family:Comic Sans MS;"> Spotting differences game: In 
        this game, students are allowed to find a certain number of different points between two similar pictures. For basic levels,
        young learners are asked to spot the differences between 2 given images. For advanced levels, they are asked to spot differences
        between 2 screenshots of set of codes (See example images below).
    </p>
    <p align="center" style="font-size:15px; color:black; font-family:Comic Sans MS;"> Basic level</p>
    <p align="center"><img src="pic/pictg1.jpg" style="width:200px;height:150px;"></p>
    <p align="center" style="font-size:15px; color:black; font-family:Comic Sans MS;"> Advanced level</p>
    <p align="center"><img src="pic/pictg2.png" style="width:400px;height:100px;"></p>
    <h2>Demonstration Video</h2>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For more specific details, please download the PDF file with
        the link below.
    </p>
    <div class="imgBox" align="center">
        <a href="pdf/PicturesGames.pdf" target="_blank">
            <img src="pic/pdf.png" style="width:300px;height:150px;" title="Download the PDF file">
        </a>
    </div>
    <br>
    <hr color="blue" style="width:65%" size="6">
    <!-- Demo Games-->
    <h2>Demo Spot the strange points Game &#127918 </h2>
    <div class="imgBox1"align="center">
        <img src="pic/pictact.png">
    </div>
    <p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
    <p align="center"> <b> There are 4 images which have 1 strange point in each </b></p>
    <p align="center"> <b> Spotlight effect is used in order to increase the difficulty (PC version only)</b></p>
    <p align="center"> <b> You can check the results with explanations in the next page </b></p>
    <br>
    <center>
        <a class="button1" onclick="location.href = 'pictgame1.php'"><span> Play &#127918 </span></a>
    </center>
    <center>
        <a class="button2" onclick="location.href = 'pictgame1-2.php'"><span> Play &#127918 </span></a>
    </center>
    <br>
    <h2>Demo Spot the differences Game &#127918 </h2>
    <div class="imgBox1"align="center">
        <img src="pic/picturegame.png">
    </div>
    <p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
    <p align="center"> <b> There are 3 pairs of images which have 5 differences on each pair </b></p>
    <p align="center"> <b> You can check the results with explanations in the next page </b></p>
    <br>
    <center>
        <a class="button" onclick="location.href = 'pictgame2.php'"><span> Play &#127918 </span></a>
    </center>
    <br>
    <br>
    <br>
    <!--Comment part Start-->
    <center>
        <h1>Leave your comments and feedbacks to us!</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
        <?php echo "<input type=\"hidden\" name=\"user_id\" value=" . $_SESSION["userid"] . ">" ?>
            <input type="hidden" name="activity_id" value="4">
            <textarea name="message"></textarea><br>
            <button type="submit" name="commentSubmit">Post</button>		
        </form>
        <?php
        include_once 'commentFunction.php';
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM `comments` WHERE activity_id = 4";
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
    </body>
</html>