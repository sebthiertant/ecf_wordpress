<?php get_header(); ?>


<main id="main-content">
        <section class="hero">
            <div class="container">
                <picture class="hero-illustration">
                    <img src="<?php the_field('home_background');?>"  alt="A mockup">
                </picture>
                <div class="hero-content">
                    <h1 class="hero-title"><?php the_field('hero_title');?></h1>
                    <a href="#about" class="btn-primary"><?php the_field('hero_button');?></a>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <picture class="about-illustration">
                    <img src="<?php the_field('description_image');?>" alt="A mockup">
                </picture>
                <div class="about-content">
                    <h2>About me</h2>
                    <p><?php the_field('home_description');?></p>
                    <a href="portfolio.html" class="btn-secondary"><?php the_field('description_button');?></a>
                </div>
            </div>
        </section>
    </main>
    
<?php get_footer(); ?>