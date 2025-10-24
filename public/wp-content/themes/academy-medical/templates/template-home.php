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
			<section class=" hero-bg">
				<div class="wrapper">
				<div class="hero-home">
  <div class="hero-home-inner">
    <div class="hero-home-content">
      <h1>Simplifying Federal Procurement. Empowering Innovation.</h1>
     <p>
		Academy Medical is a trusted, veteran-led partner connecting innovative medical manufacturers and suppliers to equip federal healthcare facilities with cutting edge medical solutions that provide care to patients and the heroes who serve our nation.
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

      <div class="shape-circle shape-1"></div>
      <div class="shape-circle shape-2"></div>
      <div class="shape-circle shape-3"></div>
    </div>
  </div>
</div>

				</div>
				<div class="numbers-section full-width-container">
<div class="splide stats-slider" id="stats-splide" aria-label="Statistics Slider">
  <div class="splide__track">
    <ul class="splide__list">

      <li class="splide__slide item item-1 d-flex flex-column justify-content-between">
        <p class="label">Improved Efficiency</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">93%</h3>
          <p>Orders processed within 24 hours</p>
        </div>
      </li>

      <li class="splide__slide item item-2 d-flex flex-column justify-content-between">
        <p>Faster Turnaround</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">10 days</h3>
          <p>Average government AR collection</p>
        </div>
      </li>

      <li class="splide__slide item item-3 d-flex flex-column justify-content-between">
        <p>Accelerated Payments</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">24 hours</h3>
          <p>Vendor payments completed</p>
        </div>
      </li>

      <li class="splide__slide item item-4 d-flex flex-column justify-content-between">
        <p>Revenue Growth</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">200M+</h3>
          <p>Annual sales across partners</p>
        </div>
      </li>

      <li class="splide__slide item item-5 d-flex flex-column justify-content-between">
        <p>Supplied in Medical Equipment</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">1.3B</h3>
          <p>Supplied in Medical Equipment</p>
        </div>
      </li>

      <li class="splide__slide item item-6 d-flex flex-column justify-content-between">
        <p>Federal Facilities Supported</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">700+</h3>
          <p>Serving nationwide</p>
        </div>
      </li>

      <li class="splide__slide item item-7 d-flex flex-column justify-content-between">
        <p>Equipment & Supply Items</p>
        <div class="numbers-heading">
          <h3 class="heading-1 stats-number">70,000+</h3>
          <p>In active distribution</p>
        </div>
      </li>

    </ul>
  </div>
</div>
	<script>
						document.addEventListener('DOMContentLoaded', function () {
							new Splide('.stats-slider', {
								type: 'loop',
								perPage: 4,
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
							}).mount();
						});
					</script>

			  </div>

			</section>

			<div class="am-s128"></div>
					<section>
				<div class="wrapper">
					<div class="about-us d-flex justify-content-between flex-wrap">
						<div class="about-us-content">
							<div class="kicker">About Us</div>
							<h2>Founded in Service. Mission Driven. Committed to Better Care.</h2>
							<p>Academy Medical is a service-disabled veteran-owned business dedicated to redefining
								healthcare for service members,
								veterans, and federal healthcare facilities. We combine veteran discipline, federal
								contracting expertise, and strong
								supplier partnerships to deliver advanced technologies and medical solutions that
								strengthen our nation’s healthcare
								system.</p>
							<p>For over a decade, Academy Medical has supported the mission of the United States
								government. From VA hospitals to DoD
								medical centers and other federal healthcare facilities, our solutions empower care
								providers with innovative products,
								faster access, and measurable performance. Every delivery reflects our commitment to
								accuracy, transparency, and mission
								success, ensuring innovation reaches those who need it most.</p>
								<p class="last-p">
									In federal procurement, reliability is everything. That is where we lead.

								</p>
								<ul>
														<li>
					Where others navigate compliance, we master it.
					</li>
														<li>
					Where others transact, we partner.

									</li>
								</ul>
							<div class="about-us-btn d-flex flex-wrap">
								<a href="#" class="trans-btn">Partner With Us</a>
								<a href="#" class="button">Learn More About Us</a>
							</div>

						</div>
						<div class="about-us-image image-cover">
							<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-1.webp">';
							?>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
			<section class="full-width-container over-flow-hidden">
				<div class="wrapper">
					<div>
					<div class="event-teaser">
  <div class="event-teaser-heading">
    <h2 class="heading-2">Driving Innovation Across the System</h2>
    <p>Academy Medical connects government agencies, manufacturers, and distributors to streamline the federal healthcare supply chain with speed, compliance, and veteran-led precision.</p>
  </div>

  <div class="event-teaser__list d-flex justify-content-between gap-30">
								<a href="#">
									<div class="event-teaser__inner">
										<div class="event-teaser__image-background">
											<div class="event-teaser__image">
												<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/goverment.webp">';
							?>
											</div>
										</div>
										<div class="event-teaser__head">
											<h3>Government</h3>
											<p>We partner with federal health systems including VA hospitals and DoD
												medical
												centers to simplify procurement,
												accelerate contracting, and enhance care delivery through smarter,
												compliant
												solutions that ensure critical resources
												reach patients on time.</p>
											<button class="event-teaser-btn">Learn More</button>

										</div>
									</div>
								</a>
								<a href="#">
									<div class="event-teaser__inner">
										<div class="event-teaser__image-background">
											<div class="event-teaser__image">
												<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/manfucture.webp">';
							?>
											</div>
										</div>
										<div class="event-teaser__head">
											<h3>Manufacturer</h3>
											<p>We help innovative manufacturers unlock VA and DoD opportunities by
												simplifying contracts, managing pricing and
												compliance, and aligning with federal procurement standards. Our
												veteran-led
												expertise turns complex government
												requirements into scalable opportunities for growth across nationwide
												healthcare systems.</p>
											<button class="event-teaser-btn">Learn More</button>
										</div>
									</div>
								</a>
								<a href="#">
									<div class="event-teaser__inner">
										<div class="event-teaser__image-background">
											<div class="event-teaser__image">
											<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/spplier.webp">';
							?>
											</div>
										</div>
										<div class="event-teaser__head">
											<h3>Supplier & Distributor</h3>
											<p>We help distributors meet government standards, streamline fulfillment,
												and
												connect with VA and DoD healthcare systems
												with confidence and compliance.</p>
											<button class="event-teaser-btn">Learn More</button>
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
								How We Help Manufacturers and Suppliers Grow Their Revenue
							</h2>
							<p>TrillaMed, founded by U.S. Army Airborne Ranger Veterans, is a Service-Disabled
								Veteran-Owned Small Business
								specializing in distributing medical.
							</p>
							<div class="who-we-are-items">
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Access Federal Opportunities
									</h3>
									<p>
										We connect your business with VA, DoD, and other government healthcare systems, expanding your market reach and unlocking reliable revenue streams.
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Simplify Contracts and Compliance
									</h3>
									<p>
										Our veteran-led team manages contract vehicles, pricing submissions, and federal regulations, turning complex procurement processes into clear and compliant growth pathways.

									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										Leverage SDVOSB Advantage
									</h3>
									<p>
										As a service-disabled veteran-owned business, we help you benefit from preferred contracting status to secure opportunities faster and more efficiently.
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										End-to-End Partnership and Support

									</h3>
									<p>
										From registration to fulfillment, our specialists guide you every step of the way, ensuring compliance, accelerating onboarding, and helping your organization scale with confidence.
									</p>
								</div>
							</div>
						</div>
						<div class="who-we-are-image image-cover">
							<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-3.webp">';
							?>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
				<section>
				<div class="wrapper">
					<div class="who-we-are">
							<div class="who-we-are-image image-cover">
							<?php
							echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-2.webp">';
							?>
						</div>
						<div class="who-we-are-content">
							<h2>
								How We Support Federal Healthcare Facilities in Delivering Better Care

							</h2>
							<p>TrillaMed, founded by U.S. Army Airborne Ranger Veterans, is a Service-Disabled
								Veteran-Owned Small Business
								specializing in distributing medical.
							</p>
							<div class="who-we-are-items">
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
									Access to Trusted Suppliers
									</h3>
									<p>
									 We provide federal healthcare facilities with direct access to a qualified network of compliant, certified suppliers who meet procurement and clinical standards.
									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
									Streamline the Procurement Process
									</h3>
									<p>
										 Our veteran-led team manages contracting, logistics, and compliance to eliminate inefficiencies and ensure every order moves seamlessly from request to delivery.


									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
									Expertise in Federal and State Regulations
									</h3>
									<p>
 									We help facilities navigate complex procurement frameworks, remain audit-ready, and resolve regulatory challenges with speed and accuracy.

									</p>
								</div>
								<div class="who-we-are-single-item">
									<h3 class="heading-3">
										End-to-End Partnership and Support
									</h3>
									<p>
										 From sourcing to fulfillment, our dedicated support team ensures every procurement mission is executed with precision, transparency, and on-time delivery.
									</p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<div class="am-s128"></div>

			<section class="ctn-full-width">
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
								perPage: 4,
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
							<p class="text statement">
								<b>Capabilities Statement</b>
 Academy Medical delivers advanced, cost-effective medical products and solutions that strengthen federal healthcare systems nationwide.
							</p>
							<p class="text">Through our expansive network of regional and global suppliers, we have provided federal hospitals, military bases, and government facilities with the tools, resources, and solutions necessary to conquer each day. Through our partnerships, we empower our purchasers with the following products:</p>
						</div>

						<div class="category-slider four-columns">
							<div class="category-item" data-category="cardiology">
								<div class="image-wrap">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-1.webp">';
							?>
								</div>
								<span>Durable Medical Equipment (DME)
								</span>
							</div>

							<div class="category-item" data-category="orthopedic">
								<div class="image-wrap">
													<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-2.webp">';
							?>
								</div>
								<span>Implants (Biological & Non-Biological)</span>
							</div>

							<div class="category-item" data-category="dental">
								<div class="image-wrap">
																<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-3.webp">';
							?>

								</div>
								<span>Personal Protective Equipment (PPE)</span>
							</div>

							<div class="category-item" data-category="surgical">
								<div class="image-wrap">
											<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-4.webp">';
							?>

								</div>
								<span>Soft Goods</span>
							</div>
							<div class="category-item" data-category="surgical">
								<div class="image-wrap">
								<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/categories-teaser-5.webp">';
								?>
								</div>
								<span>Soft Goods & Wound Care</span>
							</div>

						</div>
					</section>

				</div>
			</section>
			<div class="am-s128"></div>
			<section>
				<div class="wrapper">
					<div class="certification-compliance d-flex justify-content-between align-items-center flex-wrap">
						<div class="certification-compliance-content">
							<h2 class="heading-1">
								Certifications & Compliance
							</h2>
							<h3 class="heading-2">Committed to Quality. Built on Trust.</h3>
							<p>At Academy Medical, certifications are more than symbols — they reflect our unwavering
								commitment to excellence,
								accountability, and reliability in every federal partnership.</p>
							<p>As a verified Service-Disabled Veteran-Owned Small Business (SDVOSB), we uphold the
								highest standards of compliance
								across all federal healthcare networks, ensuring our partners and purchasers operate
								with complete confidence.
							</p>

						</div>
<div class="certification-compliance-logos">
	<div class="certification-compliance-logo">
			<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/footer-logo-01.png">';
								?>
	</div>
	<div class="certification-compliance-logo">
			<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/footer-logo-02.png">';
								?>
	</div>
</div>
					</div>
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-01.webp">';
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-02.webp">';
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-03.webp">';
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-01.webp">';
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-02.webp">';
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
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/cs-03.webp">';
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
