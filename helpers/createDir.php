<?php

  $dir_name = $_POST['dir_name'];
  $location = $_POST['location'];

  $dir = "../".$location."/".$dir_name;

  if (is_dir($dir) === false) {

      mkdir($dir, 0700);

  }

?>
