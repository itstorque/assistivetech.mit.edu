<?php

  $target_dir = $_POST['loc'];

  $total = count($_FILES['upload']['name']);

  for( $i=0 ; $i < $total ; $i++ ) {

    $fileName = $_FILES['upload']['name'][$i];

    if ($fileName != "") {

      $newFilePath = '../'.$target_dir.'/'.$fileName;

      if (move_uploaded_file($tmpFilePath, $newFilePath)) {

        

      }

    }

  }

 ?>
