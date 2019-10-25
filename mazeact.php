<?php
include_once 'topbar.php';
include_once 'getActivity.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title> The Logic Maze</title>
        <link rel="stylesheet" href="css/styleCard.css" />
        <link rel="stylesheet" href="css/commentcss.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
        <link rel="stylesheet" href="css/styleImgbox.css" />
    </head>
    <body>
        <h1> The Logic Maze </h1>
        <p align="center"><img src="pic/mazeicon.png" style="width:90px;height:90px;"></p>
        <p align="center"; style="font-size:20px; color:0036B7; font-family:Comic Sans MS;"> This exercise uses association,repetition 
            and familiarisation to teach the how to identify and navigate logic gates(except for the “or” type logic gate) in addition to 
            reinforcing teamwork practices. 
        </p>
    <center>
        <div class="card-container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <p align="center" style="font-family:Comic Sans MS;"><b><u>For ages 15 and over</u></b></p>
                        <p align="center" style="font-family:Comic Sans MS;">Category: Technology, Math</p>
                        <p align="center" style="font-family:Comic Sans MS;">Rate: 3</p>
                        <p align="center" style="font-family:Comic Sans MS;">Difficulty: 4</p>
                    </div>
                </div>
                <div class="face face2">
                    <h2>Info</h2>
                </div>
            </div>
        </div>
    </center>
    <div class="display-container" align="center">
        <img class="mySlides" src="pic/maze1.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/maze2.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/maze3.jpg" style="width:40%" border="5">
        <img class="mySlides" src="pic/maze4.jpg" style="width:40%" border="5">

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
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> A team work maze that uses logic gates puzzles on gates 
        to allow the players to continue in the maze(note the gates literally have the symbol of the logic gate it represents on them).
    </p>
    </br>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> The gate will be locked behind switches that act as the 
        input on a logic gate, teams will decipher clues within the gate’s room to solve the puzzle and continue with the maze. clues 
        will be thing like a diagram or maybe the name of the logic type.
    </p>
    <!-- Demo Video-->
    <h2>Demonstration Video</h2>
    <p align="center" style="font-size:17px; color:black; font-family:Comic Sans MS;"> For more and more specific details about the activity, 
        please download the PDF file with the link below.
    </p>
    <div class="imgBox" align="center">
        <a href="pdf/LogicMaze.pdf" target="_blank">
            <img src="pic/pdf.png" style="width:300px;height:150px;" title="Download the PDF file">
        </a>
    </div>
    <br>
    <!--Comment part Start-->
    <center>
        <h1>Leave your comments and feedbacks to us!</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" autocomplete="off">
        <?php echo "<input type=\"hidden\" name=\"user_id\" value=" . $_SESSION["userid"] . ">" ?>
            <input type="hidden" name="activity_id" value="6">
            <textarea name="message"></textarea><br>
            <button type="submit" name="commentSubmit">Post</button>		
        </form>
        <?php
        include_once 'commentFunction.php';
        if (include 'DBConnect.php') {
            $sql = "SELECT * FROM `comments` WHERE activity_id = 6";
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