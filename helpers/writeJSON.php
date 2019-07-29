<?php

  $json_data = $_POST['json_data'];

  $json_file = fopen("../teams.json", "w") or die("Unable to open file!");

  fwrite($json_file, $json_data);

  fclose($json_file);

?>
