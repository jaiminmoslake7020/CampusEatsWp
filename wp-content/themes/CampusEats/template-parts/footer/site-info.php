<?php
$args = array(
    'category_name' => 'Site-Info',
    'meta_key' => 'order',
    'orderby' => 'meta_value meta_value_num',
    'order' => 'ASC'
);
$site_info_query = new WP_Query($args);

$i = 0;
if ($site_info_query->have_posts()) :
    while ($site_info_query->have_posts()) :
        $site_info_query->the_post();
        $activeCLass = "";
        ?>
        <div <?php post_class(' site-info ' . $activeCLass . ' ', get_the_ID()); ?> >
            <h2><?php the_title(); ?></h2>
            <p>
                <q>
                    <?php the_content(); ?>
                </q>
            </p>
        </div>
        <?php
        $i++;
    endwhile;
endif;
?>