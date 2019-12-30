<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div style="margin: 0; background-color: var(--colorW); -webkit-transform:translate3d(0,0,0); height: auto;" class="banner" id="mainBanner">

      <div style="width: 100vw; margin: 0; background-color: var(--colorDarker); color: white; margin-top: 10vh;">

        <center><img src="/resources/brand/LogoSmallColor.svg" style="padding-top: 50px;">

        <br><br><br><br>

        <h2 style="font-family: 'Raleway', Sans-Serif; font-size: 30px; margin-top: 0px; width: 80%; margin-bottom: 0px;"><x style="color: var(--color1)">Change</x> With <x style="color: var(--color2)">Technology</x></h2>

        <br><br>

        <h3 style="font-family: 'Raleway', Sans-Serif; font-size: 23px; margin-top: 0px; width: 80%; max-width: 800px; margin-bottom: 0px;">ATHack began in 2014, and has since worked with over 60 community co-designers and 300 student designers</h3>

          <p style="width: 70vw; text-align: left;">
            <br><br>
            Our mission is to make the world more
            <x style="color: var(--color1); font-weight: 900">accessible to everyone</x> by building connections within our community and fostering
            <x style="color: var(--color2); font-weight: 900">collaborative efforts</x> to create
            <x style="color: var(--color1); font-weight: 900">inclusive technology.</x> Through ATHack, we introduce students to the fun (and challenging) design space of assistive technology while
            <x style="color: var(--color2); font-weight: 900">building connections</x> between community members, engineers, and designers.  We hope to inspire participants to pursue projects in the AT space in the future.
          </p>

        </center>

        <br><br><br>

      </div>

        <br><br>
        <div style="width: 90%;">

          <h2 style="font-family: 'Raleway', Sans-Serif; font-size: 48px; margin-left: 10%">Our Team</h2>
          <br>

          <center>

          <div style="vertical-align: top; width: 100vw">

          <div class="personCard">
            <img src="/resources/images/people/jaya.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">
            <h2>Jaya Narain</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/ishwarya.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">
            <h2>Ishwarya Ananthabhotla</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/mandy.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">

            <h2>Mandy Fike</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/hosea.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">
            <h2>Hosea Siu</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/sally.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">
            <h2>Sally Beiruti</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/tareq.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">

            <h2>Tareq El Dandachi</h2>
          </div>

          <div class="personCard">
            <img src="/resources/images/people/imane.jpg" style="width: 200px; height: 200px; border-radius: 100px; object-fit: cover">

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

        <div style="width: 100vw; margin: 0; background-color: var(--colorDarker);" id="mediaSection">

          <!--media anchor in ::before div update it-->

          <h2 style="font-family: 'Raleway', Sans-Serif; font-size: 48px; margin-left: 10%; padding-top: 70px; padding-bottom: 0px; color: var(--colorW); margin-top: 0px; margin-bottom: 7px; width: 80%">Media Articles</h2>
          <h4 style="font-family: 'Raleway', Sans-Serif;font-size: 22px;width: 80%;margin-left: 10%;padding-bottom: 20px;color: snow;margin-top: 0px; color: #fff;">Some of the articles our club has been featured in</h4>

          <center>

            <div class="article" onclick="window.open('http://news.mit.edu/2019/sixth-mit-athack-develops-assistive-technology-0322')">

              <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

              <div style="display: inline-block" class="articleDetail">
                <h2>MIT News</h2>
                <h2 style="font-size: 16px;">Developing tech for, and with, people with disabilities</h2>
              </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2018/students-build-assistive-technologies-mit-annual-athack-0312')">

              <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

              <div style="display: inline-block" class="articleDetail">
                <h2>MIT News</h2>
                <h2 style="font-size: 16px;">Students build assistive technologies at MIT’s annual ATHack</h2>
              </div>

            </div>

              <div class="article" onclick="window.open('http://www.formmagazine.com/en/')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>Form Magazine</h2>
                  <h2 style="font-size: 16px;">In the October 2018 issue</h2>
                </div>

              </div>

            <div class="article" onclick="window.open('https://edtechmagazine.com/higher/article/2018/05/college-hackathon-designers-tackle-accessibility-challenges')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>EdTech</h2>
                  <h2 style="font-size: 16px;">College Hackathon Designers Tackle Accessibility Challenges</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.disabilitytek.com/mit-students-building-assistive-technology-at-hackathon/')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>Disability Tek</h2>
                  <h2 style="font-size: 16px;">MIT students building Assistive Technology at Hackathon</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2017/mit-students-hack-assistive-technology-solutions-for-local-clients-0612')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>MIT News</h2>
                  <h2 style="font-size: 16px;">MIT students hack assistive technology solutions for local clients</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.metro.us/news/local-news/boston/mit-assistive-technology-walker')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>Metro USA</h2>
                  <h2 style="font-size: 16px;">MIT students help 9-year-old with cerebral palsy with a 'hacked' walker</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('http://news.mit.edu/2015/perspective-athack-assistive-technologies-hackathon-0601')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>MIT News</h2>
                  <h2 style="font-size: 16px;">Hacking for those with disabilities</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('https://mitadmissions.org/blogs/entry/athack/')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>MIT Admissions</h2>
                  <h2 style="font-size: 16px;">ATHack by Kirsten L. '15</h2>
                </div>

            </div>

            <div class="article" onclick="window.open('https://www.perkins.org/stories/from-problem-to-solution-in-just-nine-hours')">

                <img src="/resources/icons/link.svg" style="height: 50px; width: 50px; padding-left: 30px;" class="mobileHide">

                <div style="display: inline-block" class="articleDetail">
                  <h2>Perkins</h2>
                  <h2 style="font-size: 16px;">From problem to solution in just nine hours</h2>
                </div>

            </div>

          </center>

          <div class="separator">
          </div>

          </div>

        </div>

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
