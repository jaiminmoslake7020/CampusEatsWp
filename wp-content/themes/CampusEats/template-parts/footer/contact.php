<?php
$args = array(
	'category_name' => 'Contact Us'
);
$contact_query = new WP_Query($args);

$i = 0;
if ($contact_query->have_posts()) :
	while ($contact_query->have_posts()) :
		$contact_query->the_post();
		$activeCLass = "";
		?>
		<div <?php post_class(' contact-us ' . $activeCLass . ' ', get_the_ID()); ?> >
			<h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
		</div>
		<?php
		$i++;
	endwhile;
endif;
?>