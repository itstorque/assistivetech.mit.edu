$(document).ready(function() {

  $( ".button" ).click(function() {

    if (this.classList.contains("ignore") == false) {

      $([document.documentElement, document.body]).animate({

          scrollTop: $("#"+this.id+"Section").offset().top - 84

      }, 800);

    }

  });

    $( ".moreInfo" ).click(function() {

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

    let hash = window.location.hash.substr(1);

    if (hash != "") {

      $([document.documentElement, document.body]).animate({

          scrollTop: $("#"+hash+"Section").offset().top - 84

      }, 800);

    }

});
