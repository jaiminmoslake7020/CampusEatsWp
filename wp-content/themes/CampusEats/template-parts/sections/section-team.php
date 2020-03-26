<?php ?>
<section id="team-content" class="team main-section">
    <h3 class=" section-title">Meet the Team</h3>
    <section class="sub-section">
        <figure>
            <?php

            $args = array(
                'category_name' => 'Team',
                'meta_key' => 'order',
                'orderby' => 'meta_value meta_value_num',
                'order' => 'ASC'
            );
            $team_query = new WP_Query($args);

            $i = 0;
            if ($team_query->have_posts()) :
                while ($team_query->have_posts()) :
                    $team_query->the_post();

                    $activeCLass = "";
                    if ($i == 0) {
                        $activeCLass = ' active ';
                    }
                    ?>
                    <div <?php post_class(' team-member ' . $activeCLass . ' ', get_the_ID()); ?> >
                        <img src="<?php the_post_thumbnail_url(); ?>"/>
                        <p><?php the_title(); ?></p>
                        <h3><?php the_content(); ?></h3>
                    </div>
                    <?php
                    $i++;
                endwhile;
            endif;
            ?>
        </figure>
    </section>
</section>

