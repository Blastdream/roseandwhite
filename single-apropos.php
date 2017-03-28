<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/apropos.css">
	<title>Page à propos</title>
</head>

<body>
	<img class="logo" src="image/logo2.png" alt="Signature de l'artiste comme logo">
	<div class="header">
		<nav class="menu">
			<ul>
				<li><a href="galerie.php">Galerie</a></li>
				<li><a href="apropos.php">À propos</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div class="groupe-site">
		<div class="description">
			<p>
			<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();         
					echo get_field('description_artiste_a_propos');
				}
			}?>
			</p>
		</div>

		<hr>

		<div class="exp-collective">
			<h2>expositions collectives</h2>
			<div class="zone-col">
				<div class="groupe-col">
				<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();         
			        	if( have_rows('expositions_collectives_a_propos') ):

					 		// loop through the rows of data
					    	while ( have_rows('expositions_collectives_a_propos') ) : the_row();

					        	// display a sub field value
						        echo "<p class='annee'>";
						        the_sub_field('contenu_exposition_collective_annee');
						        echo '</p>';
					         	if( have_rows('occurrence_exposition_collective') ):
					         		echo 'patate';

							 		// loop through the rows of data
							   		while ( have_rows('occurrence_exposition_collective') ) : the_row();
										echo '<div class="text-col">';
								        // display a sub field value
								        the_sub_field('text_ligne_occurrence_collective');
										echo '</div>';
							    	endwhile; 
							    else :
									// no rows found
								endif; 
							endwhile;
				    	else :
				    		// no rows found
						endif; 
					}
				}
				?>
						       
		   		</div>
			</div>

			<hr>

			<div class="exp-personnel">
				<h2>Expositions personnelles</h2>
				<div class="zone-col">
					<div class="groupe-col">
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();         
				        	if( have_rows('expositions_personnelles_a_propos') ):

						 		// loop through the rows of data
						    	while ( have_rows('expositions_personnelles_a_propos') ) : the_row();

						        	// display a sub field value
							        echo "<p class='annee'>";
							        the_sub_field('contenu_exposition_personnelle_annee');
							        echo '</p>';
						         	if( have_rows('occurrence_exposition_personnelle') ):

								 		// loop through the rows of data
								   		while ( have_rows('occurrence_exposition_personnelle') ) : the_row();
											echo '<div class="text-col">';
									        // display a sub field value
									        the_sub_field('text_ligne_occurrence_personnelle');
											echo '</div>';
								    	endwhile; 
								    else :
										// no rows found
									endif; 
								endwhile;
					    	else :
					    		// no rows found
							endif; 
						}
					}
					?>
					</div>
				</div>
			</div>

		<hr>
			<div class="press">
				<h2>Press</h2>
				<div class="press-text">
					<p>Art actuel</p>
					<p>La montagne</p>
					<p>La dépêche du midi</p>
					<p>Wegotalent.com</p>
					<p>Brive.mag</p>
					<p>Le populaire du centr</p>
				</div>
			</div>

			<hr>

			<div class="prix">
				<h2>Prix</h2>
				<div class="prix-text">
					<p>
					Prix du public - Biennale art actuel, Brive. 2013
					</p>
				</div>
			</div>

			<br>

			<div class="contact"></div>
			<div class="social"></div>
	</div>
</body>
</html>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();         
        echo "<h1>".get_the_title()."</h1>";
        echo get_field('description_artiste_a_propos');
   
        if( have_rows('expositions_collectives_a_propos') ):

		 	// loop through the rows of data
		    while ( have_rows('expositions_collectives_a_propos') ) : the_row();

		        // display a sub field value
		        the_sub_field('contenu_exposition_collective_annee');
	        	if( have_rows('occurence_exposition') ):

				 	// loop through the rows of data
				    while ( have_rows('occurence_exposition') ) : the_row();

				        // display a sub field value
				        the_sub_field('text_ligne_occurence');

				    endwhile;
				    else :

				    // no rows found

				endif;
		    endwhile;
		    else :

		    // no rows found

		endif;



        echo "<br/>";
        echo get_field('presse_a_propos');
        echo "<br/>"; 
        echo get_field('prix_a_propos');

       
        
        $image = get_field('image-oeuvre'); 
        echo "<img src='".$image['url']."' alt='".$image['alt']."'>";
	} 
} ?>