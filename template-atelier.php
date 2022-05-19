<?php /* Template Name: Atelier */ ?>
<?php get_header() ?>
<main class="site__main">
   <?php if (have_posts()): the_post(); ?>
   <?php the_post_thumbnail(); ?>
        <?php the_title() ?>
        
        <?php 
         $image = get_field('image');
         if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
         <?php endif ?>



         <h3><?php the_title() ?></h3>

         <h4>Description</h4>
         <p><?php the_field('description'); ?><p>
        
         <h4>Animateur</h4>
         <?php the_field('animateur'); ?>
         <h4>Date de début</h4>
         <?php the_field('date_de_debut'); ?>
         <h4>Date de fin</h4>
         <?php the_field('date_de_fin'); ?>
         <h4>Jour de la semaine</h4>
         <?php the_field('jour_de_la_semaine'); ?>
         <h4>L'heure du début</h4>
         <?php the_field('heure_de_debut'); ?>
         <h4>L'heure de fin</h4>
         <?php the_field('heure_de_fin'); ?>
         <h4>La durée</h4>
         <?php the_field('duree'); ?>
         <h4>Le local</h4>
         <?php the_field('local'); ?>
         



         
         <?php the_content() ?>

</main>
<?php get_footer() ?>