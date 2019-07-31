home_text_items = ["home-mission", "home-video", "home-athack-what", "home-athack-when", "home-athack-signup", "home-sponsors"];

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
      fillAllFields(home_text_items)
      $('#form').addClass('warning')
      closeAllAccordions()
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

    text_items = home_text_items;

  }

  for (var i = 0; i < text_items.length; i++) {

    item_id = text_items[i];

    content = web_content[item_id];

    if (typeof content == "string") {

      content = content.replace("|", "\n\n");

    }

    if ($("#"+item_id).prop("tagName") == "DIV") {

      if (typeof web_content["home-sponsors"] == "string") {

        web_content["home-sponsors"] = web_content["home-sponsors"].split(",")

      }

      $("#"+item_id).dropdown("set exactly", web_content["home-sponsors"]);

    } else {

      $("#"+item_id).val(content);

    }

  }

}
