<?php include "../helpers/authenticate.php"; ?>
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

			<button class="ui green button labeled icon pull" onclick="initPull()">
			  <i class="github icon"></i> Pull Now
			</button>
			<button class="ui secondary button labeled icon checkStatus" onclick="checkStatus()">
			  <i class="refresh icon"></i> Check Status
			</button>

			<br>
			<br>

			<div class="ui message negative hidden" id="alreadyUpToDateMessage">
			  <i class="close icon"></i>
			  <div class="header">
			    Already Up To Date
			  </div>
			  <p>The website is already up to date!</p>
			</div>

			<div class="ui message positive hidden" id="updatedMessage">
			  <i class="close icon"></i>
			  <div class="header">
			    Updated Website Successfully
			  </div>
			  <p>The website has been successfully updated!<br>Open console to see what has been updated.</p>
			</div>

			<h3 class="ui header" id="statusLabel">Status:
				<div class="ui green horizontal label large upToDate"><i class="clipboard check icon"></i>Up To Date</div>
				<div class="ui red horizontal label large notUpToDate"><i class="minus circle icon"></i>Behind</div>
				<div class="ui grey horizontal label large noStatus">Unknown</div>
			</h3>

	  </div>

		<div class="ui basic modal">
		  <div class="ui icon header">
		    <i class="github icon"></i>
		    Update the Website
		  </div>
		  <div class="content">
		    <p>Check for updates on the remote repository master branch and pull them. Doing so will update the website, are you sure you want to do that?</p>
		  </div>
		  <div class="actions">
		    <div class="ui red basic cancel inverted button">
		      <i class="remove icon"></i>
		      No
		    </div>
		    <div class="ui green ok inverted button" onclick="pull()">
		      <i class="checkmark icon"></i>
		      Yes
		    </div>
		  </div>
		</div>

	  <script src="/js/admin.js"></script>

	</body>

</html>
