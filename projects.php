<!DOCTYPE html>

<html>


  <?php include 'includes/head.php'; ?>


  <body id="projects">

    <?php include 'includes/nav.php'; ?>

    <?php include 'helpers/read_projects.php'; ?>

    <div class="separator"></div>

    <div class="banner main">

      <h2 class="title">Projects</h2>

    </div>

      <div class="banner thin">

        <div class="flight-types year">

          <?php

            $function_to_run_here = "updateWinners";

            for ($year = $latest_year; $year >= $year_begin; $year--) {

              $checked = "";

              if ($year == $selectedYear) { $checked = " checked "; }

              echo '<input type="radio" name="flight-type" value="'.$year.'" id="'.$year.'" onclick="'.$function_to_run_here.'('.$year.')"'.$checked.'/> <label for="'.$year.'"> '.$year.' </label>';

            }

          ?>

        </div>

        <h1 class="c1">ATHack <x class="c2" id="yearLabel"><?php echo $selectedYear; ?></x></h1>

        <br>

        <div id="projectsArea">

        </div>

      <br>

      <div id="moreProjectsArea">

      </div>

      <script>updateWinners("<?php echo $selectedYear ?>");</script>

      <div class="separator"></div>

      </div>

      <div id="popup" class="hidden">

        <div onclick="document.getElementById('popup').className = 'hidden'" class="close"><div class="close1"></div><div class="close2"></div></div>

        <div id="pImg" onclick="fullScreenPopupImage()"><img src="/resources/icons/enlarge.svg" id="enlarge"></div>

        <div id="pTextDetails">

          <h2 id="pTitle">Project Title</h2>

          <h2 id="pDesc">Project Description</h2>

          <h2 id="pWin">Project Won First Place in Functionality</h2>

        </div>

      </div>

      <?php include 'includes/footer.php' ?>

    </div>

  </body>

</html>
