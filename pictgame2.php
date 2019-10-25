<html>
    <head>
        <meta charset="utf-8">
        <title> Pictures Game</title>
        <link rel="stylesheet" href="css/styleBG.css" />
        <link rel="stylesheet" href="css/styleButton.css" />
    </head>
    <body>
        <h1> Spot the differences </h1>
        <a href="picactivity.php">
            <img src="pic/back_button.png" alt="puzzle activity" style="width:150px;height:90px;" title="Go back Pictures Game details page">
        </a>
        <div class="display-container" align="center">
            <img class="mySlides" src="images/pictdiff1.jpg" style="width:50%" border="5">
            <img class="mySlides" src="images/pictdiff2.jpg" style="width:23%" border="5">
            <img class="mySlides" src="images/pictdiff3.jpg" style="width:40%" border="5">

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
        <br>
        <br>
    <center>
        <a class="button" onclick="location.href = 'pictgame2res.php'"><span> See results </span></a>
    </center>
</body>
</html>