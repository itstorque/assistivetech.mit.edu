let scrollOffset = 10

window.onscroll = function (e) {

    let x = document.getElementById("topNav");

    let box1 = document.getElementById("box1");

    let box2 = document.getElementById("box2");

    let seperator = document.getElementById("slash");

    let mainTitle = document.getElementById("mainTitle");

    if (window.scrollY > scrollOffset && x.classList.contains("scrolled")) {

      x.classList.remove("scrolled");

      box1.classList.add("boxCompressed");

      box2.classList.add("boxCompressed");

      seperator.style.width = "0px";

      seperator.style.margin = "-4px";

      mainTitle.classList.add("showTitle");

    } else if (window.scrollY < scrollOffset && !(x.classList.contains("scrolled"))) {

      x.classList.add("scrolled");

      mainTitle.classList.remove("showTitle");

      box1.classList.remove("boxCompressed");

      box2.classList.remove("boxCompressed");

      seperator.style.width = "auto";

      seperator.style.margin = "10px";

    }

};

$(document).ready(function() {

  $( ".button" ).click(function() {

    if (this.classList.contains("ignore") == false) {

      $([document.documentElement, document.body]).animate({

          scrollTop: $("#"+this.id+"Section").offset().top - 84

      }, 800);

    }

  });

    $( ".buttonAlt" ).click(function() {

      if (this.classList.contains("ignore") == false) {

        $([document.documentElement, document.body]).animate({

            scrollTop: $("#"+this.id+"Section").offset().top - 84

        }, 800);

      }

    });

      $( "#closeVideo" ).click(function() {

        $("#openVideo").html("Back to Video")

        $("#videoBox").attr("id","hiddenVideo");

      });

        $( "#openVideo" ).click(function() {

          console.log("SSS")

          $("#hiddenVideo").attr("id","videoBox");

        });

    var ml4 = {};
    ml4.opacityIn = [0,1];
    ml4.scaleIn = [0.2, 1];
    ml4.scaleOut = 2.5;
    ml4.durationIn = 800;
    ml4.durationOut = 600;
    ml4.delay = 600;

    anime.timeline({loop: true})
      .add({
        targets: '.ml4 .letters-1',
        opacity: ml4.opacityIn,
        scale: ml4.scaleIn,
        duration: ml4.durationIn
      }).add({
        targets: '.ml4 .letters-1',
        opacity: 0,
        scale: ml4.scaleOut,
        duration: ml4.durationOut,
        easing: "easeInExpo",
        delay: ml4.delay
      }).add({
        targets: '.ml4 .letters-2',
        opacity: ml4.opacityIn,
        scale: ml4.scaleIn,
        duration: ml4.durationIn
      }).add({
        targets: '.ml4 .letters-2',
        opacity: 0,
        scale: ml4.scaleOut,
        duration: ml4.durationOut,
        easing: "easeInExpo",
        delay: ml4.delay
      }).add({
        targets: '.ml4 .letters-3',
        opacity: ml4.opacityIn,
        scale: ml4.scaleIn,
        duration: ml4.durationIn
      }).add({
        targets: '.ml4 .letters-3',
        opacity: 0,
        scale: ml4.scaleOut,
        duration: ml4.durationOut,
        easing: "easeInExpo",
        delay: ml4.delay
      }).add({
        targets: '.ml4',
        opacity: 0,
        duration: 500,
        delay: 500
      });

    /*setInterval(function() {

      let x = document.getElementById('sponsorContainer');

      var a = x.innerHTML.split("\n");

      a.splice(0, 0, a.pop());

      x.innerHTML = a.join('\n');

    }, 1000);*/

});

(function() {
  // Init
  var container = document.getElementById("perspective"),
    inner = document.getElementById("inner"),
    helper = document.getElementById("helper");

  console.log(container);

  // Mouse
  var mouse = {
    _x: 0,
    _y: 0,
    x: 0,
    y: 0,
    updatePosition: function(event) {
      var e = event || window.event;
      this.x = e.clientX - this._x;
      this.y = (e.clientY - this._y) * -1;
    },
    setOrigin: function(e) {
      this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
      this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
    },
    show: function() {
      return "(" + this.x + ", " + this.y + ")";
    }
  };

  // Track the mouse position relative to the center of the container.
  mouse.setOrigin(container);

  //--------------------------------------------------

  var counter = 0;
  var updateRate = 1;
  var isTimeToUpdate = function() {
    return counter++ % updateRate === 0;
  };

  //--------------------------------------------------

  var onMouseEnterHandler = function(event) {
    helper.className = "";
    update(event);
  };

  var onMouseLeaveHandler = function() {
    inner.style = "";
    helper.className = "hidden";
  };

  var onMouseMoveHandler = function(event) {
    if (isTimeToUpdate()) {
      update(event);
    }
    displayMousePositionHelper(event);
  };

  //--------------------------------------------------

  var update = function(event) {
    mouse.updatePosition(event);
  };

  var displayMousePositionHelper = function(event) {
    var e = event || window.event;
    helper.innerHTML = mouse.show();
    helper.style = "top:"+(e.clientY-container.offsetTop)+"px;"
                 + "left:"+(e.clientX-container.offsetLeft)+"px;";
  };

  //--------------------------------------------------

  container.onmouseenter = onMouseEnterHandler;
  container.onmouseleave = onMouseLeaveHandler;
  container.onmousemove = onMouseMoveHandler;
})();
