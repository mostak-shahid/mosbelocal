<?php /*Template Name: Contact Page Template*/ ?>
<?php get_header() ?>
<section id="contact-page" class="page-content">
	<div class="content-wrap">
			<?php if ( have_posts() ) :?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if (has_post_thumbnail()):?>
						<div class="page-img-container">
							<?php the_post_thumbnail('blog-image-full', array('class' => 'img-fluid img-blog img-centered'))?>
						</div>
					<?php endif;?>					
					<div class="container">
						<?php get_template_part( 'content', 'page' ) ?>
						<div class="row">
							<div class="col-lg-5 pr-lg-0">
								<div class="contact-info">
									<h4>Contact Information</h4>
									<div class="address-part">										
									<?php echo do_shortcode( '[address]' ) ?>
									</div>
									<div class="email-part">
									Email: <?php echo do_shortcode( '[email index=1]' ) ?>
									</div>
									<div class="phone-part">
									Phone: <?php echo do_shortcode( '[phone index=1]' ) ?>
									</div>
									<div class="hours-part">
									<?php echo do_shortcode( '[working-hours]' ) ?>
									</div>
									<h4>Follow Us</h4>
									<div class="social-part">
										<?php echo do_shortcode( '[social_menu]' ) ?>
									</div>
								</div>
							
							</div>
							<div class="col-lg-7 pl-lg-0">
								<div class="contact-form">
									<h4>Send Us a Message</h4>
									<div class="form-part">
										<?php echo do_shortcode( '[formidable id=6]' ) ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>					
			<?php endif;?>			
	</div>
</section>
<?php get_footer() ?>