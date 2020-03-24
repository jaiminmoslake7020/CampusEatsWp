<section id="screen-content" class="screens main-section alternate " >
	<h3 class=" section-title" >Screens</h3>
	<section class="sub-section" >
		<?php

		$args = array (
			'category_name'     => 'Screens',
            'orderby' => ''
		);
		$screens_query = new WP_Query( $args );


		$i = 0 ;
		if ($screens_query->have_posts() ) :
			while ( $screens_query->have_posts() ) :
				$screens_query->the_post();

				$activeCLass = "" ;
				if( $i == 0 ){
					$activeCLass = ' active ' ;
				}
				?>
				<article class="screen-item <?= $activeCLass ; ?>  <?php implode('  ', get_post_class());  ?> ">
					<h4 class="article-title"><?php the_title(); ?></h4>
					<div class="screen-box">
						<div class="screen-regular"><img src="<?php  the_post_thumbnail_url(); ?>"
						                                 alt="<?php the_title(); ?>"></div>
					</div>
				</article>

				<?php
				$i++;
			endwhile;
		else :
			echo "no posts";
		endif;

		?>
	</section>
</section>
