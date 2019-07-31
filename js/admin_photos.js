toDelete = "";

function deleteImage(image_src) {

  toDelete = image_src;

  $("#surePhotoLabel").text(image_src);

  $("#areYouSureDelete").modal('show');

}

function confirmDelete() {

  // When you delete a file, it is moved to the /trash directory,
  // to avoid losing data... The scheduler will get rid of it after
  // 1-2 days.

  $('#form').addClass('loading')

  $.post("/helpers/deleteFile.php", {"src": toDelete}, function() {

    $('#form').addClass('success')

  })
    .done(function() {
      $('#form').removeClass('loading')
      location.reload();
    })
    .fail(function() {
      $('#form').removeClass('loading')
      $('#form').addClass('error')
    })

}
