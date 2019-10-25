<!DOCTYPE html>
<html>
    <head>
        <title>Box Control</title>
        <script src="js/control.js"></script> 
        <script src="js/script.js"></script>
        <link rel="stylesheet" type="text/css" href="css/styleBut4.css"/>
        <style>
            body .header .header2 {
                left: 70%;
                top: 70%;
                position: relative;
            }
            body .header .controlPanel
            {
                left: 30%;
                top: 10%;
                position: relative;
            }
            .header input {
                width:40px;
                text-align:center;
            }
            #target {
                position:absolute;
                z-index:998;
                width:100px;
                height:100px;
                left:50vw;
                margin-left:-50px;
                top:50vh;
                margin-top:-50px;
                background-color:red;
                border:1px solid black;
                transition:0.2s all ease-out;
                -webkit-transition:0.2s all ease-out;
            }
            #controlPanel {
                background-color:white;
                padding:5px;
                position:absolute;
                z-index:999;
                top:10px;
                right:10px;
                width:100px;
                border:3px solid grey;         
            }
            #controlPanel div {
                margin:5px 0;
                text-align:center;
            }
            #controlPanel > button:first-of-type {
                margin:auto;
                display:block;
            }
            #controlPanel > button:last-of-type {
                margin:auto;
                display:block;
            }
        </style>
    </head>
    <body>
        <h1 align=center><font size='40' face='Comic Sans MS' color='green'>Demo Box Control</font></h1>
        <img onclick="location.href = 'puzzleactivity.php'" src="pic/back_button.png" alt="puzzle activity" style="width:150px;height:90px;" title="Go back Puzzle Game details page">
        <br></br>
        <br></br>
        <br></br>
        <div class="header">
            <div class="header2">
                <span>Value in pixels: </span>
                <input value="10" id="value">
            </div>
            <div id="controlPanel">
                <button type="button">Up</button>
                <div>
                    <button type="button">Left</button>
                    <button type="button">Right</button>
                </div>
                <button type="button">Down</button>
            </div>
        </div>
        <div id="target"/>
    </div>
</body>
</html>