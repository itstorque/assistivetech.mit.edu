<?php

	$directory = 'resources/images/old_people';


	$scan_directory = $directory;


	foreach (scandir($scan_directory) as $file) {

		if ($file !== '.' && $file !== '..') {
			$name = explode(".", $file)[0];
			card($name, $file);
		}

	}


?>
