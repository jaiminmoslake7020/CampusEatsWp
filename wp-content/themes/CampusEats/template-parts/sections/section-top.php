<section id="top-content" class="top main-section alternate ">
    <section class="sub-section">
        <div class="app-info">
            <h4 class="article-title">Connecting all the Langara cafes.</h4>
            <div class=" app-cafes ">
                <?php
                $args = array(
                    'category_name' => 'Cafes',
                    'meta_key' => 'order',
                    'orderby' => 'meta_value meta_value_num',
                    'order' => 'ASC'
                );
                $cafes_query = new WP_Query($args);

                $i = 0;
                if ($cafes_query->have_posts()) :
                    while ($cafes_query->have_posts()) :
                        $cafes_query->the_post();
                        $activeCLass = "";
                        if (true) {
                            //$activeCLass = ' active ';
                        }
                        ?>
                        <div <?php post_class(' cafe ' . $activeCLass . ' ', get_the_ID()); ?> >
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="app-welcome-screen">
            <article class="screen-item">
                <div class="screen-box">

                    <?php
                    $args = array(
                        'category_name' => 'Screens',
                        'posts_per_page' => 1,
                        'orderby' => 'rand'
                    );
                    $cafes_query = new WP_Query($args);

                    $i = 0;
                    if ($cafes_query->have_posts()) :
                        while ($cafes_query->have_posts()) :
                            $cafes_query->the_post();
                            ?>
                            <div <?php post_class(' screen-regular  ', get_the_ID()); ?> >
                                <?php
                                the_post_thumbnail();
                                ?>
                            </div>
                            <?php
                            $i++;
                        endwhile;
                    endif;
                    ?>
                    <!--                    Retrive welcome screen post and display thumbanail    -->

                </div>
            </article>
        </div>
    </section>
</section>
