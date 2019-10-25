<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Fishing Game</title>
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> Fishing Game </h1>
        <p align="center"><img src="pic/fish.png" style="width:90px;height:90px;"></p>
        <p align="center" style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> This activity is designed to teach the 
            participants of this activity how to identify and use “loops” using the activity itself as an example of this function. 
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For all ages</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Technology, Science</p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 3</p>
                        <p align="center" style="font-family:Comic Sans MS;">Difficulty: 1</p>
                    </div>
                </div>
                <div class="face face2">
                    <h2>Info</h2>
                </div>
            </div>
        </div>
    </center>
    <div class="display-container" align="center">
        <img class="mySlides" src="pic/fish1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/fish2.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/fish3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/fish4.jpg" style="width:40%" border="5">

        <img class="left" src="pic/prevbut.png" onclick="plusDivs(-1)" style="width:5%">
        <img class="right" src="pic/nextbut.png" onclick="plusDivs(1)" style="width:5%"> 

        <!--button class="right" onclick="plusDivs(1)">&#10095;</button>-->
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
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> The game like nature of this activity will help 
        them learn ‘for’ loops by means of the turn order, ‘while’ loops will be learned as each game is a single while loop 
        and ‘if’ statements by means of their success or failure to capture a fish. Using these simple concepts to demonstrate 
        these concepts will make it easier for participants to learn them whilst they have some fun in the process.
    </p>
    <!-- Demo Video-->
    <h2>Demonstration Video</h2>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For more and more specific details about the activity, 
        please download the PDF file with the link below.
    </p>
    <div class="imgBox" align="center">
        <a href="pdf/FishingGame.pdf" target="_blank">
            <img src="pic/pdf.png" style="width:300px;height:150px" title="Download the PDF file";>
        </a>
    </div>
    <br>
    <hr color="blue" style="width:65%" size="6">
    <!-- Experience Program-->
    <h2>Experience Program &#128269 </h2>
    <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> Here, we have a mini demo experience 
        program for young learners to get to know deeper to the concepts behind this activity.
    </p>
    <br>
    <p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
    <p align="center"> <b> These objects are representations of looping concepts as they are repeating their actions again and over again </b></p>
    <p align="center"> <b> Young learners will learn more about looping concepts from exploring these elements</b></p>
    <h3>#1:  Spinning shuriken</h3>
    <div class="imgBox3" align="center">
        <img src="pic/shurikenspin.png">
    </div>
    <br></br>
    <center>
        <a class="button" onclick="location.href = '3Dobjects.php'"><span> Check it out &#128269 </span></a>
    </center>
    <br>
    <br>
    <br>
    <h3>#2:  3D Looping circle</h3>
    <center>
        <div class="imgBox4">
            <div class="image">
                <img src="pic/circle1.png">
            </div>
            <div class="image2">
                <img src="pic/arrow.png">
            </div>
            <div class="image">
                <img src="pic/circle2.png">
            </div>
        </div>
    </center>
    <br></br>
    <center>
        <a class="button" onclick="location.href = '3Dobjects1.php'"><span> Check it out &#128269 </span></a>
    </center>
    <br>
    <br>
    <!--Comment part Start-->
    <center>
        <h1>Leave your comments and feedbacks to us!</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
            <?php echo "<input type=\"hidden\" name=\"user_id\" value=" . $_SESSION["userid"] . ">" ?>
            <input type="hidden" name="activity_id" value="2">
            <textarea name="message"></textarea><br>
            <button type="submit" name="commentSubmit">Post</button>		
        </form>
        <?php
        include_once 'commentFunction.php';
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM `comments` WHERE activity_id = 2";
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
    </center>
    <!--Comment part End-->
</body>
</html>