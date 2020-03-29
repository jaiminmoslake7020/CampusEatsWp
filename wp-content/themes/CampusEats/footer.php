</main>
<footer>
    <div class="footer-class">
        <div class="footer-text">
            <h2>Campus Eats</h2>
            <p><q>An application that will help you to access all the cafes that are in college campus and make it easy
                    for you to order food from anywhere anytime. Download the app now , order and grab your snack.</q>
            </p>
            <div class="download-btn">
              <?php get_template_part('template-parts/footer/links'); ?>
            </div>
        </div>
        <div class="footer-information">
            <h2>Archives</h2>
			<?php wp_nav_menu( [
				'theme_location'  => 'bottom-left-menu',
				'menu_class'      => 'menu-secondary-ul menu additional-menu ',
				'container'       => 'nav',
				'container_class' => 'menu-secondary-bottom'
			] ); ?>
        </div>

        <div class="footer-contact">
           <?php get_template_part('template-parts/footer/contact'); ?>
        </div>

        <div class="footer-icons">
	        <?php wp_nav_menu( [
		        'theme_location'  => 'bottom-right-menu',
		        'menu_class'      => 'menu-social-ul menu additional-menu ',
		        'link_before'	    =>	'<span class="visually-hidden">',
		        'link_after'	    =>	'</span>',
		        'container'       => 'nav',
		        'container_class' => 'menu-social-bottom'
	        ] ); ?>
        </div>
        <div class="footer-copyright">
            <p>&copy;2020 awesome7 All right are reserved</p>
        </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>