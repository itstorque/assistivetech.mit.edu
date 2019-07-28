<?php

  exec("pwd 2>&1", $output_pwd, $return_var_pwd);

  exec("git pull 2>&1", $output, $return_var);

  echo implode("|",$output_pwd).">>>".implode("|",$output);

 ?>
