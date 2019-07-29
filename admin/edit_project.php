<!DOCTYPE html>

<html>

  <?php include '../includes/admin_head.php'; ?>

	<body>

		<?php include '../includes/admin_nav.php'; ?>

    <?php include '../helpers/read_projects.php'; ?>

		<div class="ui main text container">
	    <h1 class="ui header">
				<img class="ui image" src="/resources/brand/LogoSmallColorAlt.svg">
				<div class="content">Manage Projects<div class="sub header">Add, remove and edit hackathon projects.</div></div>
			</h1>

      <br>

      <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $year = "20".substr($id, 0, 2);
        } else {
            echo "<script>alert('PHP ERROR - Check Server For Details')</script>";
        }
       ?>

     <h1 class="ui header">Editing Entry for <span id="yearID"><?php echo $year; ?></span> Project with ID: <span id="teamID"><?php echo $id; ?></span></h1>
     <br><br>

     <div class="ui equal width form" id="form">

       <h3 class="ui header">Team & Projects Details</h3>

        <div class="fields">
          <div class="field required">
            <label>Team Name</label>
            <input type="text" placeholder="Team Name" id="name">
          </div>
          <div class="field required">
            <label>Short Description</label>
            <input type="text" placeholder="Short Description" id="desc">
          </div>
        </div>

        <div class="field required">
          <label>Long Description</label>
          <textarea rows="3" placeholder="Project Details" id="detail"></textarea>
        </div>

        <br>
        <h3 class="ui header">Winner Details</h3>

        <div class="fields">
          <div class="field eight wide required">
            <label>Category</label>
            <input type="text" placeholder="Category" id="category">
          </div>

          <div class="field two wide required">
              <label>Place</label>
              <div class="ui selection dropdown" id="place">
                  <input type="hidden" name="place">
                  <i class="dropdown icon"></i>
                  <div class="default text">Place</div>
                  <div class="menu">
                      <div class="item" data-value="0">None</div>
                      <div class="item" data-value="1">First</div>
                      <div class="item" data-value="2">Second</div>
                      <div class="item" data-value="3">Third</div>
                  </div>
              </div>
          </div>
        </div>

        <div class="inline field">
          <div class="ui checkbox">
            <input type="checkbox" tabindex="0" class="hidden" id="checkboxTable">
            <label>Use Table (This should usually be no)</label>
          </div>
        </div>

        <br>
        <h3 class="ui header">Media Related</h3>

        <div class="ui labeled field">
          <label>Documentation Link</label>
          <input type="text" placeholder="Link" id="docLink">
        </div>

        <br>
        <div class="ui labeled field">
          <label>Upload a Team Photo</label>
          <button class="ui left floated secondary button" id="uploadPhoto"><i class="ui upload icon"></i>Upload Photo</button>
        </div>

        <br><br>

        <div class="ui success message">
          <div class="header">Project Edited Successfully</div>
          <p>Project <?php echo $id;?> was edited successfully.</p>
        </div>
        <div class="ui error message">
          <div class="header">Error Adding Project</div>
          <p>An error occurred while processing your request</p>
        </div>

        <br>

        <button class="ui right floated button" onclick="getProjectData()">Confirm Changes</button>
        <button class="ui right floated button negative" onclick="getProjectData()">Delete Project</button>
        <br><br><br>

      </div>

    </div>

	  <script src="/js/admin_projects.js"></script>

	</body>

</html>
