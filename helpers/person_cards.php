<?php

	$directory = 'resources/images/people';

	$is_admin = $_SERVER['REQUEST_URI'] == '/admin/content';

	if ($is_admin)
		$scan_directory = __DIR__.'/../'.$directory;
	else
		$scan_directory = $directory;

	function card($name, $file) {

		global $scan_directory, $directory, $is_admin;

		if ($is_admin) {

			$old_file = $scan_directory."/".$file;

			$rename_post = "$.post('/helpers/edit_file.php', {
				'file': '$old_file',
				'action': 'rename',
				'dest': document.getElementById('$name').value}, function() {

		      $('#form').addClass('success')

		      closeAllAccordions()

		    })
		      .done(function() {

		        $('#form').removeClass('loading')
				location.reload();

			  })";

  			$delete_post = "$.post('/helpers/edit_file.php', {
  				'file': '$old_file',
  				'action': 'delete'}, function() {

  		      $('#form').addClass('success')

  		      closeAllAccordions()

  		    })
  		      .done(function() {

  		        $('#form').removeClass('loading')
  				location.reload();

  			  })";

		    echo "<div class=\"personCard\">
				    <img src=\"/$directory/$file\">
					<div class=\"editor\">
						<div class=\"ui mini input\">
							<input type=\"text\" placeholder=\"$name\" value=\"$name\" id=\"$name\">
						</div>
						<br/>
						<a class=\"ui label\" onclick=\"$rename_post\">Update Name</a>
						<a class=\"ui red label\" onclick=\"$delete_post\">Delete Photo</a>
					</div>
				  </div>";

		} else {

		    echo "<div class=\"personCard\">
				    <img src=\"/$directory/$file\">
				    <h2>$name</h2>
				  </div>";

		}

	}

	foreach (scandir($scan_directory) as $file) {

		if ($file !== '.' && $file !== '..') {
			$name = explode(".", $file)[0];
			card($name, $file);
		}

	}

	if ($is_admin)
		echo "<br/>
				<button class=\"ui right floated labeled icon button positive large\" onclick=\"location.href='upload_member'\">
				  <i class=\"plus icon\"></i>
				  Upload New Photo
				</button><br/>";

?>
