
    <?php include("menu.php"); ?>
<!-- inclure nav dans header !!! -->
    <section class="presentation">
        <div class="container">
            <!-- Voir pour un background image en css. Voir pour "ir" -->
            <picture>
                <img srcset="images/homepage/mobile/image-homepage-hero.jpg,
                        images/homepage/mobile/image-homepage-hero@2x.jpg,
                        images/homepage/tablet/image-homepage-hero.jpg,
                        images/homepage/tablet/image-homepage-hero@2x.jpg,
                        images/homepage/desktop/image-homepage-hero.jpg,
                        images/homepage/desktop/image-homepage-hero@2x.jpg" 
                    sizes=""
                    src="images/homepage/mobile/image-homepage-hero@2x.jpg" alt="Page d'accueil d'un site web sur un écran d'ordinateur sur un bureau avec un portable mac devant">
            </picture>
            <div class="about-argument">
                <h1>Hey, I’m Alex Spencer and I love building beautiful websites</h1>
                <a href="#about-me" class="btn-primary btn">About me</a>
            </div>
        </div>
    </section>

    <section class="about-main">
        <div id="about-me" class=" container about-argument">
            <h2>About me</h2>
            <p>
            I’m a junior front-end developer looking for a new role in an exciting company. I focus on writing accessible HTML, using modern CSS practices and writing clean JavaScript. When writing JavaScript code, I mostly use React, but I can adapt to whatever tools are required. I’m based in London, UK, but I’m happy working remotely and have experience in remote teams. When I’m not coding, you’ll find me outdoors. I love being out in nature whether that’s going for a walk, run or cycling. I’d love you to check out my work.
            </p>
            <a href="includes/portfolio.php" class="btn-secondary btn">Go to portfolio</a>
        
            <picture>
                <img srcset="images/homepage/mobile/image-homepage-profile.jpg,
                            images/homepage/mobile/image-homepage-profile@2x.jpg,
                            images/homepage/tablet/image-homepage-profile.jpg,
                            images/homepage/tablet/image-homepage-profile@2x.jpg,
                            images/homepage/desktop/image-homepage-profile.jpg,
                            images/homepage/desktop/image-homepage-profile@2x.jpg"
                    sizes=""
                    src="images/homepage/mobile/image-homepage-profile@2x.jpg" alt="Photo de présentation vue de profil ">
            </picture>
        </div>
    </section>

    <?php include("includes/contact-cta.php"); ?>

    <?php include("includes/footer.php"); ?>
    
    </body>
</html>