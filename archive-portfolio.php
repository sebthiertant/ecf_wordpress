<?php get_header(); ?>

<main id="main-content">
		<div class="container">
			<h1 class="screen-reader-text">Portfolio</h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<article class="portfolio-item">
    <?php the_post_thumbnail('post-thumbnail', ['class' => 'portfolio-item-illustration'], ['attribute' => 'loading=lazy']); ?>  
    <div class="portfolio-item-content">
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
    <a class="btn-secondary" href="<?php the_permalink(); ?>">View project</a>
    </div>
</article>
<?php endwhile; endif; ?>

</div>
<div class="pagination_container">
<div class="site__navigation">
	<div class="site__navigation__prev">
		<?php previous_posts_link( 'Previous page' ); ?>
    </div>
    <div class="site__navigation__next">
        <?php next_posts_link( 'Next page' ); ?> 
    </div>
    </div>
</div>

</main>
<?php get_footer(); ?>
