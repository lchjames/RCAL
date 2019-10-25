<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Puzzle Game</title>
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> Puzzle Game </h1>
        <p align="center"><img src="pic/puzz.png" style="width:90px;height:90px;"></p>
        <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> The puzzle game is 
            intended to teach young children how a Python 
            coding language turtle works. it does this by using a variety of different types of puzzles as well as 
            repetition and association based memory exercises. 
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For Kindergartens and Primary School Students</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Technology, Math</p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 3</p>
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
        <img class="mySlides" src="pic/puzzle1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/puzzle2.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/puzzle3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/puzzle4.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/puzzle5.jpg" style="width:40%" border="5">

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
    <h2> Overall Description </h2>
    <p align="center"><img src="pic/puzz1.png" style="width:90px;height:90px;"></p>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> The expected event that can perform this activity is 
        the outdoor group event such as the school trip. The students are given a map and paper description with 
        python turtle graphic codes such as “Forward (60 meters)”. The student are expected to find the location 
        based on these python codes. Furthermore, before performing this activity, the tutor is expected to use paper 
        cards to introduce each simple python code. Overall, this activity provide a memory-based outdoor experience 
        that could help young learners easily remember python codes while they are doing outdoor activities.
    </p>
    <p align="center"><img src="pic/puzz2.png" style="width:90px;height:90px;"></p>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> This game will allow learners to form a group and use the 
        turtle graphic's logics command (such as Forward, Right, Left and Backward) to complete the puzzle which is shown in the 
        big board (See demo video below). Here, we also have made a game to experience this activity.
    </p>

    <!-- Demo Video-->
    <h2> Demonstration video </h2>	
    <div class="iframe-container">
        <p align="center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dbth6_Yq42s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</p>
<p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For more and more specific details about the activity, 
    please download the PDF file with the link below.
</p>
<div class="imgBox" align="center">
    <a href="pdf/PuzzleGame.pdf" target="_blank">
        <img src="pic/pdf.png" style="width:300px;height:150px;" title="Download the PDF file">
    </a>
</div>
</br>
<br>
<hr color="blue" style="width:65%" size="6">

<!-- Experience Program-->
<h2>Experience Program &#128269 </h2>
<p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> Here, we have a mini demo experience 
    program for young learners to get to know deeper to the concepts behind this activity.
</p>
<div class="imgBox1" align="center">
    <img src="pic/puzzgame2.png">
</div>
<p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
<p align="center"> <b> Control the red box at the middle by using "Left","Right","Up" and "Down" buttons in the top right corner </b></p>
<p align="center"> <b> Try to fit the box into the squares </b></p>
<p align="center"> <b> Change the px number at the top to change the distance that you want the box to be moved </b></p>
<br>
<center>
    <a class="button" onclick="location.href = 'puzzlegame2.php'"><span> Check it out &#128269 </span></a>
</center>
</br>
<br>
<hr color="blue" style="width:65%" size="6">
<!-- Demo Puzzle Game-->
<h2>Demo Puzzle Game &#127918 </h2>
<p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> Here is the mini demo puzzle game</p>
<div class="imgBox2" align="center">
    <img src="pic/puzzgame1.png">
</div>
<p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
<p align="center"> <b> Rearrange the boxes to become the completed image as shown </b></p>
<p align="center"> <b> The boxes are moved by draggings </b></p>
<p align="center"> <b> You can choose the difficulty levels (Easy, Medium and Hard) </b></p>
<p align="center" style="font-size:17px;"> <b><u> Rules </u></b></p>
<p align="center"> <b> "Backward(1)" (or Moving the box to the left by 1 step) is prohibited ^_^, use another way rearrange the box as wished (Such as: Forward) </b></p>
<p align="center"> <b> Move the box by 1 step only (This only test your honesty as you can move your box as far as you can) </b></p>
<p align="center"> <b> There's time counting (But there's no limited time so don't worry ^_^, just want to test how long will you able to complete the puzzle </b></p>
<p align="center"> <b> Hint: There's an interesting 'Mysterious thing', you may see it </b></p>
<br>
<center>
    <a class="button" onclick="location.href = 'puzzle.php'"><span> Play &#127918 </span></a>
</center>
<br>
<br>
<br>
<br>
<!--Comment part Start-->
<center>
    <h1>Leave your comments and feedbacks to us!</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
        <?php echo "<input type=\"hidden\" name=\"user_id\" value=" . $_SESSION["userid"] . ">" ?>
        <input type="hidden" name="activity_id" value="1">
        <textarea name="message"></textarea><br>
        <button type="submit" name="commentSubmit">Post</button>		
    </form>
    <?php
    include_once 'commentFunction.php';
    if (include 'DBConnect.php') {
        $sql = "SELECT * FROM `comments` WHERE activity_id = 1";
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
    </br>
</body>
</html>