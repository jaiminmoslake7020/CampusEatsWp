</main>
<footer>
    <div class="footer-class">
        <div class="footer-text">
            <h2>Campus Eats</h2>
            <p><q>An application that will help you to access all the cafes that are in college campus and make it easy
                    for you to order food from anywhere anytime. Download the app now , order and grab your snack.</q>
            </p>
            <div class="download-btn">
                <a href=""><img src="images/google-play.png" class="google"></a>
                <a href=""><img src="images/app-store.png" class="apple"></a>
            </div>
        </div>
        <div class="footer-information">
            <h2>Archives</h2>
			<?php wp_nav_menu( [
				'theme_location'  => 'bottom-left-menu',
				'menu_class'      => 'menu-secondary-ul menu additional-menu ',
				'link_before'	    =>	'<span class="visually-hidden">',
				'link_after'	    =>	'</span>',
				'container'       => 'nav',
				'container_class' => 'menu-secondary-bottom'
			] ); ?>
        </div>

        <div class="footer-contact">
            <div class="footer-subscribe">
                <form action="">
                    <h2>
                        <label>
                            Subscribe For More Info
                        </label>
                    </h2><br>
                    <input type="text" placeholder="Enter your Email">
                    <button>Subscribe</button>
                </form>
            </div>
            <h2>Contact Us @</h2>
            <p>
                <i class="fas fa-envelope"></i>
                <!-- https://fontawesome.com/icons/envelope?style=solid -->
                awesome7@gmail.com</p>
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
            <div class="footer-copyright">
                <p>&copy;2020 awesome7 All right are reserved</p>
            </div>
        </div>

</footer>
<?php wp_footer(); ?>
</body>
</html>