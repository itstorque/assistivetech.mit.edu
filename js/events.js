text_items = ["events-desc",
              "event-1-date", "event-1-time", "event-1-title", "event-1-location",
              "event-2-date", "event-2-time", "event-2-title", "event-2-location",
              "event-3-date", "event-3-time", "event-3-title", "event-3-location"];

$(document).ready(function() {

  loadContent()

});

function loadContent() {

  for (var i = 0; i < text_items.length; i++) {

    item_id = text_items[i];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    $("#"+item_id).html(content);

  }

}
