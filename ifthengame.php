<html>
    <head>
        <title>If and then</title>
        <link rel="stylesheet" href="css/styleBG.css" />
        <style>
            .thing {position:absolute;left: 0px; top: 0px; border: 2px; border-style: double; background-color: white; margin: 5px; padding: 5px; }

            #congrat {position:absolute; visibility:hidden; z-index: 0; }

        </style>
        <script type="text/javascript">
            var facts = [
                ["If James gives Rocky 2 apples,", "then Rocky will earn 2 apples", false],
                ["If Domonic is hungry,", "then he will get some food", false],
                ["If Mike is sleepy,", "then he will fell asleep and skip the class", false],
                ["If Rocky does not wear jacket,", "he will feel cold", false],
                ["If Anh has 2 biscuits and Domonic gives him 3 more biscuits,", "then he will have 5 biscuits", false],
                ["If Anh wants to travel overseas,", "then he will have to buy air tickets", false],
                ["If Mike plays games till late at night,", "then he will be overslept next morning", false],
                ["If James fed up,", "then he will be angry", false],
                ["If James left the group meeting of 5,", "then there will be only 4 people left", false],
                ["If Rocky needs some income,", "then he will find a job", false],
                ["If Domonic is tired,", "then he will lie down on the chair and have a rest", false],
                ["If Mike has a girlfriend,", "then he will no longer feel lonely", false],
                ["If James goes to the gym everyday,", "then he will be fit", false],
                ["If Mike has not eaten any food,", "then he will be hungry", false],
                ["If Rocky lives near James,", "then he can walk to James place", false],
                ["If Anh learns Chinese,", "then he will able to know some Chinese", false]
            ];

            var thingelem;
            var nq = 4;  //number of questions asked in a game
            var elementinmotion;
            var makingmove = false;
            var inbetween = 600;
            var col1 = 100;
            var row1 = 200;
            var rowsize = 50;
            var slots = new Array(nq);



            function init() {
                setupgame();
            }

            function setupgame() {
                var i;
                var c;
                var s;
                var mx = col1;
                var my = row1;
                var d;
                var uniqueid;
                // mark all faces as not being used.
                for (i = 0; i < facts.length; i++) {
                    facts[i][2] = false;
                }
                for (i = 0; i < nq; i++) {
                    slots[i] = -100;
                }
                for (i = 0; i < nq; i++) {
                    do {
                        c = Math.floor(Math.random() * facts.length);
                    } while (facts[c][2] == true)
                    facts[c][2] = true;
                    uniqueid = "c" + String(c);
                    d = document.createElement('country');
                    d.innerHTML = (
                            "<div class='thing' id='" + uniqueid + "'>placeholder</div>");
                    document.body.appendChild(d);
                    thingelem = document.getElementById(uniqueid);
                    thingelem.textContent = facts[c][0];
                    thingelem.style.top = String(my) + "px";
                    thingelem.style.left = String(mx) + "px";
                    thingelem.addEventListener('click', pickelement, false);
                    uniqueid = "p" + String(c);
                    d = document.createElement('cap');
                    d.innerHTML = (
                            "<div class='thing' id='" + uniqueid + "'>placeholder</div>");
                    document.body.appendChild(d);
                    thingelem = document.getElementById(uniqueid);
                    thingelem.textContent = facts[c][1];
                    // put this thing in random choice from empty slots
                    do {
                        s = Math.floor(Math.random() * nq);
                    } while (slots[s] >= 0)
                    slots[s] = c;
                    thingelem.style.top = String(row1 + s * rowsize) + "px";
                    thingelem.style.left = String(col1 + inbetween) + "px";
                    thingelem.addEventListener('click', pickelement, false);
                    my += rowsize;
                }
                document.f.score.value = "0";
                return false;
            }

            function pickelement(ev) {
                var thisx;
                var thisxn;
                var sc;
                if (makingmove) {
                    if (this == elementinmotion) {
                        elementinmotion.style.backgroundColor = "white";
                        makingmove = false;
                        return;
                    }
                    thisx = this.style.left;
                    thisx = thisx.substring(0, thisx.length - 2);  //remove the px
                    thisxn = Number(thisx) + 115;
                    elementinmotion.style.left = String(thisxn) + "px";
                    elementinmotion.style.top = this.style.top;
                    makingmove = false;
                    if (this.id.substring(1) == elementinmotion.id.substring(1)) {
                        elementinmotion.style.backgroundColor = "gold";
                        this.style.backgroundColor = "gold";
                        document.f.out.value = "TRUE";
                        sc = 1 + Number(document.f.score.value);
                        document.f.score.value = String(sc);
                        if (sc == nq) {
                            v = document.getElementById("congrat");
                            v.style.visibility = "visible";
                            v.style.zIndex = "10000";
                            v.play();
                        }
                    } else {
                        document.f.out.value = "FALSE";
                        elementinmotion.style.backgroundColor = "white";
                    }
                } else {
                    makingmove = true;
                    elementinmotion = this;
                    elementinmotion.style.backgroundColor = "tan";
                }
            }


        </script>
    </head>
    <body onLoad="init();">  
        <h1>If...Then Game </h1><br/>
        <a href="ifthenact.php">
            <img src="pic/back_button.png" alt="ifthen activity" style="width:150px;height:90px;" title="Go back to Game details page">
        </a>
        <img id="congrat" src="images/congrats.png">
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <br></br>
        <form name="f" >
            Action: <input name="out" type="text" value=""/>
            Score: <input name="score" type="text" value="0"/>
        </form>
    </p>
</body>
</html>