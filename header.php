<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
    <style>
        .site__footer {
            background-color: <?= get_theme_mod('couleur_background_footer');?>;
        }

        .site__header {
            background-color: <?= get_theme_mod('couleur_background_body');?>;
        }
    </style>
</head>
<body  <?php body_class("site"); ?>>
<header class="site__header">
    <section class="site__header__titre">
    <?php echo get_custom_logo(); ?>
    <h1 class="header__titre">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php bloginfo('name'); ?></a>
    </h1>
    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="util">
        <div class="util_lien">
        <?php get_sidebar( 'entete_1' ); ?>
        </div>
        <?php get_search_form(); ?>
    </section>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
    </label>
    <?php wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav")); ?>
</section>
