<?php get_header(); 

// Screens Query =============================*/

$args = array (
  'category_name'     => 'Screens'
);
$screens_query = new WP_Query( $args );


if ($screens_query->have_posts() ) :
  while ( $screens_query->have_posts() ) :
    $screens_query->the_post();
      the_title( );
    //get_template_part('template-parts/section/section-screens');
  endwhile;
  else :
    echo "no posts";
endif;


// team Query =============================*/

$args = array (
    'category_name'     => 'Team'
  );
  $Team_query = new WP_Query( $args );
  
  
  if ($Team_query->have_posts() ) :
    while ( $Team_query->have_posts() ) :
      $Team_query->the_post();
        the_title( );
      //get_template_part('template-parts/section/section-Team');
    endwhile;
    else :
      echo "no posts";
  endif;

  
get_footer();

?>