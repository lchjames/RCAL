<?php
include_once 'topbar.php';
?>
<html>
    <head>
        <title> About Us </title>
        <link rel="stylesheet" href="css/styleAbout.css">
    </head>
    <body>
        <h1>About Us</h1>
        <div class="container">
            <div id="splitlayout" class="splitlayout">
                <div class="intro">
                    <div class="side side-left">
                        <div class="intro-content">
                            <div class="profile"><img src="pic/client.png" alt="profile1"></div>
                            <br><br>
                            <h1><span>Project <br> Client </span></h1>
                        </div>
                    </div>
                    <div class="side side-right">
                        <div class="intro-content">
                            <div class="profile"><img src="pic/developer.png" alt="profile2"></div>
                            <br><br>
                            <h1><span>Development <br> Team</span></h1>
                        </div>
                    </div>
                </div>

                <div class="page page-right">
                    <div class="page-inner">
                        <section>
                            <h2 align="center">Development Team</h2>
                            <div class="image" align="center">
                                <img src="pic/rcal.png" style="width:300px;height:150px;" title="RCAL Team logo">
                                </a>
                            </div>
                            <br></br>
                            <div class="container" align="center">
                                <div class="card">
                                    <div class="imgBox">
                                        <img src="pic/James.png" style="width:300px;height:380px">
                                    </div>
                                    <div class="details">
                                        <h2> James Lau </h2>
                                        <br>
                                        <br>
                                        <br>
                                        <p> Occupation: Project Leader & Developer </p>
                                        <br>
                                        <p> Email: chenghin.lau@connect.qut.edu.au </p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="imgBox">
                                        <img src="pic/drmike.png" style="width:300px;height:380px">
                                    </div>
                                    <div class="details">
                                        <h2> Mike Zhang </h2>
                                        <br>
                                        <br>
                                        <br>
                                        <p> Occupation: Researcher of people content and technology </p>
                                        <br>
                                        <p> Email: ruoxuan.zhang@connect.qut.edu.au </p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="imgBox">
                                        <img src="pic/Dom.png" style="width:300px;height:380px">
                                    </div>
                                    <div class="details">
                                        <h2> Domonic Graham </h2>
                                        <br>
                                        <br>
                                        <br>
                                        <p> Occupation: Developer </p>
                                        <br>
                                        <p> Email: aceofknives@hotmail.com </p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="imgBox">
                                        <img src="pic/Rocky.jpg" style="width:300px;height:380px">
                                    </div>
                                    <div class="details">
                                        <h2> Rocky Chen </h2>
                                        <br>
                                        <br>
                                        <br>
                                        <p> Occupation: Developer </p>
                                        <br>
                                        <p> Email: n10099077@qut.edu.au </p>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="imgBox">
                                        <img src="pic/Anh.png" style="width:300px;height:380px">
                                    </div>
                                    <div class="details">
                                        <h2> Anh Tran </h2>
                                        <br>
                                        <br>
                                        <br>
                                        <p> Occupation: Project Analyst & Interface developer </p>
                                        <br>
                                        <p> Email: quangtuananh.tran<br>@connect.qut.edu.au </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="page page-left">
                    <div class="page-inner">
                        <section>
                            <h2 align="center">Project sponsors and collaborators</h2>
                            <p align="center" style="font-size:23px; color:0036B7;"> <b> Special Thanks To: </b></p>
                            <br></br>
                            <br></br>
                            <p align="center"><img src="pic/qut.jpg"></p>
                            <br></br>
                            <br></br>
                            <br></br>
                            <br></br>
                            <p align="center" style="font-size:20px; color:0036B7;"> <b> Queensland University of Technology </b></p>
                            <br></br>
                            <br></br>
                            <h2 align="center">Project client</h2>	
                            <p align="center"><img src="pic/Joseph.jpg"></p>
                            <br></br>
                            <br></br>
                            <br></br>
                            <p align="center"> <b>Joseph Soalheira </b></p>
                            <br></br>
                            <p align="center"> <b> Contact Email: j.soalheira@connect.qut.edu.au </b></p>
                        </section>
                    </div>
                </div>
                <img href="#" class="back back-right" title="back to intro" src="pic/nextbut.png">
                <img href="#" class="back back-left" title="back to intro" src="pic/prevbut.png">
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".side-left .intro-content").click(function () {
                    $(".splitlayout").addClass("open-left");
                    $(".splitlayout").removeClass("close-right reset-layout");
                    $(".side-right .intro-content").addClass("lhidden");
                });

                $(".back-right").click(function () {
                    $(".splitlayout").removeClass("open-left");
                    $(".splitlayout").addClass("close-left reset-layout");
                    $(".side-right .intro-content").removeClass("lhidden");
                });

                $(".side-right .intro-content").click(function () {
                    $(".splitlayout").addClass("open-right");
                    $(".splitlayout").removeClass("close-left reset-layout");
                    $(".side-left .intro-content").addClass("lhidden");
                });

                $(".back-left").click(function () {
                    $(".splitlayout").removeClass("open-right");
                    $(".splitlayout").addClass("close-right reset-layout");
                    $(".side-left .intro-content").removeClass("lhidden");
                });
            });
        </script>
    </body>
</html>