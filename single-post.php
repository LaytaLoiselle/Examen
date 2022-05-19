<?php get_header() ?>
<main class="site__main">
     <?php if (have_posts()): while(have_posts()):the_post(); ?>
     <article class="cours">
        <h3 class="cours_titre">
            <?php echo get_the_title(); ?>
        </h3>
        <div class="padding_gauche">
           <section class="cours_contenu">
         <?php the_post_thumbnail("thumbnail"); ?>
            <?php the_content(); ?>
         </section>
         </article>
         <?php endwhile ?>
         <?php endif ?>
         </div>
</main>
<?php get_footer() ?>