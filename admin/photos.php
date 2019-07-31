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

			<h2 class="ui header">Manage Photos</h2>
      <h2 class="ui sub header">Update, delete and add photos to the gallery page.</h2>

      <br><br>

      <?php

        $album = $_GET['album'];

        $desc_url = '../resources/images/albums/'.$album."/desc";

        if ($album) {

          $desc = file_get_contents($desc_url);

        }

        ?>

      <div class="ui form" id="form">

        <?php if ($album): ?>
          <button class="ui button large" id="backButton" onclick="location.href='/admin/photos'"><i class="angle left icon"></i>Go Back</button>
          <button class="ui positive button large" id="newAlbum" onclick="location.href='/admin/upload?album=<?php echo $album; ?>'"><i class="upload icon"></i>Upload Photos</button>

          <br><br>
          <h3 class="ui header">Album Description</h3>
          <textarea id="albumDesc" rows="3" placeholder="Album Description"><?php echo $desc; ?></textarea>
          <br><br>

            <div class="ui success message">
              <i class="close icon"></i>
              <div class="header">Success Updating Description</div>
              <p>The description of <?php echo $album; ?> has been successfully updated!</p>
            </div>
            <div class="ui error message">
              <i class="close icon"></i>
              <div class="header">Error Updating Description</div>
              <p>An error occured while updating <?php echo $album; ?>.</p>
            </div>

          <button class="ui button right floated" onclick="updateDesc('<?php echo $desc_url; ?>')"><i class="pencil icon"></i>Update Description</button>
          <br>

        <?php else: ?>
          <button class="ui positive button large" id="newAlbum"><i class="add icon"></i>Create New Album</button>
        <?php endif; ?>
        <br><br>

        <table class="ui celled striped table">
          <thead>
            <tr><th colspan="3">
              <?php

                if ($album) { echo $album; }
                else { echo "Albums"; }

                ?>
            </th>
          </tr></thead>
          <tbody id="itemList">

            <?php

              if ($album) {

                $files = glob('../resources/images/albums/'.$album.'/*.*');

                foreach ($files as $file) {

                  $name = substr($file, strrpos($file, '/') + 1);

                  $dateModified = date("gA, F d, Y", filemtime($file));

                  $tag =
                  '<tr>
                    <td class="">
                      <a href="photos?album='.$album.'&image='.$name.'"><i class="image icon"></i> '.$name.'</a>
                    </td>
                    <td class="right aligned collapsing">'.$dateModified.'</td>
                    <td class="center aligned collapsing"><a onclick="deleteImage(\''.$file.'\')"><i class="trash icon red fitted link"></i></a></td>
                  </tr>';

                  echo $tag;

                }

              } else {

                $dirs = glob('../resources/images/albums/*' , GLOB_ONLYDIR);

                foreach (array_reverse($dirs) as $dir) {

                  $name = substr($dir, strrpos($dir, '/') + 1);

                  $desc = file_get_contents($dir."/desc");

                  $tag =
                  '<tr>
                    <td class="collapsing">
                      <a href="photos?album='.$name.'"><i class="folder icon"></i> '.$name.'</a>
                    </td>
                    <td>'.$desc.'</td>
                  </tr>';

                  echo $tag;

                }

              }

              ?>

          </tbody>
        </table>

    		<div class="ui basic modal" id="areYouSureDelete">
    		  <div class="ui icon header">
    		    <i class="trash alternate outline icon"></i>
    		    Delete Photo
    		  </div>
    		  <div class="content">
    		    <p>Are you sure you want to delete the photo <span id="surePhotoLabel"></span>?</p>
    		  </div>
    		  <div class="actions">
    		    <div class="ui basic cancel inverted button">
    		      <i class="cancel icon"></i>
    		      Cancel
    		    </div>
    		    <div class="ui red ok inverted button" onclick="confirmDelete()">
    		      <i class="trash icon"></i>
    		      Delete
    		    </div>
    		  </div>
    		</div>
      </div>

			<br><br>

      <div class="ui modal tiny" id="album_title">
        <div class="header">Album Name
        <br><br>
        <center>
          <div class="ui form" style="width: 80%; border: 0px;">
            <input class="ui field" id="dir_name"></input>
          </div>
        </center></div>
        <div class="actions">
          <div class="ui deny button">Cancel</div>
          <div class="ui green approve button">Create</div>
        </div>
      </div>

	  <script src="/js/admin_photos.js"></script>

	</body>

</html>
