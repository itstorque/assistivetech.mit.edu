<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body id="projects">

    <?php include 'includes/nav.php'; ?>

    <div class="seperator"></div>

    <div class="banner">

      <h2 class="title">Projects</h2>

    </div>

      <div style="margin: 0; background-color: var(--colorW); -webkit-transform:translate3d(0,0,0); height: auto; padding-left: 8%; padding-top: 40px; padding-right: 8%">

        <div class="flight-types year">

          <?php

            $year = 2015;

            $function_to_run_here = "NO FUNCTION YET";

            echo `<input type="radio" name="flight-type" value="`.$year.`" id="`.$year.`" onclick="`.$function_to_run_here.`" checked/> <label for="`.$year.`"> `.$year.` </label>`;

          ?>

          <input type="radio" name="flight-type" value="2019" id="2019" onclick="" checked/>
          <label for="2019">
              2019
          </label>

          <input type="radio" name="flight-type" value="2018" id="2018" onclick="" />
          <label for="2018">
              2018
          </label>

          <input type="radio" name="flight-type" value="2017" id="2017" onclick="" />
          <label for="2017">
              2017
          </label>

          <input type="radio" name="flight-type" value="2016" id="2016" onclick=""/>
          <label for="2016">
              2016
          </label>

          <input type="radio" name="flight-type" value="2015" id="2015" onclick=""/>
          <label for="2015">
              2015
          </label>

        </div>

        <h1 style="font-family: 'Raleway', Sans-Serif; display: inline-block; vertical-align: middle; font-size: 40px; color: var(--color1);">ATHack <x style="color: var(--color2)">2019</x></h1>

        <br>

        <table class="projectsTable">

        </table>

      <br>

      <h2 style="font-family: 'Raleway', Sans-Serif; display: inline-block; vertical-align: middle; margin-top: 50px;" class="centerOnSmall">Documentation Award</h2>

      <div style="margin-left: 80px; margin-right: 80px;" class="removeMarginOnSmall">

        <p><b style="color: var(--color2)">Team Phil</b> built "PhilGood", which is a standing chair where users can independently leave their wheelchair and secure themselves into it.</p>

      </div>

      <h2 style="font-family: 'Raleway', Sans-Serif; display: inline-block; vertical-align: middle; margin-top: 50px;" class="centerOnSmall">Other 2019 Projects</h2>

      <div style="margin-left: 80px; margin-right: 80px;" class="removeMarginOnSmall">

      </div>

      <div class="seperator"></div>

      <script src="scripts/projects.js"></script>

      </div>

      <div style="position: fixed; width: 100vw; height: 100vh; top:0; bottom: 0; background-color: #fff; z-index: 99" id="popup" class="hidden">

        <div onclick="document.getElementById('popup').className = 'hidden'" class="close" style="width: 50px; height: 50px; z-index: 100;"><div class="close1"></div><div class="close2"></div></div>

        <div style="width: 80%; margin-top: 30px; height: 100px; margin-left: 10%; background-size: cover; background-repeat: no-repeat; background-position: center; text-align: right" id="pImg" onclick="fullScreenPopupImage()"><img src="./enlarge.svg" style="width: 50px; background-color: #fff; border-radius: 5px; margin: 10px; transition: all 0.4s;" id="enlarge"></div>

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
