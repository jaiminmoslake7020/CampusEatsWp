<?php ?>
<section id="needs-content" class="needs main-section  ">
    <section class="sub-section">
        <p class="question">Why CampusEats?</p>
        <div class="answer-box">
            <?php

            $args = array(
                'category_name' => 'Needs',
                'orderby' => ''
            );
            $needs_query = new WP_Query($args);

            $i = 0;
            if ($needs_query->have_posts()) :
                while ($needs_query->have_posts()) :
                    $needs_query->the_post();

                    $activeCLass = "";
                    if ($i == 0) {
                        $activeCLass = ' active ';
                    }
                    ?>
                    <div <?php post_class(' answers answer-' . ($i + 1) . ' ', get_the_ID()); ?> >
                        <div class="icon-box">
                            <i class=" fas fa-search "></i>
                        </div>
                        <div class="text-info">
                            <p class=" answer-text "><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </div>
    </section>
</section>
