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
			<?php get_header('header.php'); ?>
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

		<div class="expo-collectives">
			<h2>Expositions collectives</h2>
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

			<div class="expo-personnelles">
				<h2>Expositions personnelles</h2>
				<div class="zone-col">
					<div class="groupe-col">
					<?php 
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();         
				        	if( have_rows('expositions_personelles_a_propos') ):

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
			<div class="presse">
				<h2>Presse</h2>
				<div class="presse-text">
					<p><?php 
							echo get_field('presse_a_propos');
						?>
					</p>
				</div>
			</div>

			<hr>

			<div class="prix">
				<h2>Prix</h2>
				<div class="prix-text">
					<p><?php 
							echo get_field('prix_a_propos');
						?>
					</p>
				</div>
			</div>

			<br>

			<div class="contact"></div>
			<div class="social"></div>
	</div>
</body>
</html>
