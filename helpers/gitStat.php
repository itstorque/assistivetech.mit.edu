<?php

  exec("git fetch --dry-run 2>&1", $output, $return_var);

  echo implode("|",$output);

 ?>
