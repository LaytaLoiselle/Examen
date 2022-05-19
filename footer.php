<footer class="site__footer">
<h5>Travaux en Création et Animation 3d</h5>
<hr>
    <div class="site__footer__colonne">
        <section> 	
            <?php get_sidebar( 'footer_colonne_1' ); ?>
        </section>
        <section>
        <?php get_sidebar( 'footer_colonne_2' ); ?>
        </section>
        <section>
        <?php get_sidebar( 'footer_colonne_3' ); ?>
        </section> 
    </div>

    <h5>Pages supplémentaires</h5>
    <hr>

    <div class="site__footer__ligne">

        <section class="footer__menu">
        <?php
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="fff"><path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>';
                 wp_nav_menu(array(
                        "menu"=>"simple",
                        "container"=>"nav",
                        "container_class"=>"footer__menu__nav",
                        "menu_class"=>"footer__menu__nav__ul",

                        "link_before"=>$icone)); ?>
        <div class="footer__recherche">
        </section>

        <section">
        <?php get_sidebar( 'footer_ligne_1' ); ?>
            <!-- <p> 4w4 -conception d'interface et développement web -TIM- Collège de Maisonneuve </p> -->
        </section>
        <section>
        <?php get_sidebar( 'footer_ligne_2' ); ?>
        </section>

        <section>
            <?php get_sidebar( 'footer_ligne_3' ); ?>
        </section>
        
        <section class="footer__recherche">
                <?php get_search_form(); ?>
        </section>


        <section class="footer__copyright">
            <p>&copy; Tout droit réservé -TIM- Collège de Maisonneuve</p>
        </section>
        <section class="footer__auteur">
            <p>Auteur : Isaac Loiselle</p>
    </section>
    </div>

</footer>
<div class="boite__modale">
    <svg class="boite__modale__ferme" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
    <article class="boite__modale__texte"></article>
</div>
<div class="boite__carrousel">
    <svg class="boite__carrousel__ferme" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
    <section class="boite__carrousel__nav"></section>
</div>
</body>
<?php wp_footer(); ?>
</html>