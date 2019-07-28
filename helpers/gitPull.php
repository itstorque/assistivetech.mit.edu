<?php

  exec("git pull", $output, $return_var);

  echo implode("|",$output);

 ?>
