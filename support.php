<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div style="margin: 0; background-color: var(--colorW); -webkit-transform:translate3d(0,0,0); height: auto;" class="banner" id="mainBanner">

      <div style="width: 80%; margin-left: 8%;">

        <h2 style="font-family: 'Raleway', Sans-Serif; vertical-align: middle; margin-top: 50px;" class="centerOnSmall">How to Support Us</h2>

        <br><br>

        <div>

          <h1 style='display:inline-block; width: 15%; text-align: right; margin: 0; margin-right: 8%; color: var(--color1); font-size: 100px;vertical-align: top;' class="centerOnSmall">1</h1>
          <div style='display:inline-block; width: 75%'><h2 style="color: var(--color1)" class="centerOnSmall">Attend Our Events</h2> <h3 style="color: #000" class="centerOnSmall">Nothing can motivate us to work harder than more people attending our events!</h3></div>

        </div>

        <div style="width: 100%; text-align: right; margin-bottom: -10px" class="centerOnSmall"><div class="buttonDark" style="margin-right:0px;" onclick="location.href='./events'">Our Events</div></div>

        <br>

        <div>

          <h1 style='display:inline-block; width: 15%; text-align: right; margin: 0; margin-right: 8%; color: var(--color2); font-size: 100px;vertical-align: top;' class="centerOnSmall">2</h1>
          <div style='display:inline-block; width: 75%'><h2 style="color: var(--color2)" class="centerOnSmall">Follow Us</h2> <h3 style="color: #000" class="centerOnSmall">Follow us on social media to get the latest updates on upcoming events and share our posts!</h3></div>

        </div>

        <div style="width: 100%; text-align: right; margin-bottom: -10px" class="centerOnSmall"><div class="buttonAltDark" style="margin-right:0px;" onclick="location.href='./contact'">Our Social Media</div></div>

        <br>

        <div>

          <h1 style='display:inline-block; width: 15%; text-align: right; margin: 0; margin-right: 8%; color: var(--colorMain); font-size: 100px;vertical-align: top;' class="centerOnSmall">3</h1>
          <div style='display:inline-block; width: 75%'><h2 style="color: var(--colorMain)" class="centerOnSmall">Donations</h2> <h3 style="color: #000" class="centerOnSmall">Donating helps us make more cool events and hackathons!</h3></div>

        </div>

        <div style="width: 100%; text-align: right; margin-bottom: -50px" class="centerOnSmall"><div class="buttonPurpleDark" style="margin-right:0px;" onclick="document.getElementById('popup').className = ''">How to Donate</div></div>

        <br>

        <div class="separator"></div>

      </div>

    </div>

    <div style="position: fixed; width: 100vw; height: 100vh; top:0; bottom: 0; background-color: rgba(20,22,20,0.4); z-index: 99" class="hidden" id="popup">

      <center>

        <div style="background-color: #fafafa; width: 50%; min-width: 250px; margin-top: 100px;">

          <div onclick="document.getElementById('popup').className = 'hidden'" class="close" style="width: 50px; height: 50px; z-index: 100"><div class="close1"></div><div class="close2"></div></div>

          <h2 style="font-family: 'Raleway', Sans-Serif; vertical-align: middle; margin-top: 10px; margin-bottom: 50px;" class="centerOnSmall">Donating</h2>

          <h2 style="font-family: 'Raleway', Sans-Serif; text-align: left; font-size: 22px; margin-left: 70px; color: var(--color1)">Option #1</h2>

          <br>

          <h2 style="font-family: 'Raleway', Sans-Serif; text-align: left; font-size: 22px; margin-left: 75px; margin-right: 75px; margin-top: 0px;">Contact us on our email <a href="mailto:at-hack-core@mit.edu" style="text-decoration: none; color: var(--colorMain)">at-hack-core@mit.edu</a></h2>

          <br>

          <h2 style="font-family: 'Raleway', Sans-Serif; text-align: left; font-size: 22px; margin-left: 70px; color: var(--color2)">Option #2</h2>

          <br>

          <h2 style="font-family: 'Raleway', Sans-Serif; text-align: left; font-size: 22px; margin-left: 75px; margin-right: 75px; margin-top: 0px;">Wire it directly into our MIT Giving account <a href="https://giving.mit.edu/search/node/2530097" target="_blank" style="text-decoration: none; color: var(--colorMain)">Account Number 2530097</a></h2>

          <br><br><br>

        </div>

      </center>

    </div>

    <?php include 'includes/footer.php' ?>

  </body>

</html>
