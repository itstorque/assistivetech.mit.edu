<?php

  exec("git pull 2>&1", $output, $return_var);

  echo implode("|",$output);

 ?>
