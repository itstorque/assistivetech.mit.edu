<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

		<div class="ui main text container">
	    <h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">Site Status<div class="sub header">Check the status of the servers, websites and modules</div></div>
			</h1>
			<br>

      <h2 class="ui header">Domain Information</h2>

      <?php
        function check_server_status($host, $port, $timeout) {
          $start_time = microtime(TRUE);
          $status = fsockopen($host, $port, $errno, $errstr, $timeout);
          if (!$status) {
            return "Server is down.";
          }

          $end_time = microtime(TRUE);
          $time_taken = $end_time - $start_time;
          $time_taken = round($time_taken,5);

          return "Server responded in " . $time_taken * 1000 . " ms.";
        }

        if (check_server_status('assistivetech.mit.edu', 80, 12)) {

          $live1 = "";
          $down1 = "hidden";

        } else {

          $live1 = "hidden";
          $down1 = "";

        }

        if (check_server_status('assistivetech.scripts.mit.edu', 80, 12)) {

          $live2 = "";
          $down2 = "hidden";

        } else {

          $live2 = "hidden";
          $down2 = "";

        }

      ?>

      <div class="ui divided selection list">
        <a class="item">
          <div class="ui green horizontal label <?php echo $live1; ?>">LIVE</div>
          <div class="ui red horizontal label <?php echo $down1; ?>">DOWN</div>
          assistivetech.mit.edu
        </a>
        <a class="item">
          <div class="ui green horizontal label <?php echo $live2; ?>">LIVE</div>
          <div class="ui red horizontal label <?php echo $down2; ?>">DOWN</div>
          assistivetech.scripts.mit.edu
        </a>
      </div>

      <br>

      <form class="ui form" action="" method="post">
        <div class="ui form">
          <div class="fields">
            <div class="field fourteen wide">
              <label>Ping Domain</label>
              <input type="text" name="domain" value="assistivetech.mit.edu" />
            </div>
            <div class="field two wide">
              <br>
              <input class="ui positive button" type="submit" value="PING" />
            </div>
          </div>
        </div>
      </form>

      <strong>
      <?php if($_POST['domain']) echo "Status: " . check_server_status($_POST['domain'], 80, 12); ?>
      </strong>

      <br><br>
      <h4 class="ui header">GitHub Status</h4>

      <button class="ui secondary button labeled icon checkStatus right floated" onclick="checkStatus()">
        <i class="refresh icon"></i> Check Status
      </button>

      <h3 class="ui header" id="statusLabel">Status:
				<div class="ui green horizontal label large upToDate"><i class="clipboard check icon"></i>Up To Date</div>
				<div class="ui red horizontal label large notUpToDate"><i class="minus circle icon"></i>Behind</div>
				<div class="ui grey horizontal label large noStatus">Unknown</div>

      </h3>

      <br><br>

			<h2 class="ui header">PHP Information</h2>

      <br>

      <div class="ui styled fluid accordion">
        <div class="title">
          <i class="dropdown icon"></i>
          Show phpinfo()
        </div>
        <div class="content" style="overflow-x: scroll">
          <p><?php phpinfo(); ?></p>
        </div>
      </div>

			<br>
			<br>

	  <script src="/js/admin_site.js"></script>

	  <script src="/js/admin.js"></script>

	</body>

</html>
