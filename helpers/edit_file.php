<?php

	if($_POST['action'] == 'rename') {

		rename($_POST['file'], dirname($_POST['file']).'/'.$_POST['dest'].'.'.pathinfo($_POST['file'], PATHINFO_EXTENSION));

	}

	if($_POST['action'] == 'delete') {

		unlink($_POST['file']);

	}

	if($_POST['action'] == 'upload_image') {

		# this has checks for PNG and JPG types

		$ftype = strtolower(pathinfo(basename($_FILES["upload_image"]["name"]), PATHINFO_EXTENSION));

		$file = $_POST['target_dir'] . $_POST['name'] . '.' . $ftype;
		$can_upload = 1;

		$file = __DIR__.'/../'.$file;

		echo $file;

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["upload_image"]["tmp_name"]);
		  if($check !== false) {
		    $can_upload = 1;
		  } else {
		    $can_upload = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($file)) {
		  echo "Sorry, file already exists.";
		  $can_upload = 0;
		}

		// Allow certain file formats
		if($ftype != "jpg" && $ftype != "png") {
		  echo "You can only upload JPGs and PNGs";
		  $can_upload = 0;
		}

		// Check if $can_upload is set to 0 by an error
		if ($can_upload == 0) {
		  echo "<br/><br/><h2>ERROR UPLOADING</h2>";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["upload_image"]["tmp_name"], $file)) {
		    echo "<h2>The file ". basename( $_FILES["upload_image"]["name"]). " has been uploaded successfully</h2>";
		  } else {
		    echo "<br/><br/><h2>AN ERROR HAS OCCURRED</h2>";
		  }
		}

		unlink($_POST['file']);

		header("Location: ".$_POST['redirect']);

	}

 ?>
