<?php get_header(); ?>


<main id="main-content">
        <section class="hero">
            <div class="container">
                <picture class="hero-illustration">
                    <source media="(max-width: 375px)" srcset="img/homepage/mobile/image-homepage-hero.jpg, img/homepage/mobile/image-homepage-hero@2x.jpg 2x">
                    <source media="(max-width: 768px)" srcset="img/homepage/tablet/image-homepage-hero.jpg, img/homepage/tablet/image-homepage-hero@2x.jpg 2x">
                    <img src="img/homepage/desktop/image-homepage-hero.jpg" srcset="img/homepage/desktop/image-homepage-hero@2x.jpg 2x" alt="A mockup">
                </picture>
                <div class="hero-content">
                    <h1 class="hero-title">Hey, I’m Alex Spencer and I love building beautiful websites</h1>
                    <a href="#about" class="btn-primary">About me</a>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container">
                <picture class="about-illustration">
                    <source media="(max-width: 375px)" srcset="img/homepage/mobile/image-homepage-profile.jpg, img/homepage/mobile/image-homepage-profile@2x.jpg 2x">
                    <img src="img/homepage/desktop/image-homepage-profile.jpg" srcset="img/homepage/desktop/image-homepage-profile@2x.jpg 2x" alt="A mockup">
                </picture>
                <div class="about-content">
                    <h2>About me</h2>
                    <p>I’m a junior front-end developer looking for a new role in an exciting company. I focus on writing accessible HTML, using modern CSS practices and writing clean JavaScript. When writing JavaScript code, I mostly use React, but I can
                        adapt to whatever tools are required. I’m based in London, UK, but I’m happy working remotely and have experience in remote teams. When I’m not coding, you’ll find me outdoors. I love being out in nature whether that’s going for
                        a walk, run or cycling. I’d love you to check out my work.</p>
                    <a href="portfolio.html" class="btn-secondary">Go to portfolio</a>
                </div>
            </div>
        </section>
    </main>
    
<?php get_footer(); ?>