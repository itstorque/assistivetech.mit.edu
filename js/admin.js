function pull() {

  pullButtons = document.getElementsByClassName('pull')

  loading(pullButtons, true)

  $.ajax({
      url : '/helpers/gitStat.php'
  }).done(function(data) {

    if (data=="") {

      $("#alreadyUpToDateMessage").removeClass('hidden')

      loading(pullButtons, false);

      return

    } else {

      $.ajax({
          url : '/helpers/gitPull.php'
      }).done(function(data) {
          console.log(data)
          loading(pullButtons, false);
          $("#updated").removeClass('hidden')
          checkStatus()
      });

    }

  });

}

function initPull() {

  $('.ui.basic.modal')
    .modal('show')
  ;

}

function checkStatus() {

  checkStatusButtons = document.getElementsByClassName('checkStatus')

  loading(checkStatusButtons, true)

  $.ajax({
      url : '/helpers/gitStat.php'
  }).done(function(data) {

      if (data=='') {

        document.getElementById('statusLabel').classList = "ui header isUpToDate"

      } else {

        document.getElementById('statusLabel').classList = "ui header isNotUpToDate"

      }

      loading(checkStatusButtons, false);

      return (data=='')

  });

}

function loading(items, show) {

  if (show) {

    for (i = 0, len = items.length; i < len; i++) {

        items[i].classList.add("loading")

    }

  } else {

    for (i = 0, len = items.length; i < len; i++) {

        items[i].classList.remove("loading")

    }

  }

}

$('.message .close')
  .on('click', function() {
    $(this)
      .closest('.message')
      .transition('fade')
    ;
  })
;
