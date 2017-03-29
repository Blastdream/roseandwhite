<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/contact.css">
        <title>Page de contact</title>
</head>
<body>
        <div class="top">
                <a href="galerie.php"><img src="image/logo2.png" alt="Signature de l'artiste Romain larbre"></a>
                <nav class="menu">
                       <?php get_header('header.php'); ?>
                </nav>
        </div>
        <div class="formulaire">
                <p>Vous pouvez me contacter via ce formulaire</p>
                <form id="contact-form" class="form" action="#" method="POST" role="form">
                        <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
                        </div>                            
                      
                        <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                        </div>                            
                      
                        <div class="form-group">               
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                        </div>                            
                      
                        <div class="form-group">                
                                <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>                                 
                        </div>
                      
                        <div class="text-center">
                                <button type="submit" class="envoyer">Envoyer</button>
                        </div>
                </form>
                
                <?php 
                if ( have_posts() ) {
                        while ( have_posts() ) {
                                the_post();         
                                echo get_field('adresse_mail');                                              
                        } 
                } 
                get_footer('footer.php');
                ?>
          </div>
</body>
</html>

