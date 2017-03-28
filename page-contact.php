<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();         
        echo "<h1>".get_the_title()."</h1>";
        echo "<br/>";
        the_content();
        echo "<br/>";
        echo get_field('adresse_mail');
       
        
        $image = get_field('image-oeuvre'); 
        echo "<img src='".$image['url']."' alt='".$image['alt']."'>";
	} 
} ?>