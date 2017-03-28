<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();         
        echo "<h1>".get_the_title()."</h1>";
        echo "<br/>";
        the_content();
        echo "<br/>";
	} 
} ?>

<a href="<?php the_field('oeuvre'); ?>">Read this!</a>