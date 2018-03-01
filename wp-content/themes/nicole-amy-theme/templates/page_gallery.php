<?php /* Template Name: Gallery Page */ ?>

<?php get_header() ?>

<?php get_template_part('partials/page-header'); ?>

<section id="gallery-grid-container">
	<div class="container magnific-all">
		<div class="flex-grid">
			<?php if( have_rows('images') ):
				$count = 1;
			 	while ( have_rows('images') ) : the_row(); ?>
			 		<?php $image = get_sub_field('image'); ?>
				    <a href="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="magnific item col col-4" data-title="Pivot & Crop">
				    	<img src="<?= $image['url']; ?>" width="300" height="200" class="img-center" />
				    	<div class="overlay">
				    		<i class="fa fa-search" aria-hidden="true"></i>
				    	</div>
				    </a>
				    <?php $count += 1; ?>
				<?php endwhile;
			endif; ?> 
		</div>
	</div>
</section>

<?php get_footer() ?>