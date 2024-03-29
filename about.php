<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div class="banner white_bg" id="mainBanner">

      <div class="aboutATHack">

        <center><img src="/resources/brand/LogoSmallColor.svg">

        <br><br><br><br>

        <h2><x class="c1">Change</x> With <x class="c2">Technology</x></h2>

        <br><br>

        <h3><x class="c2">AT@MIT</x> began in 2014, and has since worked with over 60 community co-designers and 300 student designers</h3>

        </center>

        <br><br><br>

      </div>

      <br><br>
        <div class="ourTeam">

          
          <h2>Curent Members</h2>
          <br>
          <center>

          
          <div class="personContainer">

          <?php include 'helpers/new_person_cards.php'; ?>



          </div>
          </center>

          <h2>Executive Team</h2>
          <br>
          <center>
          <div class="personContainer">

          <?php include 'helpers/mentor_person_cards.php'; ?>
          

          </div>

          </center>

          <br><br>
          <h2>Former Members</h2>
          <br>
          <center>
          <div class="personContainer">

          <?php include 'helpers/old_person_cards.php'; ?>
          

          </div>

          </center>

          <br><br>

        </div>
        

        <div class="banner blend" id="mediaSection">

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

        </div>

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
