<?php get_header() ?>
<main class="site__main">
<h3>Accueil</h3>
<div class="padding_gauche">
<section class="animation">
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#008246"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#008246"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
    <div class="animation__bloc"><svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#1679ab"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg></div>
</section>
<h4>Activités en TIM</h4>
<?php
    wp_nav_menu(array("menu"=>"menu_accueil",
                    "container"=>"nav"));
?>
<h4>Les évenements importants pour l'année</h4>
<?php
    wp_nav_menu(array("menu"=>"evenement",
                    "container"=>"nav"));
?>          
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>   
   <?php endif ?>
</main>
</div>
<?php get_footer() ?>