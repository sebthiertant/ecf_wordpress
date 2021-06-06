<?php wp_footer(); ?>
<footer class="main-footer">
		<div class="top-footer container">
			<p class="h2-like top-footer-title"><?php the_field('interested', 'option'); ?></p>
			<hr class="top-footer-separator">
			<a href="contact.html" class="btn-secondary"><?php the_field('button', 'option'); ?></a>
		</div>
		<div class="bottom-footer">
			<div class="container">
				<a href="#" class="logo">
				<?php if( get_field('logo_footer', 'option') ): ?>	
				<img src="<?php the_field('logo_footer', 'option'); ?>" />
				<?php endif; ?>
				<span class="screen-reader-text"><?php the_field('footer_screen-reader', 'option'); ?></span>
				</a>
				<nav class="footer-nav">
				<?php wp_nav_menu(['theme_location' => 'footer_menu','menu_class'=> 'menu']) ; ?>
				</nav>
				<nav class="social-nav">		
                    <?php wp_nav_menu(['theme_location' => 'social_menu','menu_class'=> 'menu','items_wrap' => '<ul class="social-icons">%3$s</ul>']) ; ?>					
				</nav>
			</div>
		</div>
	</footer>
</body>
</html>