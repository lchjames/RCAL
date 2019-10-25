<html>
    <head>
        <title>Spot the strange points</title>
        <link rel="stylesheet" type="text/css" href="css/stylePict.css"/>
        <link rel="stylesheet" type="text/css" href="css/styleButton.css"/>
    </head>
    <body>
        <a href="picactivity.php">
            <img src="pic/back_button.png" alt="puzzle activity" style="width:150px;height:90px;" title="Go back Pictures Game details page">
        </a>
        <section>
            <div class="focus"></div>
        </section>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script type="text/javascript">
            $(document).mousemove(function (e) {
                var X = e.pageX;
                var Y = e.pageY;
                $('.focus').css('background', 'radial-gradient(circle at ' + X + 'px ' + Y + 'px, transparent, #000 20%)')
            })
        </script>
    <center>
        <a class="button" onclick="location.href = 'pictgame1res.php'"><span> See results </span></a>
    </center>
</body>
</html>
