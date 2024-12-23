<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner" style="position:relative; width:100%; height:100%; overflow:hidden;">
            <img class="logo" data-0="top:30%;" data-1000="top:60%;" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <video class="background-video" autoplay loop muted>
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/background-video.mp4'; ?>" poster=<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>  type="video/mp4" >
            </video>    
        </section>
        <section id="#story" class="story section-fade-in">
            <h2><span class="appear">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <!-- SECTION SWIPER -->
            <?php get_template_part('/template-parts/swiper'); ?>
            <!-- FIN SECTION SWIPER -->
            <!-- SECTION DES NUAGES -->
            <article class="section-nuage" id="place" class="section-fade-in">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img class="big_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?>" alt="grand nuage">
                    <img class="little_cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?>" alt="petit nuage"> 
                </div>

            </article>
            <!-- FIN SECTION DES NUAGES -->
        </section>


        <section id="studio" class="section-fade-in">
            <h2><span class="appear first-word">Studio</span> <span class="appear second-word">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

             <!-- SECTION NOMINATIONS -->
             <?php get_template_part('/template-parts/oscars');?>
             <!-- FIN SECTION NOMINATIONS -->

    </main><!-- #main -->

<?php
get_footer();
