<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div class="banner">

      <div class="separator small"></div>

      <center>

        <img src="/resources/brand/group_logo.png" class="mainTitle">

        <div class="separator small"></div>

        <div class="button_container"><div class="buttonAlt widthCompact" onclick="location.href='./club'"><center>Club Format</center></div></div>

        <br>

        <div class="button_container right"><div class="button widthCompact" onclick="location.href='./projects'"><center>Our Projects</center></div></div>

        <div class="button_container left"><div class="button widthCompact" id="ourSponsors"><center>Our Sponsors</center></div></div>
        <br>
        <div class="button_container right"><div class="button widthCompact" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLScq2JFtkm_ATYlE1bgs0vUp4Mp29riDEGySistsgjjc8aFsqg/viewform?usp=sf_link')"><center>Codesigner Interest Form</center></div></div>

        <div class="button_container left"><div class="button widthCompact" onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSd1Ue3sDCs-rV_a8WXdiTP-k5gUFckhCO_t20Mdm8yvatvLmg/viewform?usp=sf_link')"><center>Member Interest Form</center></div></div>
        <br><br><br><br><br><br>
      </center>

    </div>

    <div class="banner default centerOnSmall">

      <h1 class="centerOnSmall sideTitle"><x class="black">Our</x><br>Mission</h1>

        <p class="sectionSmallP">

          Our mission is to make the world more <x class="c1 ub">accessible to everyone</x> by building connections within our community and fostering <x class="c2 ub">collaborative efforts</x> to create <x  class="c1 ub">inclusive technology.</x> Through AT@MIT, we introduce students to the fun (and challenging) design space of assistive technology while <x  class="c2 ub">building connections</x> between community members, engineers, and designers.  We hope to inspire participants to pursue projects in the AT space in the future.

        </p>

        <div class='separator'></div>

    </div>

    <div class="banner default blueBG centerOnSmall">

      <center>

        <div class="mobileHide">

          <img src="/resources/images/1.jpeg" class="vertImg down">
          <img src="/resources/images/2.jpeg" class="vertImg up">
          <img src="/resources/images/3.jpeg" class="vertImg down">

        </div>

        <div class="mobileShow">

          <img src="/resources/images/1s.jpeg" class="vertImg down">
          <img src="/resources/images/2s.jpeg" class="vertImg up">
          <img src="/resources/images/3.jpeg" class="vertImg down">

        </div>

        <div class="separator small"></div>

        <div class="button ignore widthWide noAnim" onclick="location.href='/gallery'"><center>See Our Photos</center></div>
        <div class="button ignore widthWide noAnim" id="openVideo"><center>Watch Our Video</center></div>

      </center>

    </div>

    <!--
    <div class="banner blend centerOnSmall" id="ourSponsorsSection">

      <center>

        <h1 class="b black titleSize2">Our <x class="b c1">Sponsors</x></h1>

        <div id="home-sponsors">


        </div>

        <div class="separator small"></div>

        <div class="buttonDark" onclick="window.open('https://giving.mit.edu/search/node/2530097')">Donate Now</div>

      </center>

      <div class="separator"></div>

    </div>-->

    <?php include 'includes/footer.php' ?>

    <div id="hiddenVideo">

      <div id="closeVideo" class="close">
        <div class="close1"></div><div class="close2"></div>
      </div>

      <iframe class="videoFrame" src="https://www.youtube.com/embed/PEW-eqRvARg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

  </body>

</html>
