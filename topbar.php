<!DOCTYPE php>
<?php
include_once 'user_register_login.php';
?>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/styleBG.css"/>
    </head>
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
    <body>
        <?php
        echo "<div class=\"topnav\" id=\"myTopnav\">";
        if (basename($_SERVER['PHP_SELF']) == "index.php") {
            echo "<a class=\"active\" href=\"index.php\">Home</a>";
        } else {
            echo "<a href=\"index.php\">Home</a>";
        }

        if (basename($_SERVER['PHP_SELF']) == "about.php") {
            echo "<a class=\"active\" href=\"about.php\">About</a>";
        } else {
            echo "<a href=\"about.php\">About</a>";
        }

        if (basename($_SERVER['PHP_SELF']) == "activity.php") {
            echo "<a class=\"active\" href=\"activity.php\">Activity</a>";
        } else {
            echo "<a href=\"activity.php\">Activity</a>";
        }

        if (basename($_SERVER['PHP_SELF']) == "submit.php") {
            echo "<a class=\"active\" href=\"submit.php\">Submit Activity</a>";
        } else {
            echo "<a href=\"submit.php\">Submit Activity</a>";
        }

        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            if ($_SESSION["usertype"] == "admin") {
                if (basename($_SERVER['PHP_SELF']) == "adminActivity.php") {
                    echo "<a class=\"active\" href=\"adminActivity.php\">Admin Panel</a>";
                } else {
                    echo "<a href=\"adminActivity.php\">Admin Panel</a>";
                }
            }
            echo "<a class=\"logout\" href=\"logout.php\">Logout</a>";
            echo "<b><a href=\"userDataPage.php\" class=\"username\">Welcome, " . $_SESSION["username"] . "</a></b>";
        } else {
            if (basename($_SERVER['PHP_SELF']) == "login.php") {
                echo "<a class=\"active\" href=\"login.php\">Login/Sign up</a>";
            } else {
                echo "<a href=\"login.php\">Login/Sign up</a>";
            }
        }

        echo "<a href=\"javascript:void(0);\" class=\"icon\" onclick=\"myFunction()\">";
        echo "<i class=\"fa fa-bars\"></i>";
        echo "</a>";
        echo "</div>";
        ?>
    </body>
</html>


