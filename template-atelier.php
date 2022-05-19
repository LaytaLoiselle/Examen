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

         <div class="padding_gauche">
            <h4>Description</h4>
               <p><?php the_field('description'); ?><p>
               <p>Lanimateur de l'atelier : <strong><?php the_field('animateur'); ?></strong></p>
               <p>Le local de l'atelier :  <strong><?php the_field('local'); ?></strong></p>
            <h4>Horaire et dates de l'atelier</h4>
               <p>Durée de chacune des séances est de: <strong><?php the_field('duree'); ?></strong></p>
               <p>Date de début: <strong><?php the_field('date_de_debut'); ?></strong></p>
               <p>Date de fin: <strong><?php the_field('date_de_fin'); ?></strong></p>
               <p>La formation se donnera: <strong><?php the_field('jour_de_la_semaine'); ?></strong></p>
               <p>L'heure du début   <strong><?php the_field('heure_de_debut'); ?></strong></p>
               <p>L'heure de fin <strong><?php the_field('heure_de_fin'); ?></strong> </p>
         </div>
         
         
         
         <?php the_content() ?>

</main>
<?php get_footer() ?>