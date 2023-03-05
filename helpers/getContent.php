<?php

  if (is_file('content.json')) {

    $file = 'content.json';

  } else {

    $file = '../content.json';

  }

  ob_start();
  include($file);
  $content = ob_get_contents();
  ob_end_clean();

  $content = str_replace(array("\n", "\r"), '', $content);

?>

<script>web_content = JSON.parse(`<?php echo $content; ?>`);</script>
