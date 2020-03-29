</main>
<footer>
    <div class="footer-class">
        <div class="footer-text">
            <?php get_template_part('template-parts/footer/site-info'); ?>
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
            <div class="footer-subscribe">
                <form action="">
                    <h2>
                        <lable>
                            Subscribe For More Info
                        </lable>
                    </h2><br>
                    <input type="text" placeholder="Enter your Email">
                    <button>Subscribe</button>
                </form>
            </div>
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

<div class="side-menu">
    <?php wp_nav_menu( [
        'theme_location'  => 'side-menu',
        'menu_class'      => ' menu side-bar-menu  ',
        'container'       => 'nav',
        'container_class' => 'header-menu'
    ] ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>