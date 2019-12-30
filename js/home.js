text_items = ["home-mission", "home-video", "home-athack-what", "home-athack-when", "home-athack-signup", "home-sponsors"];

$(document).ready(function() {

  loadContent()

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

    // var ml4 = {};
    // ml4.opacityIn = [0,1];
    // ml4.scaleIn = [0.2, 1];
    // ml4.scaleOut = 2.5;
    // ml4.durationIn = 800;
    // ml4.durationOut = 600;
    // ml4.delay = 600;
    //
    // anime.timeline({loop: true})
    //   .add({
    //     targets: '.ml4 .letters-1',
    //     opacity: ml4.opacityIn,
    //     scale: ml4.scaleIn,
    //     duration: ml4.durationIn
    //   }).add({
    //     targets: '.ml4 .letters-1',
    //     opacity: 0,
    //     scale: ml4.scaleOut,
    //     duration: ml4.durationOut,
    //     easing: "easeInExpo",
    //     delay: ml4.delay
    //   }).add({
    //     targets: '.ml4 .letters-2',
    //     opacity: ml4.opacityIn,
    //     scale: ml4.scaleIn,
    //     duration: ml4.durationIn
    //   }).add({
    //     targets: '.ml4 .letters-2',
    //     opacity: 0,
    //     scale: ml4.scaleOut,
    //     duration: ml4.durationOut,
    //     easing: "easeInExpo",
    //     delay: ml4.delay
    //   }).add({
    //     targets: '.ml4 .letters-3',
    //     opacity: ml4.opacityIn,
    //     scale: ml4.scaleIn,
    //     duration: ml4.durationIn
    //   }).add({
    //     targets: '.ml4 .letters-3',
    //     opacity: 0,
    //     scale: ml4.scaleOut,
    //     duration: ml4.durationOut,
    //     easing: "easeInExpo",
    //     delay: ml4.delay
    //   }).add({
    //     targets: '.ml4',
    //     opacity: 0,
    //     duration: 500,
    //     delay: 500
    //   });

    /*setInterval(function() {

      let x = document.getElementById('home-sponsors');

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
    setOrigin: function(event) {
      var e = event || window.event;
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

function loadContent() {

  for (var i = 0; i < text_items.length; i++) {

    item_id = text_items[i];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    console.log(item_id)

    if (item_id == "home-sponsors") {

      content = content.split(",")

      sponsor_logos = ""

      for (var i=0; i < content.length; i++) {

        image_url = "resources/sponsors/"+content[i]+".jpg"

        image_tag = "<img src="+image_url+" class='sponsor'>"

        sponsor_logos += image_tag

      }

      $("#"+item_id).html(sponsor_logos);

    } else {

      content = "<p>" + content + "</p>"

      alter = "c1"

      while (content.includes("*")) {

        if (alter == "c1") { alter = "c2" } else { alter = "c1" }

        var start_pos = content.indexOf('*') + 1;
        var end_pos = content.indexOf('*',start_pos);
        var text = content.substring(start_pos,end_pos)

        content = content.replace("*"+text+"*", "<span class='ub "+alter+"'>"+text+"</span>")

      }

      while ((content.match(/|/g) || []).length == 2) {

        content = content.replace("|", "</p><p>")

      }

      $("#"+item_id).html(content);

    }

  }

}

function viewSponsors() {



}
