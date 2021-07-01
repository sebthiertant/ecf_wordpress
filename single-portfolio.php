<?php get_header(); ?>

<main id="main-content">

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<article class="container project">

	<picture class="project-featured">
	<img src="<?php the_field('banner');?>"/>
	</picture>

		<div class="project-summary">
				<h1 class="h2-like"><?php the_field('main_block_title'); ?></h1>
				<div class="project-summary-content">
					<p><?php the_field('main_block_content'); ?></p>	
				</div>			

			<div class="project-summary-metadata">
				<ul class="category-list">
					<li class="category-item"><a href="#"><?php the_terms( get_the_ID() , 'technologie' ); ?></a></li>
				</ul>
				<ul class="language-list">
					<li class="language-item"><a href="#"><?php the_terms( get_the_ID() , 'competence' ); ?></a></li>
				</ul>
				<a href="#" class="btn-secondary">View website</a>
			</div>
			</div>
			<div class="project-content">
			<h2 class="h3-like">Project Background</h2>
			<p><?php the_field('secondary_block_content'); ?> </p>
			<h2 class="h3-like">Static Previews</h2>

			<picture class="project-featured">
			<img src="<?php the_field('secondary_block_top_image');?>"/>
			</picture>
			<picture class="project-featured">
			<img src="<?php the_field('secondary_block_bottom_image');?>"/>
			</picture>
			
	</article>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
