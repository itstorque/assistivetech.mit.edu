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

      <?php $album = $_GET['album']; ?>

      <div class="ui form" id="form">

        <?php if ($album): ?>
          <button class="ui button large" id="backButton" onclick="location.href='/admin/photos'"><i class="angle left icon"></i>Go Back</button>
          <button class="ui positive button large" id="newAlbum" onclick="location.href='/admin/upload?album=<?php echo $album; ?>'"><i class="upload icon"></i>Upload Photos</button>
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

			<br>
			<br>

	  <script src="/js/admin_photos.js"></script>

	</body>

</html>
