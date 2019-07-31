<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div class="banner white_bg" id="mainBanner">

      <div class="bg1">

        <h2 class="sideTextBox"><x style="font-size: 30px;" class="cD">Our Mission</x>
          <br><br>
          <span class="cP ub">Our mission</span> is to make the world more <span class="c1 ub">accessible to everyone</span> by building connections within our community and fostering <span class="c2 ub">collaborative efforts</span> to create <span class="c1 ub">inclusive technology.</span> Through ATHack, we introduce students to the fun (and challenging) design space of assistive technology while <span class="c2 ub">building connections</span> between community members, engineers, and designers.  We hope to inspire participants to pursue projects in the AT space in the future.
        </h2>

      </div>
        <br><br>
        <div>

          <h2 class="title">Our Team</h2>
          <br>

          <center>

          <div class="personContainer">

          <div class="personCard">
            <img src="/resources/images/people/jaya.jpg">
            <h2>Jaya Narain</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/ishwarya.jpg" >
            <h2>Ishwarya Ananthabhotla</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/mandy.jpg">

            <h2>Mandy Fike</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/hosea.jpg">
            <h2>Hosea Siu</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/sally.jpg">
            <h2>Sally Beiruti</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/tareq.jpg">

            <h2>Tareq El Dandachi</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/imane.jpg">

            <h2>Imane Bouzit</h2>
          </div>

          </div>

        </center>

        <br><br>

        </div>

        <script>

        var onresize = function() {

          details = document.getElementsByClassName('articleDetail')

          cells = document.getElementsByClassName('article')

          for (i = 0; i < details.length; i++) {

            console.log(cells[i].offsetWidth)

            details[i].style.width = (cells[i].offsetWidth - 100) + "px"

          }

        }

        window.addEventListener("resize", onresize);

        </script>

        <div class="banner blend bg2" id="mediaSection">

          <!--media anchor in ::before div update it-->

          <h2 class="title white">Media Articles</h2>
          <h4 class="subtitle">Some of the articles our club has been featured in</h4>

          <center>

            <div class="article" onclick="window.open('http://news.mit.edu/2019/sixth-mit-athack-develops-assistive-technology-0322')">

              <img src="/resources/icons/link.svg" class="mobileHide">

              <div class="articleDetail">
                <h2>MIT News</h2>
                <h3>Developing tech for, and with, people with disabilities</h3>
              </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2018/students-build-assistive-technologies-mit-annual-athack-0312')">

              <img src="/resources/icons/link.svg" class="mobileHide">

              <div class="articleDetail">
                <h2>MIT News</h2>
                <h3>Students build assistive technologies at MIT’s annual ATHack</h3>
              </div>

            </div>

            <div class="article" onclick="window.open('http://www.formmagazine.com/en/')">

              <img src="/resources/icons/link.svg" class="mobileHide">

              <div class="articleDetail">
                <h2>Form Magazine</h2>
                <h3>In the October 2018 issue</h3>
              </div>

            </div>

            <div class="article" onclick="window.open('https://edtechmagazine.com/higher/article/2018/05/college-hackathon-designers-tackle-accessibility-challenges')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>EdTech</h2>
                  <h3>College Hackathon Designers Tackle Accessibility Challenges</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.disabilitytek.com/mit-students-building-assistive-technology-at-hackathon/')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>Disability Tek</h2>
                  <h3>MIT students building Assistive Technology at Hackathon</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2017/mit-students-hack-assistive-technology-solutions-for-local-clients-0612')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>MIT News</h2>
                  <h3>MIT students hack assistive technology solutions for local clients</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.metro.us/news/local-news/boston/mit-assistive-technology-walker')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>Metro USA</h2>
                  <h3>MIT students help 9-year-old with cerebral palsy with a 'hacked' walker</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2015/perspective-athack-assistive-technologies-hackathon-0601')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>MIT News</h2>
                  <h3>Hacking for those with disabilities</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('https://mitadmissions.org/blogs/entry/athack/')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>MIT Admissions</h2>
                  <h3>ATHack by Kirsten L. '15</h3>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.perkins.org/stories/from-problem-to-solution-in-just-nine-hours')">

                <img src="/resources/icons/link.svg" class="mobileHide">

                <div class="articleDetail">
                  <h2>Perkins</h2>
                  <h3>From problem to solution in just nine hours</h3>
                </div>

            </div>

          </center>

          <div class="separator">
          </div>

          </div>

          <div class="banner thin darkColor">

            <center><img src="/resources/brand/LogoSmallColor.svg" style="padding-top: 50px;">

            <br><br><br><br>

            <h2><x class="c1">Change</x> With <x class="c2">Technology</x></h2>

            <br><br>

            <h3>ATHack began in 2014, and has since worked with over 60 community co-designers and 300 student designers</h3>

            </center>

            <br><br><br>

          </div>

        </div>

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
