<section id="testimonials-content" class="testimonials main-section alternate " >
    <h3 class=" section-title" >Testimonials</h3>
    <section class="sub-section" >
	    <?php

	    $args = array(
		    'category_name' => 'Testimonials'
	    );
	    $testimonials_query = new WP_Query( $args );

	    $i = 0;
	    if ( $testimonials_query->have_posts() ) :
		    while ( $testimonials_query->have_posts() ) :
			    $testimonials_query->the_post();

			    $activeCLass = "";
			    if ( $i == 0 ) {
				    $activeCLass = ' active ';
			    }
			    ?>
                <div <?php post_class( ' testimonial testimonial-user-'.( $i + 1 ).' ' , get_the_ID()  ); ?>  >
                    <div class="icon-box">
                        <img src="<?php the_post_thumbnail_url(); ?>"  alt="<?php the_title(); ?>" />
                    </div>
                    <div class="text-info">
                        <h3><?php the_title(); ?></h3>
                        <p><i class="fas fa-quote-left"></i><?php the_content(); ?><i class="fas fa-quote-right"></i></p>
                    </div>
                </div>
			    <?php
			    $i ++;
		    endwhile;
	    endif;
	    ?>
    </section>
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/labbi.jpg">-->
<!--            </div>-->
<!--            <div class="text-info" >-->
<!--                <h3>Lilly</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>Fantastic app. Works great. I was fed up with the individual apps and really wanted to be all those on one app. Excellent job <i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="testimonial testimonial-user2">-->
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/raj.jpg">-->
<!--            </div>-->
<!--            <div class="text-info"  >-->
<!--                <h3>Raj</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>Campus Eats works great. Its easy to install and the customization makes its really easy to customize the item selection.Thanks to the team. I love this service <i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="testimonial testimonial-user3">-->
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/sharik.jpg">-->
<!--            </div>-->
<!--            <div class="text-info"  >-->
<!--                <h3>Sharik</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>Looks very promising so far! I have been searching for an app like this one. I am looking forward to getting much from it. Dont know what I'd do without this app.<i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="testimonial testimonial-user4">-->
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/gurdarshan.jpg">-->
<!--            </div>-->
<!--            <div class="text-info"  >-->
<!--                <h3>Gurdarshan</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>I would say this app is great for convinence. All cafes at one place just WOW!!!! <i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="testimonial testimonial-user5">-->
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/satyam.jpg">-->
<!--            </div>-->
<!--            <div class="text-info"  >-->
<!--                <h3>Satyam</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>I love this app, I can order from all the cafes at once. It's amazing. <i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="testimonial testimonial-user6">-->
<!--            <div class="icon-box">-->
<!--                <img src="images/testimonials/himauli.jpeg">-->
<!--            </div>-->
<!--            <div class="text-info"  >-->
<!--                <h3>Himauli</h3>-->
<!--                <p><i class="fas fa-quote-left"></i>The interface is very clear and all the featurs are easily accessible.<i class="fas fa-quote-right"></i></p>-->
<!--            </div>-->
<!--        </div>-->

