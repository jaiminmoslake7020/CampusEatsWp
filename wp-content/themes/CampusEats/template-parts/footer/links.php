<?php
$args        = array(
	'category_name' => 'Links',
	'meta_key'      => 'order',
	'orderby'       => 'meta_value meta_value_num',
	'order'         => 'ASC'
);
$links_query = new WP_Query( $args );

$i = 0;
if ( $links_query->have_posts() ) :
	while ( $links_query->have_posts() ) :
		$links_query->the_post();
		$activeCLass = "";
		?>
            <a <?php post_class( ' download-link ' . $activeCLass . ' ', get_the_ID() ); ?> href=""><?php the_post_thumbnail(); ?></a>
		<?php
		$i ++;
	endwhile;
endif;
?>