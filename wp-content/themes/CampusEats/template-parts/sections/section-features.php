<?php ?>
<section id="features-content" class="features-container main-section alternate ">
    <h3 class=" section-title">Features</h3>
    <div class="sub-section">
        <div class="feature-box">
            <?php

            $args = array(
                'category_name' => 'Features',
                'meta_key' => 'order',
                'orderby' => 'meta_value meta_value_num',
                'order' => 'ASC'
            );
            $features_query = new WP_Query($args);

            $i = 0;
            if ($features_query->have_posts()) :
                while ($features_query->have_posts()) :
                    $features_query->the_post();

                    $activeCLass = "";
                    if ($i == 0) {
                        $activeCLass = ' active ';
                    }
                    ?>
                    <div <?php post_class(' features feature-' . ($i + 1) . ' ', get_the_ID()); ?> >
                        <div class="icon-box ">
                            <img src="<?php the_post_thumbnail_url(); ?>"
                                 alt="<?php the_title(); ?>">
                        </div>
                        <div class="text-info">
                            <h4><?php the_title(); ?></h4>
                            <p class=" feature-text "><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
