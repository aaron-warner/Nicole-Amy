<?php get_header() ?>

<?php if( have_rows('slider') ): ?>
	<div class="owl-carousel owl-theme slider-container" id="home-slider">
		<?php while ( have_rows('slider') ) : the_row(); ?>
			<div class="item has-background-image" style="background-image: url('<?php the_sub_field('image') ?>')">
		    	<div class="slide-overlay">
		    		<span><?php the_sub_field('text') ?></span>
		    	</div>
		    </div>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<!-- <section id="services">
     <div class="container">
          <div class="flex-grid">
               <div class="col col-3">
                    <div class="service-tile">
                         <i class="fa fa-paint-brush"></i>
                         <h4>Photography</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                    </div>
               </div>
               <div class="col col-3">
                    <div class="service-tile">
                         <i class="fa fa-paint-brush"></i>
                         <h4>Photography</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                    </div>
               </div>
               <div class="col col-3">
                    <div class="service-tile">
                         <i class="fa fa-paint-brush"></i>
                         <h4>Photography</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                    </div>
               </div>
               <div class="col col-3">
                    <div class="service-tile">
                         <i class="fa fa-paint-brush"></i>
                         <h4>Photography</h4>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing morbi venenatis.</p>
                    </div>
               </div>
          </div>
     </div>
</section> -->

<section id="services-tiles" class="odd">
	<div class="container">
		<div class="flex-grid">
			<div class="col col-6 has-background-image" id="photography">
				<div class="overlay">
					<a href="#">
						<span>Photography</span>
					</a>
				</div>
			</div>
			<div class="col col-6 has-background-image" id="web-dev">
				<div class="overlay">
					<a href="#">
						<span>Web Development</span>
					</a>
				</div>
			</div>
			<div class="col col-6 has-background-image" id="weddings">
				<div class="overlay">
					<a href="#">
						<span>Weddings</span>
					</a>
				</div>
			</div>
			<div class="col col-6 has-background-image" id="videography">
				<div class="overlay">
					<a href="#">
						<span>Videography</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="about-me" class="even has-background-image paralax">
	<div class="overlay">
		<div class="container">
			<div class="flex-grid">
				<div class="col col-4 image">
					<?php $personalImage = get_field('personal_image'); ?>
					<img src="<?= $personalImage['url'] ?>" alt="<?= $personalImage['alt'] ?>">
					<?php get_template_part( 'partials/social-links' ) ?>
				</div>
				<div class="col col-8 text">
					<h3><?php the_field('heading') ?></h3>
					<p><?php the_field('description') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php if( have_rows('testimonials') ): ?>
<section id="testimonials" class="odd">
	<div class="container">
		<div class="opening-quote flex-grid">
			<div class="col col-3 quote-col">
				<i class="fas fa-quote-left"></i>
			</div>
			<div class="col col-9">
				<hr>
			</div>
		</div>
		<div class="testimonial">
			<div class="owl-carousel owl-theme slider-container" id="testimonial-slider">
				<?php while ( have_rows('testimonials') ) : the_row(); ?>
					<div class="item">
				    	<div class="slide-overlay">
				    		<span class="testimonial-text"><?php the_sub_field('testimonial_text') ?></span>
				    		<span class="given-by"><?php the_sub_field('given_by') ?></span>
				    	</div>
				    </div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="closing-quote flex-grid">
			<div class="col col-9">
				<hr>
			</div>
			<div class="col col-3 quote-col">
				<i class="fas fa-quote-right"></i>
			</div>
		</div>
</section>
<?php endif; ?>

<?php get_footer()?>