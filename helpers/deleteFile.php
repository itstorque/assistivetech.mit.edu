<?php

  $fileDeleted = $_POST['src'];

  $name = substr($fileDeleted, strrpos($fileDeleted, '/') + 1);

  rename($fileDeleted, '../trash/'.$name);

?>
