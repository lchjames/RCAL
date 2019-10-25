(function(){
    window.addEventListener("load",loadEvents);
    var target;
    function loadEvents() {
        target = new Target();
        var el = document.getElementsByTagName("button");
        for(var i = 0; i < el.length; i++) {
            el[i].addEventListener('mousedown', moveTarget);
        }
    }
    function moveTarget(el) {
        var value =  parseInt(document.getElementById("value").value || 10);
        var elValue = this.innerHTML;
        if(elValue == "Up") {
            target.Up(value,"top");
        } else if (elValue == "Right")  {
            target.Right(value,"left");
        } else if (elValue == "Left")   {
            target.Left(value,"left");
        } else if (elValue == "Down" )  {
            target.Down(value,"top");
        }
    }
})();