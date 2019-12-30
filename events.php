<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div class="separator"></div>

    <div class="banner header thin centerOnSmall" style="background-color: var(--colorDarker)">

      <img src="/resources/brand/athack_logo.svg" class="sideTextBox sideLogo">

      <div class="sideText">
        <h2>ATHack is our largest yearly event, students and co-designers from the community work on prototyping a solution to problems co-designers face daily.</h2>
        <br>
        <div class="button loseAnimation" onclick="location.href='./apply'"><center>Apply Now</center></div>
      </div>

    </div>

    <div class="banner default">

      <center>

        <div class="dateEvent">
          <h2 class="month">February&nbsp;</h2><h2 class="number">13</h2>
          <h2 class="eventTime">7:30 pm</h2>
          <h2 class="eventName">Meet the Co-Designers Dinner</h2>
          <h2 class="eventLocationIcon"></h2>
          <h2 class="eventLocation">MIT Media Lab, 6th floor<br>75 Amherst St, Cambridge, MA 02139</h2>
          <br>
          <br>
          <!--<h2 class="moreInfo" id="MeetCod">More Info</h2>-->
        </div>

          <div class="dateEvent">
            <h2 class="month">February&nbsp;</h2><h2 class="number">29&nbsp;</h2>
            <h2 class="eventTime">8:00 am</h2>
            <h2 class="eventName">ATHack 2020</h2>
            <h2 class="eventLocationIcon"></h2>
            <h2 class="eventLocation">Beaverworks, 2F of 300 Technology Square,<br>Cambridge MA</h2>
            <br>
            <br>
            <!--<h2 class="moreInfo" id="theHack">More Info</h2>-->
          </div>

            <div class="dateEvent">
              <h2 class="month">February&nbsp;</h2><h2 class="number">29&nbsp;</h2>
              <h2 class="eventTime">7:30 pm</h2>
              <h2 class="eventName">Closing Ceremony of ATHack 2020</h2>
              <h2 class="eventLocationIcon"></h2>
              <h2 class="eventLocation">Forbes Café @ MIT Stata Center, 32 Vassar St,<br>Cambridge MA</h2>
              <br>
              <br>
              <!--<h2 class="moreInfo" id="ceremony">More Info</h2>-->
            </div>

      </center>

    </div>

    <div class="banner blend thin overflowHidden" id="FAQSection">

      <img src="/resources/titles/FAQ.svg" style="height: 100px">

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

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
