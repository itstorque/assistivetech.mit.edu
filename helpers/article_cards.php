<?php

	if (is_file('articles.json')) {
		$file = 'articles.json';
	} else {
		$file = '../articles.json';
	}

	ob_start();
	include($file);
	$content = ob_get_contents();
	ob_end_clean();

	echo "<script style='display: none !important;'>articles = ".$content."</script>";

?>

<div class="articles_container">

	<div class="article" onclick="URL HERE OR SOMETHING">
	  <div class="content">

      <img src="http://news.mit.edu/sites/mit.edu.newsoffice/files/styles/news_article_image_top_slideshow/public/images/2019/ATHack-2019-Ellen-MIT-00_0.jpg?itok=O_luAbB7" width="275" height="240">

	    <div>
        <h6>MIT News</h6>
        <h4>Developing tech for, and with, people with disabilities</h4>
	      <hr>
	      <p>Sixth annual Assistive Technologies Hackathon paired students with client co-designers to create innovative solutions to the everyday problems they face.</p>
	    </div>

	  </div>
	</div>

</div>
