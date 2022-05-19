<?php
                    $categories = get_the_category();
                    //var_dump($categories);
                ?>
                <article class="formation__cours <?php echo $categories[1] -> slug; ?>">
                        <?php
                        $titre = get_the_title();
                        $titreFiltreCours = substr($titre, 4, -6);
                        $nbHeures = get_field("nombre_dheures");
                        $departement = get_field("departements");
                       // echo "<h1>//////// " .  $departement  . "/////////</h1>";
                        $sigleCours = substr($titre, 0, 3);
                        //$descCours = get_the_excerpt();
                        $descCours = get_the_content();
                        ?>
                    <code class="cours__desc__complet" style="display:none"> <?= $descCours; ?> </code>

                    <a href="<?php echo get_permalink() ?>">
                        <h4 class="cours__titre"> <?= $titreFiltreCours; ?></h4>
                    </a>
                    <p class="cours__sigle"><?= $sigleCours; ?> </p>
                        <div class="cours__nbre-heure">-<?= $nbHeures; ?>h</div>
                        <p class="cours__dep"><?= $departement ?></p>
                        <?php the_post_thumbnail("thumbnail"); ?>
                        <p class="cours__desc"> <?= wp_trim_words($descCours,15,'<button class="cours__desc__suite" href=#> Lire la suite </button>'); ?></p> 
                    </article>