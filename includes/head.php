<head>

  <?php if(strpos($_SERVER['REQUEST_URI'], 'gallery') !== false):?>

    <title>
      <?php
        if (isset($_GET['album'])) {
      	  echo $_GET['album'];
      	} else {
      	  echo 'Photo Gallery';
      	}
      ?>
    </title>

  <?php else: ?>

    <title>MIT Assistive Technology</title>

  <?php endif; ?>

  <link rel="stylesheet" href="./resources/styles/style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <script src="./js/main.js"></script>

  <?php

    $fileName = "./js/".basename($_SERVER["SCRIPT_FILENAME"], '.php').".js";

    echo $fileName;

    if (file_exists($fileName)) {

      echo '<script src="'.$fileName.'"></script>';

    }

  ?>

  <!-- Modify php if to dynamic form -->

  <?php if(strpos($_SERVER['REQUEST_URI'], 'events') !== false):?>

    <script src="./js/scrollTo.js"></script>

  <?php elseif(strpos($_SERVER['REQUEST_URI'], 'gallery') !== false):?>

    <link rel="stylesheet" type="text/css" href="./resources/styles/gallery.css" />

    <link rel="stylesheet" type="text/css" href="./colorbox/colorbox.css" />

    <script type="text/javascript" src="./colorbox/jquery.colorbox-min.js"></script>

    <script type="text/javascript">

    $(document).ready(function() {

    	$(".albumpix").colorbox({rel:'albumpix'});

    	$("a.albumpix").fancybox({
    		'autoScale	'		: true,
    		'hideOnOverlayClick': true,
    		'hideOnContentClick': true
    	});

    });

    </script>

  <?php elseif(strpos($_SERVER['REQUEST_URI'], 'pageDown') !== false):?>

    <?php

    // CHANGE THE WAY PAGE DOWN IS HANDLED

    include "dirList.php";

    $t = $websiteIsLive;

    if ($t == true) {

      echo '<meta http-equiv="refresh" content="0; url=./home.html" />';

    }

    ?>

  <?php endif; ?>

  <meta name="viewport" content="width=device-width,initial-scale=1">

  <meta charset="utf-8">

  <link href="favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

  <link href="favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon" />

</head>
