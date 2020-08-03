text_items = ["home-mission", "home-video", "home-athack-what", "home-athack-when", "home-athack-signup", "home-sponsors"];

loadedContent = false

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

    $("#hiddenVideo").attr("id","videoBox");

  });

  // console.log(text_items.length)

  loadContent();

});

function loadContent() {

  if (loadedContent) { return }

  loadedContent = true

  for (var j = 0; j < text_items.length; j++) {

    item_id = text_items[j];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    if (item_id == "home-sponsors") {

      content = content.split(",");

      sponsor_logos = "";

      for (var i=0; i < content.length; i++) {

        image_data = content[i];

        class_name = "sponsor";

        is_golden = image_data.substring(0, 7)=="golden_";

        if (is_golden) {
          image_data = image_data.substring(7);
          class_name += " golden";
        }

        image_url = "resources/sponsors/"+image_data+".jpg";

        image_tag = "<img src="+image_url+" class='" + class_name + "'>";

        if (is_golden) {
          sponsor_logos = image_tag + sponsor_logos;
        } else {
          sponsor_logos += image_tag;
        }

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
