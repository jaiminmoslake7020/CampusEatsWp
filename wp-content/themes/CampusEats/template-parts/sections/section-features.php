<?php ?>
<section id="features-content" class="features main-section alternate " >
    <h3 class=" section-title" ><?php the_title(); ?>></h3>
    <div class="sub-section" >
        <div class="feature-box">
	            <?php

	            $args = array (
		            'category_name'     => 'Features',
		            'orderby' => ''
	            );
	            $features_query = new WP_Query( $args );

	            $i = 0 ;
	            if ($features_query->have_posts() ) :
	            while ($features_query->have_posts() ) :
	            $features_query->the_post();

	            $activeCLass = "" ;
	            if( $i == 0 ){
		            $activeCLass = ' active ' ;
	            }
	            ?>
            <div class="features feature-1 " >
                <div class="icon-box"-<?= ($i+1); ?> <?php implode('  ', get_post_class());  ?> " >
                    <img src="<?php the_post_thumbnail_url(); ?>"
						                                 alt="<?php the_title(); ?>"></div>
                </div>
                <div class="text-info">
                <h4><?php the_title(); ?></h4>
                <p class=" feature-text " ><?php the_content(); ?>></p>
                </div>
                <?php
                $i++;
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>




<!--            </div>-->
<!--            <div class="features feature-2 " >-->
<!--                <div class="icon-box" >-->
<!--                    <img src="images/features/saving.png" alt="Save" />-->
<!--                </div>-->
<!--                <div class="text-info">-->
<!--                    <h4>Time Saving</h4>-->
<!--                    <p class="  feature-text " >Order from anywhere inside or outside the campus and just pickup</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="features feature-3 " >-->
<!--                <div class="icon-box" >-->
<!--                    <img src="images/features/food.png" alt="Location" />-->
<!--                </div>-->
<!--                <div class="text-info">-->
<!--                    <h4>Location</h4>-->
<!--                    <p class="  feature-text " >Get location of the cafe in the campus.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--      I am still working on HTML/CSS part for this  -->

    </section>
</section>
