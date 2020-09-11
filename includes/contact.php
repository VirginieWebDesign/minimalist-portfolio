
    <?php include("../menu.php"); ?>

    <div class="container">
        <div class="contact">
            <section class="contact-item">
                <h2>Get in Touch</h2>
            
                <p>I’d love to hear about what you’re working on and how I could help. I’m currently looking for a new role and am open to a wide range of opportunities. My preference would be to find a position in a company in London. But I’m also happy to hear about opportunites that don’t fit that description. I’m a hard-working and positive person who will always approach each task with a sense of purpose and attention to detail. Please do feel free to check out my online profiles below and get in touch using the form.</p>
                <div class="socials">
                    <ul class="social">
                        <li> <a href="github"><img src="images/icons/github.svg" alt="Lien vers Profil Github"></a></li>
                        <li class="social-item"><a href="twitter"><img src="images/icons/twitter.svg" alt="Lien vers Profil Twitter" class="twitter"></a></li>
                        <li><a href="Linkedin"><img src="images/icons/linkedin.svg" alt="lien vers profil Linkedin"></a></li>
                    </ul>
                </div>
            </section>

            <section class="contact-item contact-me">
                <h2>Contact Me</h2>

                <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/YOUR_EMAIL_HERE" method="post">
                <fieldset id="fs-frm-inputs">
                    <label for="your-name">Name</label>
                    <input type="text" name="name" id="your-name" placeholder="Jane Appleseed" required="">
                    <label for="email-address">Email Address</label>
                    <input type="email" name="_replyto" id="email-address" placeholder="email@example.com" required="">
                    <label for="message">Message</label>
                    <textarea rows="5" name="message" id="message" placeholder="How can I help ?" required=""></textarea>
                    <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
                </fieldset>
                <input type="submit" value="Send message" class="btn-primary btn">
                </form>
                <!-- Changer dans CSS donc dans JS -->
            </section>
        </div>
    </div>

    <?php include("footer.php");?>

    
    </body>
</html>