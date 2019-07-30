<?php

  ob_start();
  include('content.json');
  $content = ob_get_contents();
  ob_end_clean();

  if ($content=="") {

    ob_start();
    include('../content.json');
    $content = ob_get_contents();
    ob_end_clean();

  }

  $content = str_replace(array("\n", "\r"), '', $content);

?>

<script>web_content = JSON.parse(`<?php echo $content; ?>`);</script>
