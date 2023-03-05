<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div class="banner" style="height: auto">

        <div class="separator thin"></div>

        <script>

        function resizeMargins() {

          width = window.innerWidth * 0.8;

          objWidth = 230;

          fits = 1

          if (width > (objWidth + 16) * 4) {

            fits = 4

          } else if (width > (objWidth + 16) * 3) {

            fits = 3

          } else if (width > (objWidth + 16) * 2) {

            fits = 2

          }

          albums = document.getElementsByClassName('thumb-album')

          pics = document.getElementsByClassName('thumb')

          margin = ((width - objWidth*fits)/(fits))/2 + "px"

          for (var i = 0; i < pics.length; i++) {

            pics[i].style.marginLeft = margin

            pics[i].style.marginRight = margin

          }

          for (var i = 0; i < albums.length; i++) {

            albums[i].style.marginLeft = margin

            albums[i].style.marginRight = margin

          }

        }

        var onresize = function() {

          resizeMargins()

        }

        var onload = function() {

          resizeMargins()

        }

        </script>

        <center>
          <div class="gallery">
              <?php include "helpers/gallery_processing.php"; ?>
          </div>
        </center>

        </div>

        </div>

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
