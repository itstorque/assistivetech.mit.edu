var fileExtentionRange = '.jpg';
var MAX_SIZE = 30; // MB

$(document).on('change', '.btn-file :file', function() {
    var input = $(this);

    if (navigator.appVersion.indexOf("MSIE") != -1) { // IE
        var label = input.val();

        input.trigger('fileselect', [ 1, label, 0 ]);
    } else {
        var label = input.get(0).files[0].name;
        var numFiles = input.get(0).files ? input.get(0).files.length : 1;
        var size = input.get(0).files[0].size;

        for (var i=1; i < input.get(0).files.length; i++) {

          label += ", " + input.get(0).files[i].name;

        }

        input.trigger('fileselect', [ numFiles, label, size ]);
    }
});

$('.btn-file :file').on('fileselect', function(event, numFiles, label, size) {

    id = event.target.id

    $('#'+id).attr('name', id); // allow upload.

    var postfix = label.substr(label.lastIndexOf('.'));
    if (fileExtentionRange.indexOf(postfix.toLowerCase()) > -1) {
        if (size > 1024 * 1024 * MAX_SIZE ) {
            alert('max size：<strong>' + MAX_SIZE + '</strong> MB.');

            $('#'+id).removeAttr('name'); // cancel upload file.
        } else {
            $('#_'+id).val(label);
        }
    } else {
        alert('file type：<br/> <strong>' + fileExtentionRange + '</strong>');

        $('#'+id).removeAttr('name'); // cancel upload file.
    }
});
