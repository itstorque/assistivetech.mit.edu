<?php

  $output = shell_exec("cd /var/www/git-repo && git pull 2>&1");

  echo implode("|",$output);

 ?>
