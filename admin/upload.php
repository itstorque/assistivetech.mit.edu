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

			<h2 class="ui header">Upload Photos</h2>
      <h2 class="ui sub header">Upload Photos To Album</h2>

      <br><br>

      <?php $album = $_GET['album']; ?>

      <br><br>

      <div class="ui accordion fluid form" id="form">


        <div class="ui success message">
          <i class="close icon"></i>
          <div class="header">Content Edited Successfully</div>
          <p>Your changes have been added.</p>
        </div>
        <div class="ui error message">
          <i class="close icon"></i>
          <div class="header">Error Modifying Page(s)</div>
          <p>An error occurred while processing your request</p>
        </div>
        <div class="ui warning message">
          <i class="close icon"></i>
          <div class="header">Cleared Changes</div>
          <p>All your modifications have been cleared.</p>
        </div>

        <h4 class="ui horizontal divider">
          Upload Single Image
        </h4>
        <br>

        <div class="field">
          <div class="ui action input">
              <input type="text" id="_attachmentName">
              <label for="attachmentName" class="ui icon button btn-file">
                   <i class="file image icon"></i>
                   <input type="file" id="attachmentName" name="attachmentName" style="display: none">
              </label>
          </div>
        </div>

        <br>

        <div class="field">
          <label><i class="file icon"></i>Image Name (w/o extension)</label>
          <input id="fileName"></input>
        </div>

        <br>
        <button class="ui right floated button positive large"> Upload Photo</button>

        <br><br><br><br>
        <h4 class="ui horizontal divider">
          Upload Batch
        </h4>
        <br>

        <div class="field">
          <div class="ui action input">
              <input type="text" id="_attachmentName">
              <label for="attachmentName" class="ui icon button btn-file">
                   <i class="folder open icon"></i>
                   <input type="file" id="attachmentName" name="attachmentName" style="display: none" multiple>
              </label>
          </div>
        </div>

        <br>
        <button class="ui right floated button positive large"> Upload Photos</button>

        <br><br><br>

      </div>

			<br>
			<br>

	  <script src="/js/admin_upload.js"></script>

	</body>

</html>
