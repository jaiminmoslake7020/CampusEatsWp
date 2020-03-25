<?php ?>
<section id="team-content" class="team main-section">
    <h1>Meet the team</h1>
    <figure>
	    <?php

        $args = array (
            'category_name'     => 'Team',
            'orderby' => ''
        );
        $team_query = new WP_Query( $args );

        $i = 0 ;
        if ($team_query->have_posts() ) :
            while ( $team_query->have_posts() ) :
                $team_query->the_post();

                $activeCLass = "" ;
                if( $i == 0 ){
                    $activeCLass = ' active ' ;
                }
                ?>
                <div <?= $activeCLass ; ?>  <?php implode('  ', get_post_class());  ?> ">
                    <img src="<?php the_post_thumbnail_url(); ?>"
                     <p><?php the_title(); ?></p>
                     <h3><?php the_content(); ?></h3>
                </div>

                <?php
                $i++;
            endwhile;
        endif;
	    ?>
    </figure>
</section>

