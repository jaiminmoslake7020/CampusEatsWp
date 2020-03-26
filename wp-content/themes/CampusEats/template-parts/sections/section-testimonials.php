<section id="testimonials-content" class="testimonials main-section alternate ">
    <h3 class=" section-title">Testimonials</h3>
    <section class="sub-section">
        <?php

        $args = array(
            'category_name' => 'Testimonials'
        );
        $testimonials_query = new WP_Query($args);

        $i = 0;
        if ($testimonials_query->have_posts()) :
            while ($testimonials_query->have_posts()) :
                $testimonials_query->the_post();

                $activeCLass = "";
                if ($i == 0) {
                    $activeCLass = ' active ';
                }
                ?>

                <div <?php post_class(' testimonial testimonial-user-' . ($i + 1) . ' ', get_the_ID()); ?> >
                    <div class="icon-box">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"/>
                    </div>
                    <div class="text-info" >
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <i class="fas fa-quote-left"></i>
                                <?php the_content(); ?>
                            <i class="fas fa-quote-right"></i>
                        </p>
                    </div>
                </div>

                <?php
                $i++;
            endwhile;
        endif;
        ?>
    </section>
</section>

