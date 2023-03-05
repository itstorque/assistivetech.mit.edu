<!DOCTYPE html>

<script type="text/javascript" src="js/events.js"></script>
<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <?php include 'helpers/read_projects.php'; ?>

    <div class="separator"></div>

    <div class="banner header thin centerOnSmall darkColor">

      <img src="/resources/brand/athack_logo.svg" class="sideTextBox sideLogo">

      <div class="sideText">
        <br>
        <h2>ATHack was held from 2014-2020, and inspired the current format of AT@MIT. The program brought together students and codesigners to develop technology that addressed a challenge in the codesigner's life.</h2>
        <br>
      </div>

    </div>

    <style>
    h2 {text-align: center;}
    </style>
    <h2 class="title">Past Projects</h1>
  
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
    <br>

    <div id="projectsArea">

    </div>

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
    <!--<div class="banner blend thin overflowHidden" id="FAQSection">

      <img src="/resources/titles/FAQ.svg">

      <br><br>

      <div class="accordion">
        <div class="accordion-item">
          <a>What shop tools will be available for use?</a>
          <div class="content">
            <p>Participants will have access to the Beaver Works lab area and machine shop, with supervision. This includes drills, hand tools, a mill, lathe, laser cutter, and other machines.</p>
          </div>
        </div>
        <div class="accordion-item">
          <a>What materials will be available to work with?</a>
          <div class="content">
            <p>We will provide a stock of basic materials including Arduinos, Raspberry Pis, breadboards, acrylic, fasteners, and adhesives.</p>
          </div>
        </div>
        <div class="accordion-item">
          <a>Am I expected to produce a working prototype my Co-Designer can use?</a>
          <div class="content">
            <p>The purpose of ATHack is to get students involved in creating and hacking with the AT space. Co-designers understand that the results of the hackathon may not be an immediately usable project. But if you'd like to continue developing your project after the hackathon with your client, we're happy to help and provide some resources.</p>
          </div>
        </div>
        <div class="accordion-item">
          <a>Is this only for software engineers? Do I need to have previous project experience?</a>
          <div class="content">
            <p>AT projects are interdisciplinary! We're looking for mechanical engineers, electrical engineers, software engineers, designers, occupational therapists - anyone who is interested in creating products in the realm of AT. The hackathon is about learning and creating - if you're excited about the projects, you're welcome to participate.</p>
          </div>
        </div>
        <div class="accordion-item">
          <a>Will the co-designer be telling us exactly what they want us to make? Is there a creative aspect to the hackathon?</a>
          <div class="content">
            <p>Co-Designers are looking for your ideas and inspiration so that they can work with their teams on an AT project. No one will be dictating what you're building during the event.  There is some variation in how defined the projects are - but you get to submit your preferences after the dinner!</p>
          </div>
        </div>
        <div class="accordion-item">
          <a>Who is allowed to participate?</a>
          <div class="content">
            <p>The hackathon is open to MIT undergrads, grad students, and affiliates. The hackathon is also open to students from other universities, though we unfortunately cannot provide any travel assistance.  We are generally oversubscribed, and run a lottery to give away slots in the hackathon.</p>
          </div>
        </div>
      </div>

      <script>

        const items = document.querySelectorAll(".accordion a");

        function toggleAccordion() {
          this.classList.toggle("active");
          this.nextElementSibling.classList.toggle("active");
        }

        items.forEach(item => item.addEventListener("click", toggleAccordion));

        function toggleAnswerCod() {

          a = document.getElementById("answerCod")

          b = document.getElementById("whoAreCod")

          if (a.className == "") {

            a.className = "hidden"

            b.innerHTML = "Who are Co-Designers"

          } else {

            a.className = ""

            b.innerHTML = "Done"

          }

        }


      </script>

      <br><br>

    </div>-->

  </body>

</html>
