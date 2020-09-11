
    <?php include("../menu.php"); ?>

    <section class="argument-illustration">
        <div class="container">
            <picture>
                <img srcset="/images/detail/mobile/image-bookmark-hero.jpg,
                            /images/detail/mobile/image-bookmark-hero@2x.jpg,
                            /images/detail/tablet/image-bookmark-hero.jpg,
                            /images/detail/tablet/image-bookmark-hero@2x.jpg,
                            /images/detail/desktop/image-bookmark-hero.jpg,
                            /images/detail/desktop/image-bookmark-hero@2x.jpg"
                    sizes=""
                    src="/images/detail/mobile/image-bookmark-hero@2x.jpg" alt="Page d'accueil de site web">
            </picture>
        </div>
    </section>

    <main class="container">
        <aside class="argument argument-item">
            <h2>Bookmark</h2>
            <p class="p-secondary">This project required me to build a fully responsive landing page to the designs provided. I used HTML5, along with CSS Grid and JavaScript for the areas that required interactivity, such as the features aside.</p>
                    
            <?php include("category.php"); ?>
        
            <a href="manage.php" class="btn-secondary btn">Visit website</a>
        </aside>

        <article class="argument-content">
            <h3>Project Background</h3>
            <p class="p-secondary">This project was a front-end  challenge from CEFIM BootCamp. It’s a platform that enables you to practice building websites to a design and project brief. Each challenge includes mobile and desktop designs to show how the website should look at different screen sizes. Creating these projects has helped me refine my workflow and solve real-world coding problems. I’ve learned something new with each project, helping me to improve and adapt my style.</p>    
        </article>

        <article class="argument-content">
            <h3>Static Previews</h3>
        
            <div class="argument-illustration">
                <picture>
                    <img srcset="/images/detail/mobile/image-bookmark-preview-1.jpg,
                                    /images/detail/mobile/image-bookmark-preview-1@2x.jpg,
                                    /images/detail/tablet/image-bookmark-preview-1.jpg,
                                    /images/detail/tablet/image-bookmark-preview-1@2x.jpg,
                                    /images/detail/desktop/image-bookmark-preview-1.jpg,
                                    /images/detail/desktop/image-bookmark-preview-1@2x.jpg"
                            sizes=""
                            src="/images/detail/mobile/image-bookmark-preview-1@2x.jpg" alt="Page d'accueil de site web">
                </picture>
            </div>

            <div class="argument-illustration">
                <picture>
                    <img srcset="/images/detail/mobile/image-bookmark-preview-2.jpg,
                                    /images/detail/mobile/image-bookmark-preview-2@2x.jpg,
                                    /images/detail/tablet/image-bookmark-preview-2.jpg,
                                    /images/detail/tablet/image-bookmark-preview-2@2x.jpg,
                                    /images/detail/desktop/image-bookmark-preview-2.jpg,
                                    /images/detail/desktop/image-bookmark-preview-2@2x.jpg"
                            sizes=""
                            src="/images/detail/mobile/image-bookmark-preview-2@2x.jpg" alt="Page de site web version format mobile">
                </picture>
            </div>
        </article>

        <section class="pn">
            <div class="previous">
                <div class="btn-pn">
                    <a href="manage.php" >
                    <div class="previous-img"><img src="//images/icons/arrow-left.svg" alt="Lien vers page précédente"></div>
                    <h3>Manage</h3>
                    <p>Previous project</p></a>
                </div>
            </div>
            <div class="next">
                <div class="btn-pn">
                    <a href="insure.php">
                    <div class="next-img"><img src="//images/icons/arrow-right.svg" alt="Lien vers page suivante"></div>
                    <h3>Insure</h3>
                    <p>Next Project</p></a>
                </div>
            </div>
        </section>
    </main>

    <?php include("contact-cta.php"); ?>

    <?php include("footer.php"); ?>