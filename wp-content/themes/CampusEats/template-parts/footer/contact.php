<?php
$args = array(
	'category_name' => 'Contact Us',
	'meta_key' => 'order',
	'orderby' => 'meta_value meta_value_num',
	'order' => 'ASC'
);
$contact_query = new WP_Query($args);

$i = 0;
if ($contact_query->have_posts()) :
	while ($contact_query->have_posts()) :
		$contact_query->the_post();
		$activeCLass = "";
		if (true) {
			//$activeCLass = ' active ';
		}
		?>
		<div <?php post_class(' cafe ' . $activeCLass . ' ', get_the_ID()); ?> >
			<h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
		</div>
		<?php
		$i++;
	endwhile;
endif;
?>