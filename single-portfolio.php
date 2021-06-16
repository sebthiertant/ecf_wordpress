<?php get_header(); ?>

<main id="main-content">

	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<article class="container project">

		<?php the_post_thumbnail('post-thumbnail', ['class' => 'project-featured'], ['attribute' => 'loading=lazy']); ?>

		<div class="project-summary">
				<h1 class="h2-like"><?php the_title(); ?></h1>
				<div class="project-summary-content">
					<p><?php the_excerpt(); ?></p>	
				</div>			

			<div class="project-summary-content">
				<p><?php the_content(); ?></p>
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

	</article>

	<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>


<!-- 
				<div class="project-summary-metadata">
					<ul class="category-list">
						<li class="category-item"><a href="#">Interaction design</a></li>
						<li class="category-item"><a href="#">Front End Development</a></li>
					</ul>
					<ul class="language-list">
						<li class="language-item"><a href="#">HTML</a></li>
						<li class="language-item"><a href="#">CSS</a></li>
						<li class="language-item"><a href="#">JS</a></li>
					</ul>
				</div>
				<a href="#" class="btn-secondary">View website</a>
			</div>
			<div class="project-content">
				<h2 class="h3-like">Project Background</h2>
				<p>This project was a front-end  challenge from <a href="#">Frontend Mentor</a>. It’s a platform that enables you to practice building websites to a design and project brief. Each challenge includes mobile and desktop designs to show how the website should look at different screen sizes. Creating these projects has helped me refine my workflow and solve real-world coding problems. I’ve learned something new with each project, helping me to improve and adapt my style.</p>
				<h2 class="h3-like">Static Previews</h2>
				<picture class="project-featured">
					<source media="(max-width: 375px)" srcset="img/detail/mobile/image-manage-preview-1.jpg, img/detail/mobile/image-manage-preview-1@2x.jpg 2x" >
					<source media="(max-width: 768px)" srcset="img/detail/tablet/image-manage-preview-1.jpg, img/detail/tablet/image-manage-preview-1@2x.jpg 2x" >
					<img src="img/detail/desktop/image-manage-preview-1.jpg" srcset="img/detail/desktop/image-manage-preview-1@2x.jpg 2x" alt="A mockup">
				</picture>
				<picture class="project-featured">
					<source media="(max-width: 375px)" srcset="img/detail/mobile/image-manage-preview-2.jpg, img/detail/mobile/image-manage-preview-2@2x.jpg 2x" >
					<source media="(max-width: 768px)" srcset="img/detail/tablet/image-manage-preview-2.jpg, img/detail/tablet/image-manage-preview-2@2x.jpg 2x" >
					<img src="img/detail/desktop/image-manage-preview-2.jpg" srcset="img/detail/desktop/image-manage-preview-2@2x.jpg 2x" alt="A mockup">
				</picture>
			</div>
		</article>
	 <nav class="pagination" aria-label="Projects">
			<div class="container">
				<h2 class="screen-reader-text">Projects navigation</h2>
				<ul class="pagination-list">
					<li><a href="fylo.html">Fylo <span>Previous Project</span></a></li>
					<li><a href="bookmark.html">Bookmark <span>Next Project</span></a></li>
				</ul>
			</div>
		</nav> -->
	<!-- </main> --> 