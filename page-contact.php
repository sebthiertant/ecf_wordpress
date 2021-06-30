<?php get_header(); ?>

<main id="main-content">

    <div class="container">
        <h1 class="screen-reader-text">Contact</h1>
        <section class="get-in-touch">
            <h2><?php the_field('contact_title') ; ?></h2>
            <div class="get-in-touch-content">
                <p><?php the_field('contact_paragraph') ; ?></p>
                <nav class="social-nav social-nav-contact">		
                    <?php wp_nav_menu(['theme_location' => 'social_menu','menu_class'=> 'menu']) ; ?>					
                </nav>
            </div>
        </section>
        <div class="contact-form" >
            <h2><?php the_field('form_title') ; ?></h2>
            <div class="fields">
                <div class="field-group"><?php the_content() ;?></div>
            </div>
        </div>
    </div>
    
</main>

<?php get_footer(); ?>
