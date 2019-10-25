﻿<!DOCTYPE html>
<html>

    <head>
        <title>Demo Puzzle Game</title>
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/image-puzzle.css" rel="stylesheet" />
        <script src="js/image-puzzle.js"></script>
    </head>

    <body>
          <a href="puzzleactivity.php">
            <img src="pic/back_button.png" alt="puzzle activity" style="width:150px;height:90px;" title="Go back Puzzle Game details page">
        </a>
        <div id="collage">
            <h1 align=center><font size='40' face='Comic Sans MS' color='green'>Demo Sliding Puzzle Game</font></h1>
            <hr />
            <div id="playPanel" style="padding:5px;display:none;">
                <h3 id="imgTitle"></h3>
                <hr />
                <div style="display:inline-block; margin:auto; width:95%; vertical-align:top;">
                    <ul id="sortable" class="sortable"></ul>
                    <div id="actualImageBox">
                        <div id="timeBox">
                            Time Taken: <span id="timerPanel"></span> secs
                        </div>
                        <img id="actualImage" />
                        <div>Re-arrange to create a picture like this.</div>
                        <p id="levelPanel">
                            <input type="radio" name="level" id="easy" checked="checked" value="3" onchange="imagePuzzle.startGame(images, this.value);"
                                   /> <label for="easy">Easy</label>
                            <input type="radio" name="level" id="medium" value="4" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="medium">Medium</label>
                            <input type="radio" name="level" id="hard" value="5" onchange="imagePuzzle.startGame(images, this.value);" />                        <label for="hard">Hard</label>
                        </p>
                        <div>
                            <button id="newPhoto" type="button" class="btn" onclick="restart();">Another Photo</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="gameOver" style="display:none;">
                <div style="background-color: #fc9e9e; padding: 5px 10px 20px 10px; text-align: center; ">
                    <h2 style="text-align:center">Good Job!!!</h2>
                    Congratulations!! <br /> You have completed this picture.
                    <!-- <br /> Steps: <span class="stepCount">0</span> steps. -->
                    <br /> Time Taken: <span class="timeCount">0</span> seconds<br />
                    <div>
                        <button type="button" onclick="window.location.reload(true);">Play Again</button>
                    </div>
                </div>
            </div>

            <script>
                var images = [
                    {src: 'images/pic3.jpg', title: 'Snow Fox'},
                    {src: 'images/drcat.jpg', title: 'Dr Cat'},
                    {src: 'images/london-bridge.jpg', title: 'London Bridge'},
                    {src: 'images/teddy.jpg', title: 'Teddy Bear'},
                    {src: 'images/bugatti.jpg', title: 'Super Car'}
                ];

                window.onload = function () {
                    var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                    imagePuzzle.startGame(images, gridSize);
                };
                function restart() {
                    var gridSize = document.querySelector('#levelPanel input[type="radio"]:checked').getAttribute('value');
                    imagePuzzle.startGame(images, gridSize);
                }
            </script>
        </div>
    </body>
</html>