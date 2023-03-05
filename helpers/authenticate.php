<?php

  if (strpos($_SERVER['HTTP_HOST'], 'assistivetech.mit.edu/admin') !== false) {
    header("Location: https://assistivetech.mit.edu:444/admin");
  }

 ?>
