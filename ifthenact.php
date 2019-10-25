<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> Programmer Says Game</title>
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> Programmer Says Game </h1>
        <p align="center"><img src="pic/ifthenicon.png" style="width:90px;height:90px;"></p>
        <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> This activity is designed to teach the 
            participants to learn the "If...Then..." which is the basic statement of coding. 
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For Kindergartens and Primary School students</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Science</p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 2</p>
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
        <img class="mySlides" src="pic/ifthen1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/ifthen2.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/ifthen3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/ifthen4.jpg" style="width:40%" border="5">

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
    <h2> Overall Description </h2>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> If..then is basic statement for coding, The program 
        queries if there is a condition and then instructs it to perform certain operations. It can be as basic as a true or false 
        question and answer, or it can prompt for action.
    </p>
    </br>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For each game begin, One child will play the programmer 
        and the other child will play the computers, the programmer will order to all computers “If I ____ (fill in the blank), 
        then you _____ (fill in the blank)”. For example, the Programmer below gave the command “If I turn in a circle, Then you 
        turn in a circle.”
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
    <a href="pdf/ProgrammerSaysGame.pdf" target="_blank">
        <img src="pic/pdf.png" style="width:300px;height:150px;" title="Download the PDF file">
    </a>
</div>
</br>
<br>
<hr color="blue" style="width:65%" size="6">
<!-- Demo Game-->
<h2>Demo "If and Then" Game &#127918 </h2>
<p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> Here is the mini demo "If and Then" game</p>
<div class="imgBox2" align="center">
    <img src="pic/ifthengame.png">
</div>
<p align="center" style="font-size:17px;"> <b><u> Instructions </u></b></p>
<p align="center"> <b> Click on the if statement on the left then click on corresponding then statement on the right. </b></p>
<p align="center"> <b> Refresh the page for new game. </b></p>
<p align="center"> <b> If you receive a "TRUE" in the "Action" box, means you got a correct answer and vice versa. </b></p>
<p align="center"> <b> If you scored 4, you won!. </b></p>
<p align="center"> <b> Note: this game is avaible on PC only. </b></p>
<br>
<center>
    <a class="button1" onclick="location.href = 'ifthengame.php'"><span> Play &#127918 </span></a>
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
        <input type="hidden" name="activity_id" value="5">
        <textarea name="message"></textarea><br>
        <button type="submit" name="commentSubmit">Post</button>		
    </form>
    <?php
    include_once 'commentFunction.php';
    if (include 'DBConnect.php') {
        $sql = "SELECT * FROM `comments` WHERE activity_id = 5";
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
    <br>
    </body>
    </html>