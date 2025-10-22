<?php
/**
 * Template Name: Home
 * Template Post Type: page
 *
 * This template is for displaying home page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Academy Medical
 * @since 1.0.0
 */

// Include header.
get_header();

?>
<section id="page-section" class="page-section">
	<!-- Content Start -->
			<section class="ctn-light-blue">
				<div class="wrapper">
				<div class="hero-home">
  <div class="hero-home-inner">
    <div class="hero-home-content">
      <h1>Simplifying the federal procurement process.</h1>
      <h2>
        As a service-disabled veteran-owned business, Academy Medical makes the complex federal
        procurement process easier for both suppliers and federal agencies.
      </h2>
      <p>
        Whether you're a supplier looking to sell or a federal agency ready to purchase,
        Academy Medical helps simplify the journey. We connect the right solutions with the right
        partners, making the procurement process smooth, efficient, and tailored to your needs.
      </p>

      <form class="selector-form">
        <div class="single-field">
          <label for="role">I am a:</label>
          <div class="select-wrapper">
            <select id="role" name="role">
              <option value="supplier">Supplier</option>
              <option value="buyer">Buyer</option>
            </select>
          </div>
        </div>
        <div class="single-field">
          <label for="action">And I would like to:</label>
          <div class="select-wrapper">
            <select id="action" name="action">
              <option value="view">View Benefits</option>
              <option value="start-selling">Start Selling</option>
              <option value="start-buying">Start Buying</option>
            </select>
          </div>
        </div>
        <button type="submit">Go</button>
      </form>
    </div>

    <div class="hero-home-image">
      <?php
		echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/hero-image.webp">';

      ?>
      <div class="shape-circle shape-1"></div>
      <div class="shape-circle shape-2"></div>
      <div class="shape-circle shape-3"></div>
    </div>
  </div>
</div>

				</div>
			</section>
			<div class="am-s236"></div>
			<section>
				<div class="wrapper">
					<div class="numbers-section">
						<div class="number-heading">
							<h2>Trust, measured <span>in results</span></h2>
						</div>
						<div class="numbers-items stats-items">

							<div class="item item-1">
								<h3 class="heading-1 stats-number">200+</h3>
								<p>Supplier Partnerships</p>
								<div class="number-item-btn d-flex justify-content-between align-items-center">
									<a href="#">rating</a>
									<div class="arrow">
									</div>
								</div>
							</div>
							<div class="item item-2">
								<h3 class="heading-1 stats-number">10,000+</h3>
								<p>Products Available for Procurement</p>
								<div class="number-item-btn d-flex justify-content-between align-items-center">
									<a href="#">rating</a>
									<div class="arrow">
									</div>
								</div>
							</div>
							<div class="item item-3">
								<h3 class="heading-1 stats-number">500M+</h3>
								<p>Contract Value Secured</p>
								<div class="number-item-btn d-flex justify-content-between align-items-center">
									<a href="#">rating</a>
									<div class="arrow"></div>
								</div>
							</div>
							<div class="item item-4">
								<h3 class="heading-1 stats-number">100%</h3>
								<p>Veteran-Owned and Operated</p>
								<div class="number-item-btn d-flex justify-content-between align-items-center">
									<a href="#">rating</a>
									<div class="arrow">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</section>
			<div class="am-s236"></div>
			<div class="am-s128"></div>
			<section class="full-width-container over-flow-hidden">
				<div class="wrapper">
					<div>
						<div class="event-teaser">
							<h2 class="heading-2">Why Suppliers Love Partnering with Academy Medical
							</h2>
							<div class="event-teaser__list">
								<a href="#" class="event-teaser__item">
									<div class="event-teaser__inner">
										<div class="event-teaser__image">
											<?php
												echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Cardiology.webp">';
											?>
										</div>
										<div
											class="event-teaser__head d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center gap-20">
												<div class="outer-circle">
													<div class="inner-circle">01</div>
												</div>
												<h3>Reach New Revenue Streams</h3>
											</div>
											<p>By registering with Academy Medical, your products gain visibility among
												federal and state buyers, expanding your
												potential market.</p>
										</div>
									</div>
								</a>
								<a href="#" class="event-teaser__item">
									<div class="event-teaser__inner">
										<div class="event-teaser__image">
											<?php
												echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Orthopedic.webp">';
											?>
										</div>
										<div
											class="event-teaser__head d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center gap-20">
												<div class="outer-circle">
													<div class="inner-circle">02</div>
												</div>
												<h3>We Handle the Red Tape</h3>
											</div>
											<p>Our veteran-owned status and procurement expertise streamline regulatory
												requirements and qualify your business quickly.</p>
										</div>
									</div>
								</a>
								<a href="#" class="event-teaser__item">
									<div class="event-teaser__inner">
										<div class="event-teaser__image">
											<?php
												echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Surgical.webp">';
											?>
										</div>
										<div
											class="event-teaser__head d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center gap-20">
												<div class="outer-circle">
													<div class="inner-circle">03</div>
												</div>
												<h3>SDVOSB Leverage</h3>
											</div>
											<p>Benefit from our preferred status to secure contracts faster and reduce
												procurement costs.
											</p>
										</div>
									</div>
								</a>
								<a href="#" class="event-teaser__item">
									<div class="event-teaser__inner">
										<div class="event-teaser__image">
											<?php
												echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Dental.webp">';
											?>
										</div>
										<div
											class="event-teaser__head d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center gap-20">
												<div class="outer-circle">
													<div class="inner-circle">04</div>
												</div>
												<h3>Personalized Onboarding and Support</h3>
											</div>
											<p>Our procurement specialists guide you through every step, answer
												compliance questions, and ensure you're contract-ready.</p>
										</div>
									</div>
								</a>

							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
			<section>
				<div class="wrapper">
					<div class="who-we-are">
						<div class="who-we-are-content">
							<h2>
								Why Federal and Government Agencies Trust Academy Medical
							</h2>
							<p>TrillaMed, founded by U.S. Army Airborne Ranger Veterans, is a Service-Disabled
								Veteran-Owned Small Business
								specializing in distributing medical.
							</p>
							<div class="who-we-are-items">
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Access to Trusted and certified Suppliers
									</h3>
									<p>
										Gain easy access to a network of qualified suppliers who meet your procurement
										needs.
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Streamlined Procurement Process
									</h3>
									<p>
										Our team navigates complex procurement processes, ensuring that you meet
										deadlines and compliance requirements without
										delays.
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Expertise in Federal and State Regulations
									</h3>
									<p>
										We leverage our experience and status to quickly resolve regulatory challenges,
										allowing your agency to focus on its
										mission
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Comprehensive Support for Every Step
									</h3>
									<p>
										From product sourcing to final delivery, we provide ongoing support to ensure
										your procurement is seamless and
										efficient.
									</p>
								</div>
							</div>
						</div>
						<div class="who-we-are-image image-cover">
							<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/who-we-are.webp">';
							?>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>

			<section>
				<div class="wrapper">
					<div class="splide info-slider" aria-label="Info Slider">
						<div class="splide__track">
							<ul class="splide__list">
								<li class="splide__slide card">
									<div class="icon">
										<?php
										echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/global-icon.svg">';
										?>
									</div>

									<h3>Supplier Network</h3>
									<p>Explore our partners</p>
								</li>
								<li class="splide__slide card">
										<div class="icon">
										<?php
										echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/people-icon.svg">';
										?>
									</div>
									<h3>Leadership & Staff</h3>
									<p>Meet the team</p>
								</li>
								<li class="splide__slide card">
									<div class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/speaker-icon.svg">';
									?>
									</div>
									<h3>Industry News</h3>
									<p>Stay informed</p>
								</li>
							</ul>
						</div>
					</div>
					<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
					<script
						src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

					<script>
						document.addEventListener('DOMContentLoaded', function () {
							new Splide('.info-slider', {
								type: 'loop',
								perPage: 3,
								gap: '2rem',
								arrows: false,
								pagination: false,
								drag: 'free',
								pauseOnHover: true,
								focus: 'center',
								autoScroll: {
									speed: 1,
									pauseOnHover: true,
									pauseOnFocus: false,
								},
								breakpoints: {
									1024: { perPage: 2 },
									640: { perPage: 1 },
								},
							}).mount(window.splide.Extensions);
						});
					</script>

				</div>
			</section>
			<div class="am-s128"></div>
			<section class="ctn-light-gray">
				<div class="wrapper">
					<section class="category-teaser">
						<div class="category-header">
							<h2 class="title">Industry Leading Suppliers</h2>
							<p class="text">Through our expansive network of regional to global suppliers, we have
								provided federal hospitals, military bases, and
								government facilities with the tools, resources, and solutions necessary to conquer each
								day. Through our partnerships,
								we empower our purchasers with the following products:</p>
						</div>

						<div class="category-slider four-columns">
							<div class="category-item" data-category="cardiology">
								<div class="image-wrap">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Cardiology.webp">';
							?>
								</div>
								<span>Durable Medical Equipment (DME)
								</span>
							</div>

							<div class="category-item" data-category="orthopedic">
								<div class="image-wrap">
													<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Orthopedic.webp">';
							?>
								</div>
								<span>Implants Biological & Non-Biological</span>
							</div>

							<div class="category-item" data-category="dental">
								<div class="image-wrap">
																<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Dental.webp">';
							?>

								</div>
								<span>Personal Protective Equipment(PPE)</span>
							</div>

							<div class="category-item" data-category="surgical">
								<div class="image-wrap">
											<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Surgical.webp">';
							?>

								</div>
								<span>Soft Goods</span>
							</div>
							<div class="category-item" data-category="surgical">
								<div class="image-wrap">
								<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/Orthopedic.webp">';
								?>
								</div>
								<span>Wound Care</span>
							</div>

						</div>
					</section>

				</div>
			</section>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

			<script>
				jQuery(document).ready(function () {
					jQuery('.category-slider').slick({
						slidesToShow: 4,
						slidesToScroll: 1,
						autoplay: true,
						autoplaySpeed: 3000,
						arrows: false,
						dots: true,
						responsive: [
							{
								breakpoint: 1024,
								settings: {
									slidesToShow: 3,
								},
							},
							{
								breakpoint: 768,
								settings: {
									slidesToShow: 2,
								},
							},
							{
								breakpoint: 480,
								settings: {
									slidesToShow: 1,
								},
							},
						],
					});
				});
			</script>

			<div class="am-s128"></div>
			<section>
				<div class="wrapper">
					<div class="case-study-block">
						<div class="case-study-heading">
							<div class="kicker">Upcoming Events</div>
							<h2 class="heading-1">INFORMATIVE & IMPACTFUL.</h2>
							<p>Join us for inspiring events and hands-on workshops designed to connect, educate, and
								empower our
								medical community.</p>
						</div>

						<div class="case-study-items d-flex align-items-center gap-30">
							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">

											<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-01.webp">';
								?>
										</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Monday, 4 November</div>
									<h3>Medical Innovation Summit</h3>
									<p>Discover the latest advancements in healthcare and technology with top industry
										leaders and
										experts.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>

							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-03.webp">';
								?>
								</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Thursday, 7 November</div>
									<h3>First Aid Training Workshop</h3>
									<p>Enhance your life-saving skills with hands-on CPR and emergency care training led
										by
										certified professionals.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>

							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">
											<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-03.webp">';
								?>
					</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Friday, 15 November</div>
									<h3>Wellness & Health Fair</h3>
									<p>Join us for a day of wellness programs, free screenings, and expert advice to
										support a
										healthier lifestyle.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>
							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-03.webp">';
								?>
						</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Monday, 4 November</div>
									<h3>Medical Innovation Summit</h3>
									<p>Discover the latest advancements in healthcare and technology with top industry
										leaders and
										experts.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>

							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-02.webp">';
								?>
						</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Thursday, 7 November</div>
									<h3>First Aid Training Workshop</h3>
									<p>Enhance your life-saving skills with hands-on CPR and emergency care training led
										by
										certified professionals.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>

							<div class="cs-item item-1">
								<div class="cs-item-image">
									<a href="#">
											<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/event-03.webp">';
								?>
					</a>
								</div>
								<div class="cs-item-content">
									<div class="kicker">Friday, 15 November</div>
									<h3>Wellness & Health Fair</h3>
									<p>Join us for a day of wellness programs, free screenings, and expert advice to
										support a
										healthier lifestyle.</p>
									<div class="cs-btn">
										<a href="#">Read More</a>
									</div>
								</div>
							</div>
						</div>

						<div class="case-study-btn">
							<a href="#" class="button">View All Events</a>
						</div>
					</div>
				</div>
			</section>
			<script>
				jQuery(document).ready(function () {
					if (jQuery('.case-study-items').length > 0) {
						jQuery('.case-study-items').each(function () {
							const $slider = jQuery(this);
							const $items = $slider.children();

							// Clone items if less than 4
							if ($items.length < 4) {
								while ($slider.children().length < 4) {
									$slider.append($items.clone());
								}
							} else if ($items.length === 4) {
								$slider.append($items.clone());
							}

							$slider.slick({
								slidesToShow: 3,
								centerMode: true,
								centerPadding: '0px',
								arrows: true,
								infinite: true,
								autoplay: true, // added autoplay
								autoplaySpeed: 3000, // 3 seconds
								speed: 800, // smooth transition
								pauseOnHover: true,
								touchThreshold: 30,
								responsive: [
									{
										breakpoint: 1024,
										settings: {
											slidesToShow: 2,
										},
									},
									{
										breakpoint: 747,
										settings: {
											slidesToShow: 1,
											centerMode: false,
										},
									},
								],
							});
						});
					}
				});
			</script>

			<div class="am-s96"></div>

			<section class="ctn-blue">
				<div class="wrapper">
					<div class="footer-cta">
						<div class="footer-cta-content d-flex flex-column justify-content-center align-items-center">
							<div class="cta-heading">
								<h2>Ready to Transform Your Healthcare Procurement?</h2>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic adipisci nobis ratione
									nihil doloribus earum! Harum libero fugiat officiis voluptatem eligendi non atque
									maxime nostrum.</p>
							</div>
							<div class="cta-btn">

								<a href="#" class="cta-btn cta-white-btn">Register as Buyer - Free</a>
								<a href="#" class="cta-btn cta-blue-btn">Partner as Supplier - START TODAY</a>

							</div>

						</div>
					</div>
				</div>
			</section>
			<div class="am-s2"></div>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
