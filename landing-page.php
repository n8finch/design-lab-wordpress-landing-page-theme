<?php
/*Template Name: Landing Page*/

get_header(); ?>




			<?php
			while ( have_posts() ) : the_post();

			?>

	<div id="fullPage">
		<!--Hero Section-->
		<section class="vertical-scrolling" id="hero-section">
			<div class="hero">
				<div class="hero-inner">
					<img class="landing-logos" id="hero-logo" src="wp-content/themes/design-lab-wordpress-landing-page-theme/img/header-images/logo.png" alt="Logo Image">
					<div class="hero-copy">
						<h1>Working<br/>With Design Lab</h1>
						<h4>We’ve been helping startups launch and grow their businesses.<br/>We help you to fill the gap between development,<br/>design and product management.</h4>
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
						<h2>About Us</h2>
					</div>
					<div id="para">
						<p> When you work with us, you are part of a team of committed collaborators.
							All aspects of our software development process are integrated, iterative and agile.</p>
						<p>Our approach unifies design, development and
							product management to create exceptional products.
							We start each project by understanding your business goals,
							the user’s needs and the product requirements.
							Then we help translate them into effective and elegant solutions.
						</p>
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
									<h2>Services</h2>
								</div>
								<div id="para-services">
									<p>Before we sign a contract or write a line of code our team will spend the necessary time needed to understand your product vision.</p>
									<p>The outcome of this scoping session is a proposal or high-level statement of work.
										Based on your requirements, we can provide a complete offering or just the pieces you need. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="js-parallax-background" class="parallax-background"></div>
			</div>
		</section>


		<!--What We Do Section-->
		<section class="vertical-scrolling" id="what-we-do-section">
			<div id="wrap">
				<div id="border">
					<div id="title">
						<h2>What We Do</h2>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="wp-content/themes/design-lab-wordpress-landing-page-theme/img/what-we-do/pen.png">
						<h3>Design</h3>
						<p class="what-we-do-paragraphs">Our design practice offers a full range of services including branding strategy,
							interaction and visual design and user experience testing.
							Throughout your project, our designers create and implement visual designs and workflows, solicit user feedback, and work with you to make sure what gets built is what is needed.</p>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="wp-content/themes/design-lab-wordpress-landing-page-theme/img/what-we-do/code.png">
						<h3>Development</h3>
						<p class="what-we-do-paragraphs">All engineers are fluent in the latest enterprise, mobile and web development technologies.
							They collaborate with your team to write, test, and improve code on a daily basis, using proven practices such as test-driven development and pair programing.</p>
					</div>
					<div id="para">
						<img class="landing-logos what-we-do-logos" src="wp-content/themes/design-lab-wordpress-landing-page-theme/img/what-we-do/clipboard.png">
						<h3>Project Management</h3>
						<p class="what-we-do-paragraphs">Planning and development is iterative. Because we are constantly coding and testing, the products we build are always ready to go live. This iterative process allows for changes as business requirements evolve.</p>
					</div>
				</div>
			</div>
		</section>


		<!--Gallery Section-->
		<section class="vertical-scrolling" id="gallery-section">
			<div class="hover-tile-outer" id="hover-tile-outer-1">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-2">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-3">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-4">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-5">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>

			<div class="hover-tile-outer" id="hover-tile-outer-6">
				<div class="hover-tile-container">
					<div class="hover-tile hover-tile-visible"></div>
					<div class="hover-tile hover-tile-hidden">
						<h4>Hidden Copy</h4>
						<p>Lorem ipsum dolor provident eligendi fugiat ad exercitationem sit amet, consectetur adipisicing elit. Unde, provident eligendi.</p>
					</div>
				</div>
			</div>



		</section>


		<!--Contact Us Section-->
		<section class="vertical-scrolling" id="contact-us-section">
			<div id="wrap">
				<div id="border">
					<div id="title">
						<h2>Contact Us</h2>
					</div>
					<div id="para">
						<p>Planning and development is iterative. Because we are constantly coding and testing, the products we build are always ready to go live. This iterative process allows for changes as business requirements evolve.
						</p>
						<!--Modals Section-->
						<div id="modal-section">
							<div class="modal">
								<label for="modal-1">
									<div class="modal-trigger modal-button">Contact Us</div>
								</label>
								<input class="modal-state" id="modal-1" type="checkbox" />
								<div class="modal-fade-screen">
									<div class="modal-inner">
										<div class="modal-close" for="modal-1"></div>
										<h1>Modal Title</h1>
										<!-- Sample Modal Form-->
										<form>
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											</div>
											<div class="form-group">
												<label for="exampleInputFile">File input</label>
												<input type="file" id="exampleInputFile">
												<p class="help-block">Example block-level help text here.</p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Check me out
												</label>
											</div>
											<button type="submit" class="btn btn-default">Submit</button>
										</form> <!-- END Sample Modal Form-->
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