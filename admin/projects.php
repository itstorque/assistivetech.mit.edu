<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

		<div class="ui main text container">
	    <h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">Manage Projects<div class="sub header">Add, remove and edit hackathon projects.</div></div>
			</h1>

    </div>

    <div class="ui main container">

      <?php include '../helpers/parseProjectsTable.php'; ?>

    </div>

			<br>
			<br>

	  <script src="/js/admin.js"></script>

	</body>

</html>
