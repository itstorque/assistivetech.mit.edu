<?php
session_start();
include "dirList.php";
      $TYPE = $_POST["type"];
      $myfile = fopen($applicationDir.$TYPE.".txt", "wb") or die("Unable to open file!");
      $txt = $_POST["data"];
      fwrite($myfile, $txt);
      fclose($myfile);
      ?>
