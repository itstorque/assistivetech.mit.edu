home_text_items = ["home-mission", "home-video", "home-athack-what", "home-athack-when", "home-athack-signup", "home-sponsors"];
event_text_items = ["events-desc",
                    "event-1-date", "event-1-time", "event-1-title", "event-1-location",
                    "event-2-date", "event-2-time", "event-2-title", "event-2-location",
                    "event-3-date", "event-3-time", "event-3-title", "event-3-location"];

$('.ui.accordion')
  .accordion()
;

$('.ui.dropdown')
  .dropdown()
;

$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;

$(document).ready(function(){

  fillAllFields()

  $('#updateHome').click(function () {
      $('#form').addClass('loading');
      updateHomeContent();
      write();
  });

  $('#clearHome').click(function () {
      fillAllFields(home_text_items);
      $('#form').addClass('warning');
      closeAllAccordions();
  });

  $('#updateEvents').click(function () {
      $('#form').addClass('loading');
      updateEventsContent();
      write();
  });

  $('#clearEvents').click(function () {
      fillAllFields(event_text_items);
      $('#form').addClass('warning');
      closeAllAccordions();
  });

});

function updateHomeContent() {

  for (var i = 0; i < home_text_items.length; i++) {

    item_id = home_text_items[i];

    if ($("#"+item_id).prop("tagName") == "DIV") {

      content = $("#"+item_id).dropdown('get value');

    } else {

      content = $("#"+item_id).val();

    }

    // FIXME: Remove Multiple newlines and |

    content = content.replace("\n\n", "|");

    web_content[item_id] = content;

  }

}

function updateEventsContent() {

  for (var i = 0; i < event_text_items.length; i++) {

    item_id = event_text_items[i];

    console.log(item_id)

    content = $("#"+item_id).val();

    // FIXME: Remove Multiple newlines and |

    content = content.replace("\n\n", "<br>");

    web_content[item_id] = content;

  }

}

function write() {

  parsed_content = JSON.stringify(web_content)

  $.post("/helpers/writeJSON.php", {"file": 'content.json',"json_data": parsed_content}, function() {

    $('#form').addClass('success')

    closeAllAccordions()

  })
    .done(function() {

      $('#form').removeClass('loading')

    })
    .fail(function() {

      $('#form').addClass('error')
      closeAllAccordions()

    })

}

function closeAllAccordions() {

  $('.ui.accordion')
    .accordion("close")
  ;

}

function fillAllFields(text_items) {

  if (text_items==undefined){

    text_items = home_text_items.concat(event_text_items);

  }

  for (var i = 0; i < text_items.length; i++) {

    item_id = text_items[i];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    if ($("#"+item_id).prop("tagName") == "DIV") {

      $("#"+item_id).dropdown("set exactly", web_content["home-sponsors"]);

    } else {

      $("#"+item_id).val(content);

    }

  }

}
