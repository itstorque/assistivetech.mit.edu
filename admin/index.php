<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

		<div class="ui main text container">
	    <h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">Admin portal<div class="sub header">This is the backend for the AT website</div></div>
			</h1>
			<br>
	    <h5 class="ui header">You can access this page since you belong to the group <b>[system: <span class="ui green header small">assistivetech</span>]</b></h5>

			<br>

			<h2 class="ui header"> Pull Site From GitHub</h2>

			<br>

			<button class="ui green button labeled icon pull" onclick="pull()">
			  <i class="github icon"></i> Pull Now
			</button>
			<button class="ui secondary button labeled icon checkStatus" onclick="checkStatus()">
			  <i class="refresh icon"></i> Check Status
			</button>

	  </div>

	</body>

</html>
