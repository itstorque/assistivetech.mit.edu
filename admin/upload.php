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

        <?php $albums = glob('../resources/images/albums/*' , GLOB_ONLYDIR); ?>

        <label for="albumSelect">Album to add photos to:</label>
        <div class="ui selection fluid dropdown" id="albumSelect">
          <input type="hidden" name="album">
          <i class="dropdown icon"></i>
          <div class="default text">
            <i class="book icon"></i>Album
          </div>
          <div class="menu">
            <?php foreach($albums as $album): ?>
            <div class="item" data-value="<?php echo $album; ?>">
              <i class="book icon"></i>
              <?php echo substr($album, strrpos($album, '/') + 1);; ?>
            </div>
          <?php endforeach; ?>
          </div>
        </div>

        <br><br>

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

        <form method='post' action='/helpers/uploadFiles.php'>

          <div class="field">
            <div class="ui action input">
                <input type="text" id="_attachmentName" readonly="">
                <label for="attachmentName" class="ui icon button btn-file">
                     <i class="file image icon"></i>
                     <input type="file" id="attachmentName" name="upload[]" style="display: none">
                </label>
            </div>
          </div>

          <br>

          <div class="field">
            <label><i class="file icon"></i>Image Name (w/o extension)</label>
            <input id="fileName"></input>
          </div>

          <br>
          <input class="ui right floated button positive large" type="submit" value="Upload Photo"></input>

        </form>

        <br><br><br><br>
        <h4 class="ui horizontal divider">
          Upload Batch
        </h4>
        <br>

        <div class="field">
          <div class="ui action input">
              <input type="text" id="_attachmentsName" readonly="">
              <label for="attachmentsName" class="ui icon button btn-file">
                   <i class="folder open icon"></i>
                   <input type="file" id="attachmentsName" name="upload[]" style="display: none" multiple>
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
