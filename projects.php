<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body id="projects">

    <?php include 'includes/nav.php'; ?>

    <?php

      $year_begin = 2016;
      $selectedYear = $latest_year = 2019;

      ob_start();
      include('teams.json');
      $teamData = ob_get_contents();
      ob_end_clean();

      $teamData = str_replace(array("\n", "\r"), '', $teamData)

    ?>

    <div class="seperator"></div>

    <div class="banner">

      <h2 class="title">Projects</h2>

    </div>

      <div style="margin: 0; background-color: var(--colorW); -webkit-transform:translate3d(0,0,0); height: auto; padding-left: 8%; padding-top: 40px; padding-right: 8%">

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

        <h1 style="font-family: 'Raleway', Sans-Serif; display: inline-block; vertical-align: middle; font-size: 40px; color: var(--color1);">ATHack <x style="color: var(--color2)" id="yearLabel"><?php echo $selectedYear; ?></x></h1>

        <br>

        <div id="projectsArea">

        </div>

      <br>

      <div id="moreProjectsArea">

      </div>

      <script>teamData = JSON.parse(`<?php echo $teamData; ?>`); updateWinners("<?php echo $selectedYear ?>");</script>

      <div class="seperator"></div>

      </div>

      <div style="position: fixed; width: 100vw; height: 100vh; top:0; bottom: 0; background-color: #fff; z-index: 99" id="popup" class="hidden">

        <div onclick="document.getElementById('popup').className = 'hidden'" class="close" style="width: 50px; height: 50px; z-index: 100;"><div class="close1"></div><div class="close2"></div></div>

        <div style="width: 80%; margin-top: 30px; height: 100px; margin-left: 10%; background-size: cover; background-repeat: no-repeat; background-position: center; text-align: right" id="pImg" onclick="fullScreenPopupImage()"><img src="/resources/icons/enlarge.svg" style="width: 50px; background-color: #fff; border-radius: 5px; margin: 10px; transition: all 0.4s;" id="enlarge"></div>

        <div id="pTextDetails">

          <h2 style="font-family: 'Raleway', Sans-Serif; margin-left: 10%; padding-left: 20px; color: var(--color1); margin-right: 10%" id="pTitle">Project Title</h2>

          <h2 style="font-family: 'Raleway', Sans-Serif; margin-left: 10%; padding-left: 32px; font-size: 20px; margin-right: 10%" id="pDesc">Project Description</h2>

          <h2 style="font-family: 'Raleway', Sans-Serif; margin-left: 10%; padding-left: 32px; font-size: 20px; margin-top: 20px; color: var(--color2); margin-right: 10%;" id="pWin">Project Won First Place in Functionality</h2>

        </div>

      </div>

      <?php include 'includes/footer.php' ?>

    </div>

  </body>

</html>
