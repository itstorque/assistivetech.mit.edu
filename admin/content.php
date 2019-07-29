<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

		<div class="ui main text container">
	    <h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">Content Management<div class="sub header">Update the text content of webpages</div></div>
			</h1>
			<br>

			<h2 class="ui header">Content Update</h2>
      <h2 class="ui sub header">Select the page, edit the text content and press update.</h2>

      <br><br>

      <div class="ui accordion fluid">



        <div class="ui horizontal divider accordion title">
          <i class="dropdown icon"></i>Home Page
        </div>

        <div class="content">

          <?php include 'content_pages/home.php'; ?>

        </div>



        <div class="ui horizontal divider accordion title">
          <i class="dropdown icon"></i>Events Page
        </div>

        <div class="content">

          <?php include 'content_pages/events.php'; ?>

        </div>



        <div class="ui horizontal divider accordion title">
          <i class="dropdown icon"></i>About Page
        </div>

        <div class="content">

          <?php include 'content_pages/about.php'; ?>

        </div>



      </div>

			<br>
			<br>

	  <script src="/js/admin_content.js"></script>

	</body>

</html>
