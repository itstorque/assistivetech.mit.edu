<?php

  $output = shell_exec("git pull");

  echo implode("|",$output);

 ?>
