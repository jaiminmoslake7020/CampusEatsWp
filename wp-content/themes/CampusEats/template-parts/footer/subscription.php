<?php
$args               = array(
	'category_name' => 'Subscription',
	'meta_key'      => 'order',
	'orderby'       => 'meta_value meta_value_num',
	'order'         => 'ASC'
);
$subscription_query = new WP_Query( $args );

$i = 0;
if ( $subscription_query->have_posts() ) :
	while ( $subscription_query->have_posts() ) :
		$subscription_query->the_post();
		$activeCLass = "";
		?>
        <div <?php post_class( ' footer-subscribe ' . $activeCLass . ' ', get_the_ID() ); ?> >
            <?php the_content(); ?>
        </div>
		<?php
		$i ++;
	endwhile;
endif;
?>