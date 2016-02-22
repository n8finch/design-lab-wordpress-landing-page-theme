<?php
/*Template Name: Landing Page*/

get_header(); ?>




			<?php
			while ( have_posts() ) : the_post();

			?>

	<div id="fullPage">
		<!--Hero Section-->
		<section class="vertical-scrolling" id="hero-section" style="background-image: url('<?php the_field('hero_image'); ?>');">
			<div class="hero">
				<div class="hero-inner">
					<img class="landing-logos" id="hero-logo" src="<?php the_field('hero_logo'); ?>" alt="Logo Image">
					<div class="hero-copy">
						<h1><?php the_field('hero_title'); ?></h1>
						<h4><?php the_field('hero_paragraph'); ?></h4>
					</div>
					<span class="hero-scroll icon ion-android-arrow-dropdown-circle"></span>
				</div>
			</div>
		</section>

		<!--About Us Section-->
		<section class="vertical-scrolling" id="about-us">
			<div id="wrap">
				<div id="border">
					<div id="title">
						<h2><?php the_field('about_us_title'); ?></h2>
					</div>
					<div id="para">
						<?php the_field('about_us_paragraph'); ?>
					</div>
				</div>
			</div>
		</section>


		<!--Services Section-->
		<section class="vertical-scrolling" id="services-section">
			<div id="js-parallax-window" class="parallax-window">
				<div class="parallax-static-content">
					<div id="wrap">
						<div id="border-services">
							<div id="border-partial">
								<div id="title-services">
									<h2><?php the_field('services_title'); ?></h2>
								</div>
								<div id="para-services">
									<?php the_field('services_paragraph'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="js-parallax-background" class="parallax-background" style="background-image: url('<?php the_field('services_background_image'); ?>');"></div>
			</div>
		</section>


		<!--What We Do Section-->
		<section class="vertical-scrolling" id="what-we-do-section">
			<div id="wrap">
				<div id="border">
					<div id="title">
						<h2><?php the_field('what_we_do_title'); ?></h2>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="<?php the_field('what_we_do_logo_1'); ?>">
						<h3><?php the_field('what_we_do_subtitle_1'); ?></h3>
						<div class="what-we-do-paragraphs"><?php the_field('what_we_do_paragraph_1'); ?></div>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="<?php the_field('what_we_do_logo_2'); ?>">
						<h3><?php the_field('what_we_do_subtitle_2'); ?></h3>
						<div class="what-we-do-paragraphs"><?php the_field('what_we_do_paragraph_2'); ?></div>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="<?php the_field('what_we_do_logo_3'); ?>">
						<h3><?php the_field('what_we_do_subtitle_3'); ?></h3>
						<div class="what-we-do-paragraphs"><?php the_field('what_we_do_paragraph_3'); ?></div>
					</div>
				</div>
			</div>
		</section>


		<!--Gallery Section-->
		<section class="vertical-scrolling" id="gallery-section">

			<div class="hover-tile-outer" id="hover-tile-outer-1" style="background-image: url('<?php the_field('gallery_image_1'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_1'); ?></h4>
						<?php the_field('gallery_paragraph_1'); ?>
					</div>
				</div>
			</div>


			<div class="hover-tile-outer" id="hover-tile-outer-2" style="background-image: url('<?php the_field('gallery_image_2'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_2'); ?></h4>
						<?php the_field('gallery_paragraph_2'); ?>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-3" style="background-image: url('<?php the_field('gallery_image_3'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_3'); ?></h4>
						<?php the_field('gallery_paragraph_3'); ?>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-4" style="background-image: url('<?php the_field('gallery_image_4'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_4'); ?></h4>
						<?php the_field('gallery_paragraph_4'); ?>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-5" style="background-image: url('<?php the_field('gallery_image_5'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_5'); ?></h4>
						<?php the_field('gallery_paragraph_5'); ?>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-6" style="background-image: url('<?php the_field('gallery_image_6'); ?>');">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4><?php the_field('gallery_title_6'); ?></h4>
						<?php the_field('gallery_paragraph_6'); ?>
					</div>
				</div>
			</div>



		</section>


		<!--Contact Us Section-->
		<section class="vertical-scrolling" id="contact-us-section">
			<div id="wrap">
				<div id="border">
					<div id="title">
						<h2><?php the_field('contact_us_title'); ?></h2>
					</div>
					<div id="para">
						<?php the_field('contact_us_paragraph'); ?>
						<!--Modals Section-->
						<div id="modal-section">
							<div class="modal">
								<label for="modal-1">
									<div class="modal-trigger modal-button"><?php the_field('contact_us_button_text'); ?></div>
								</label>
								<input class="modal-state" id="modal-1" type="checkbox" />

								<div class="modal-fade-screen">
									<div class="modal-inner">
										<div class="modal-close" for="modal-1"></div>
										<?php get_template_part( 'template-parts/content-modal', 'modal'); ?>
									</div>
								</div>
							</div>
						</div><!-- EndModals Section-->
					</div>
				</div>
			</div>
		</section>

	</div>




				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


<?php
get_footer();