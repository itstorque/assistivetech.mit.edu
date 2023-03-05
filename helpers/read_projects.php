<?php

  $year_begin = 2016;
  $selectedYear = $latest_year = 2019;

  $file = 'teams.json';

  if (! is_file($file)) {

    $file = '../'.$file;

  }

  ob_start();
  include($file);
  $teamData = ob_get_contents();
  ob_end_clean();

  $teamData = str_replace(array("\n", "\r"), '', $teamData);

?>

<script>teamData = JSON.parse(`<?php echo $teamData; ?>`);</script>
