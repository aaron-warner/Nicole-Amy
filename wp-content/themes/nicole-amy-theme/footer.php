<section id="instagram-feed-container">
    <div class="container">
        <?= do_shortcode('[instagram-feed]') ?>
    </div>
</section>

<footer class="no-margin">
    <div class="container">
        <div class="flex-grid">
        	<div class="col col-4 social-col">
        		<h3>Stay Connected</h3>
                <p>Join over 1,000 people who stay up to date with the Nicole Amy updates, tips and chat!</p>
                <?php get_template_part( 'partials/email-signup-form' ) ?>
                <?php get_template_part( 'partials/social-links' ) ?>
        	</div>
        	<div class="col col-6 about-col">
        		<h3>About Nicole Amy</h3>
                <div class="flex-grid">
                    <div class="col col-4 image">
                        <img src="/wp-content/uploads/2018/02/nicole1.jpg">
                    </div>
                    <div class="col col-8 text">
                        <p>Nicole Amy is a creative visual designer based in Stourbridge, West Midlands who specialises in commercial images for small businesses. She first began filming and editing videos for her personal Youtube channel. As her skills and passion grew, she decided to take what she loved and turn it into a career. Since then, she's gained a considerable amount of experience filming live events for online promotion via social media. Alongside small businesses, Nicole also creates visuals for creatives, artists, freelancers and other professionals alike. Her ultimate passion is in helping professional individuals and small businesses promote themselves visually.</p>
                    </div>
                </div>
        	</div>
        	<div class="col col-2 nav-col">
        		<h3>Navigate</h3>
                <?php wp_nav_menu(array('theme_location' => 'main_navigation')) ?>
        	</div>
        </div>
    </div>
</footer>

<div class="row copyright-banner">
    Copyright <?= date("Y"); ?> - Website By <a href="/">Nicole Amy Visuals</a>
</div>

<!-- End #main -->
</div>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
</body>
</html>