<?php get_header() ?>
<main class="principal">
    <div class="filtre">
        <a href="?cletri=title&ordre=asc">Ascendant</a>
        <a href="?cletri=title&ordre=desc">Descandant</a>
    </div>  
<?php
    wp_nav_menu(array(
        "menu" => "categorie_cours",
        "container" => "nav"
    ))
?>
    <section class="formation">
        <h3>Liste des cours du programme TIM</h3>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                    <?php
                    if(is_category(array('cours','web','jeu','utilitaire','design','creation-3d','video'))):
                    get_template_part('gabarit/content','cours');
                    else:
                    get_template_part('gabarit/content','macrame'); 
                    endif
                    ?>
                <?php endwhile ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>