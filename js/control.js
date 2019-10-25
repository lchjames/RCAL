function Target() {
    var el = document.getElementById("target");
    this.Up      = function(value,p) {
        el.style.top = this.getProperty(p)  - value + "px";
    };
    this.Right   = function(value,p) {
        el.style.left = this.getProperty(p) + value + "px";
    };
    this.Left    = function(value,p) {
        el.style.left = this.getProperty(p) - value + "px";
    }; 
    this.Down    = function(value,p) {
        el.style.top = this.getProperty(p)  + value + "px";
    };
    this.getProperty = function(property) {2
        var val = window.getComputedStyle(el).getPropertyValue(property);
        return  parseInt(val.replace(/[^\d.-]/g, ''));
    }
}