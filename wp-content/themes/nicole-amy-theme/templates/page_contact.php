<?php /* Template Name: Contact Page */ ?>

<?php get_header() ?>

<?php get_template_part( 'partials/page-header'); ?>

<section id="contact-form-container" class="no-margin">
	<div class="container">
		<?php get_template_part( 'partials/generic-contact-form' ) ?>
	</div>
</section>

<?php get_footer()?>