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

      <?php $album = $_GET['album']; ?>

      <?php if ($album): ?>
        <button class="ui button large" id="backButton" onclick="location.href='/admin/photos'"><i class="angle left icon"></i>Go Back</button>
        <button class="ui positive button large" id="newAlbum"><i class="upload icon"></i>Upload Photo</button>
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
                  <td class="center aligned collapsing"><a onclick="delete('.$file.')"><i class="trash icon red fitted link"></i></a></td>
                </tr>';

                echo $tag;

              }

            } else {

              $dirs = glob('../resources/images/albums/*' , GLOB_ONLYDIR);

              foreach (array_reverse($dirs) as $dir) {

                $name = substr($dir, strrpos($dir, '/') + 1);

                $tag =
                '<tr>
                  <td class="collapsing">
                    <a href="photos?album='.$name.'"><i class="folder icon"></i> '.$name.'</a>
                  </td>
                  <td>Initial commit</td>
                  <td class="right aligned collapsing">filemtime</td>
                </tr>';

                echo $tag;

              }

            }

            ?>

        </tbody>
      </table>

			<br>
			<br>

	  <script src="/js/admin_content.js"></script>

	</body>

</html>
