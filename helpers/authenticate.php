<?php

  if (strpos($_SERVER['HTTP_HOST'], 'assistivetech.mit') !== false) {

    $request = parse_url($_SERVER['REQUEST_URI']);
    $path = $request["path"];

    $result = trim(str_replace(basename($_SERVER['SCRIPT_NAME']), '', $path), '/');

    $result = explode('/', $result);
    $max_level = 2;
    while ($max_level < count($result)) {
        unset($result[0]);
    }
    $result = '/'.implode('/', $result);

    header("Location: https://assistivetech.scripts.mit.edu:444".$result);

  }

 ?>
