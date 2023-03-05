<?php

	$directory = 'resources/images/people';


	$scan_directory = $directory;

	function card($name, $file) {

		global $scan_directory, $directory, $is_admin;

		
        echo "<div class=\"personCard\">
                <img src=\"/$directory/$file\">
                <h2><center>$name</center></h2>
                </div>";


	}

	foreach (scandir($scan_directory) as $file) {

		if ($file !== '.' && $file !== '..') {
			$name = explode(".", $file)[0];
			card($name, $file);
		}

	}

?>
