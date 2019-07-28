<?php

  $year_begin = 2016;
  $selectedYear = $latest_year = 2019;

  ob_start();
  include('teams.json');
  $teamData = ob_get_contents();
  ob_end_clean();

  if ($teamData=="") {

    ob_start();
    include('../teams.json');
    $teamData = ob_get_contents();
    ob_end_clean();

  }

  $teamData = str_replace(array("\n", "\r"), '', $teamData);

?>

<script>teamData = JSON.parse(`<?php echo $teamData; ?>`);</script>
