function logoClick() {
    var x = document.getElementById("topNav");
    var y = document.getElementById("menuBarButton");
    if (x.className.includes(" responsive")) {
        x.className = x.className.replace(" responsive", "");
        y.className = y.className.replace(" on", "");
    } else {
        x.className += " responsive";
        y.className += " on"
    }
}
