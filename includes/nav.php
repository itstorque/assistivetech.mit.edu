<?php

  $showLinks = True;

  $aboutSelection = $applySelection = $projectsSelection = $eventsSelection = $homeSelection = False;

  $pageName = basename($_SERVER["SCRIPT_FILENAME"], '.php');

  ${$pageName."Selection"} = "class='active'";

  $hideLink = ["pageDown"];

  $darkBlockClassmap = ["401", "404", "pageDown"];

  $scrolledClassmap = ["home", "apply", "events"];

  $classmap = "topnav";

  if (in_array($pageName, $darkBlockClassmap)) {

    $classmap .= " darkBlock";

  } elseif (in_array($pageName, $scrolledClassmap)) {

    $classmap .= " scrolled";

  }

  if (in_array($pageName, $hideLink)) {

    $showLinks = False;

  }

?>

<div class="<?php echo $classmap; ?>" id="topNav">
  <?php if ($showLinks): ?>
  <a href="/" class="logo"><div id="logoContent"></div></a>
  <a href="/about" style="margin-right: 20px;" <?php echo $aboutSelection ?> >About us</a>
  <!--<a href="/apply" <?php echo $applySelection ?> >Apply</a>-->
  <a href="/projects" <?php echo $projectsSelection ?> >Projects</a>
  <a href="/events" <?php echo $eventsSelection ?> >Hackathon</a>
  <a href="/home" <?php echo $homeSelection ?> >Home</a>
  <?php endif; ?>
  <a href="javascript:void(0);" class="icon logo" onclick="logoClick()">
    <div id="menuBarButton" style="width: 50px; height: 50px;"><div class="open1"></div><div class="open3"></div><div class="open2"></div></div>
  </a>
</div>
