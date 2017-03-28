<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();         
        echo "<h1>".get_the_title()."</h1>";
        echo "<br/>";
        the_content();
        echo "<br/>";

        if( have_rows('oeuvre') ):

                // loop through the rows of data
            while ( have_rows('oeuvre') ) : the_row();

                // display a sub field value
                the_sub_field('titre_oeuvre');

            endwhile;

        else :

            // no rows found

        endif;

   		echo "<br/>";

        if( have_rows('oeuvre') ):

                // loop through the rows of data
            while ( have_rows('oeuvre') ) : the_row();

                // display a sub field value
                the_sub_field('cartel_oeuvre');

            endwhile;

        else :

            // no rows found

        endif;
        }
    } ?>

        <img src="<?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();         

             if( have_rows('oeuvre') ):

                    // loop through the rows of data
                while ( have_rows('oeuvre') ) : the_row();

                    // display a sub field value
                    the_sub_field('image_oeuvre');

                endwhile;

            else :

                // no rows found

            endif;
      
    } }?>">

} ?>