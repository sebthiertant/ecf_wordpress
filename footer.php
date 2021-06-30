<?php wp_footer(); ?>
<footer class="main-footer">
		<div class="top-footer container">
			<p class="h2-like top-footer-title"><?php the_field('interested', 'option'); ?></p>
			<hr class="top-footer-separator">
			<a href="contact" class="btn-secondary"><?php the_field('footer_button', 'option'); ?></a>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<a href="http://localhost/ecf_test_restore/" class="logo">
				<svg xmlns="http://www.w3.org/2000/svg" width="61" height="32" aria-hidden="true">
					<path fill="#FFFFFF" fill-rule="evenodd" stroke="#FFFFFF" d="M60.082 5.878L44.408 32 28.735 5.878h31.347zM15.673 0l15.674 26.122H0L15.673 0z"/>
				</svg>
				<span class="screen-reader-text">Alex Spencer's Website</span>
				</a>
				<nav class="footer-nav">
				<?php wp_nav_menu(['theme_location' => 'footer_menu','menu_class'=> 'menu']) ; ?>
				</nav>
				<nav class="social-nav">		
                    <?php wp_nav_menu(['theme_location' => 'social_menu','menu_class'=> 'menu']) ; ?>					
				</nav>
			</div>
		</div>
	</footer>
</body>
</html>