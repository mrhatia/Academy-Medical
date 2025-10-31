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


<script>
document.addEventListener('DOMContentLoaded', function () {
  var splide = new Splide('.stats-slider', {
    type: 'loop',
    focus: 'center',
    arrows: false,
    pagination: false,
    perMove: 1,
    autoWidth: true,
    gap: '20px',
    drag: false,
    clones: 6,
    autoScroll: {
      speed: 1,
      pauseOnHover: false,
      pauseOnFocus: false,
    },
    breakpoints: {
      768: {
        gap: '10px',
        focus: 'center',
        perPage: 1,
        autoScroll: {
          speed: 0.5
        },
      },
    },
  });

  splide.mount(window.splide.Extensions);
});
</script>



			  </div>

			</section>
<section>
				<div class="wrapper">
					<div class="numbers-stats d-flex align-items-center justify-content-between">
						<div class="numbers-content d-flex flex-column justify-content-center gap-30">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/usa-flag.webp">';
								?>
							<p>
								PCSI is a nationwide, values-based, mission-driven contractor that proudly
								serves the private and public sector.
							</p>
							<a href="#" class="about-link">ABOUT PCSI</a>
						</div>
						<div class="numbers-items">
							<div class="number-item">
								<p class="label">Improved Efficiency</p>
								<h3 class="heading-1">93%</h3>
								<p>Orders processed within 24 hours</p>
							</div>
							<div class="number-item">
								<p class="label">Faster Turnaround</p>
								<h3 class="heading-1">10 days</h3>
								<p>Average government AR collection</p>
							</div>
							<div class="number-item">
								<p class="label">Accelerated Payments</p>
								<h3 class="heading-1">24 hours</h3>
								<p>Vendor payments completed</p>
							</div>
							<div class="number-item">
								<p class="label">Revenue Growth</p>
								<h3 class="heading-1">$200M+</h3>
								<p>Annual sales across partners</p>
							</div>
							<!-- <div class="number-item">
								<p class="label">Supplied in Medical Equipment</p>
								<h3 class="heading-1">$1.3B</h3>
								<p>Supplied in Medical Equipment</p>
							</div>
							<div class="number-item">
								<p class="label">Federal Facilities Supported</p>
								<h3 class="heading-1">700+</h3>
								<p>Serving nationwide</p>
							</div>
							<div class="number-item">
								<p class="label">Equipment & Supply Items</p>
								<h3 class="heading-1">70,000+</h3>
								<p>In active distribution</p>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
				<section class=" about-us-bg">
				<div class="wrapper">
					<div class="about-us">
						<div class="about-us-inner">
							<div class="about-us-content">
								<h3>Founded in Service. Mission Driven. Committed to Better Care.</h3>
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
								<ul>
									<p>In federal procurement, reliability is everything. That is where we lead.</p>
									<li>Where others navigate compliance, we master it.</li>
									<li>Where others transact, we partner.</li>
								</ul>
								<div class="about-us-btn d-flex">
									<a href="#" class="trans-btn" tabindex="0">Partner With Us</a>
									<a href="#" class="button" tabindex="0">Learn More About Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
			<section>
				<div class="wrapper">
					<div class="what-we-do">
						<div class="section-heading">
							<div class="kicker">Our Vision</div>
							<h2>
								Industry Leading Suppliers
							</h2>
							<p>Through our expansive network of regional to global suppliers, we have provided federal
								hospitals, military bases, and
								government facilities with the tools, resources, and solutions necessary to conquer each
								day. Through our partnerships,
								we empower our purchasers with the following products:</p>
						</div>
						<div class="what-we-do-inner d-flex flex-wrap justify-content-between ">
							<div class="what-we-do-left-content">
								<h4>Capabilities Statement</h4>
								<p>Academy Medical delivers advanced, cost-effective medical products and solutions that strengthen federal healthcare systems nationwide.</p>
								<p>Through our expansive network of regional and global suppliers, we have provided federal hospitals, military bases, and government facilities with the tools, resources, and solutions necessary to conquer each day. Through our partnerships, we empower our purchasers with the following products:</p>
								<a href="#" class="button">About Us</a>
							</div>
							<div class="what-we-do-right-content">
								<div class="what-we-do-items two-columns">
									<div class="what-we-do-item">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/global-icon.svg">';
								?>
										<p><strong>Durable Medical Equipment (DME)</strong></p>
									</div>
									<div class="what-we-do-item">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/global-icon.svg">';
								?>
										<p><strong>Implants (Biological & Non-Biological)</strong></p>
									</div>
									<div class="what-we-do-item">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/global-icon.svg">';
								?>
										<p><strong>Personal Protective Equipment (PPE)</strong></p>
									</div>
									<div class="what-we-do-item">
										<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/global-icon.svg">';
								?>
										<p><strong>Soft Goods & Wound Care</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>
			<section class="why-us-section">
				<div class="wrapper">
					<div class="why-us">

						<div class="section-heading">
							<h2><span>Data-Driven</span> Outcomes<br>from Our Conversation<br>Intelligence Platform</h2>
						</div>

						<div class="why-us-inner d-flex flex-wrap align-items-center justify-content-between">
							<div class="why-us-content">
								<div class="why-us-content-inner">
									<div class="content-block active">
										<h3><span>01</span> Government</h3>
										<p>Empower your team to engage students with timely, multi-channel conversations
											that drive
											enrollment completion, reduce melt, and improve outcomes.</p>
									</div>

									<div class="content-block">
										<h3><span>02</span> Manufacturer</h3>
										<p>Build lifelong alumni relationships and inspire donor action with
											personalized
											outreach,
											backed by data that helps your team drive giving outcomes at scale.</p>
									</div>
									<div class="content-block">
										<h3 class="inactive"><span>03</span> Supplier & Distributor</h3>
										<p>Build lifelong alumni relationships and inspire donor action with
											personalized
											outreach,
											backed by data that helps your team drive giving outcomes at scale.</p>

									</div>
									<div class="why-us-btn">
										<a href="#" class="button">Learn More</a>
									</div>
								</div>
							</div>

							<div class="why-us-image image-cover">
								<div class="image-grid">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/goverment.webp">';
								?>
									<div class="stat orange">
										<h4>98%</h4>
										<p>retention of students who opt in to messaging</p>
									</div>
									<div class="stat purple">
										<h4>300%</h4>
										<p>increase in giving day donations</p>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</section>
			<script>
				document.addEventListener('DOMContentLoaded', function () {
					const container = document.querySelector('.why-us-content-inner');
					const blocks = document.querySelectorAll('.content-block');

					const observer = new IntersectionObserver(
						(entries) => {
							entries.forEach((entry) => {
								if (entry.isIntersecting) {
									entry.target.classList.add('visible');
									// Show text when visible
									const text = entry.target.querySelector('p');
									if (text) {
										text.style.display = 'block';
									}
								}
							});
						},
						{
							root: container,
							threshold: 0.3, // trigger when 30% visible
						}
					);

					// Observe all except first
					blocks.forEach((block, i) => {
						if (i !== 0) {
							observer.observe(block);
						}
					});
				});
			</script>
			<div class="am-s128"></div>
			<section>
				<div class="wrapper">
					<div class="two-columns-tiles-items d-flex ">
						<div class="two-columns-tiles-item d-flex justify-content-center flex-column">
							<h2>Creating Change</h2>
							<p>
								Advocacy is at the heart of what we do. We champion the rights of individuals
								with disabilities, amplifying their voices to drive accessibility and opportunity
								in the workplace and beyond. Discover how our initiatives empower communities
								and influence meaningful change.
							</p>
							<a href=" #" class="two-columns-tiles-btn button" tabindex="0">Advocacy</a>
						</div>

						<div class="two-columns-tiles-item d-flex justify-content-center flex-column">
							<h2>Collaborating for Impact</h2>
							<p>
								We believe in the power of partnerships to create lasting opportunities. By working
								alongside organizations, government agencies, and businesses, PCSI builds pathways
								and fosters economic empowerment for people with disabilities. Explore how our
								collaborations make a difference.
							</p>
							<a href="#" class="two-columns-tiles-btn button" tabindex="0">Partnership</a>
						</div>
					</div>
				</div>
			</section>
			<div class="am-s128"></div>

		<section class="credibility-section">
				<div class="wrapper">
					<div class="logo-grid-heading section-heading">
						<div class="kicker">Here comes the credibility</div>
						<h2 class="main-heading">
							22 years of <br>
							design excellence
						</h2>
					</div>

					<div class="logo-grid three-columns ">
						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-1.webp">';
								?>
							<p class="review">45 REVIEWS ★★★★★</p>
						</div>

						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-2.webp">';
								?>
							<p class="review">36 REVIEWS ★★★★★</p>
						</div>

						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-3.webp">';
								?>
							<p class="review">59 REVIEWS ★★★★★</p>
						</div>

						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-4.webp">';
								?>
							<p class="review">NO. 4,207</p>
						</div>

						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-5.webp">';
								?>
							<p class="review">SOLUTIONS PARTNER</p>
						</div>

						<div class="logo-item">
							<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/uploads/supplier-logo-6.webp">';
								?>
							<p class="review">AGENCY PARTNER</p>
						</div>
					</div>
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
						slidesToShow: 3,
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
						<div class="section-heading">
							<div class="kicker">Upcoming Events</div>
							<h2 class="heading-1">Informative & Impactful</h2>
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
							<div class="section-heading cta-heading">
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

			<div class="am-s96"></div>

			<section class="faq-section">
				<div class="wrapper">
					<div class="section-heading">
						<h2>Frequently Asked Questions</h2>
					</div>



					<div class="faq-container d-flex flex-column gap-10">
						<div class="faq-item active">
							<button class="faq-question">
								How do I get started?
								<span class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
								</span>
							</button>
							<div class="faq-answer">
								<p>
									When you sign up, you'll start with the Free Plan. It's ideal for new teams and
									allows unlimited
									team members,
									but only 1 active editable project at a time. For more advanced features, check out
									our Basic,
									Premium, or
									Enterprise plans.
								</p>
							</div>
						</div>

						<div class="faq-item">
							<button class="faq-question">
								What is included in the Free Plan?
								<span class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
								</span>
							</button>
							<div class="faq-answer">
								<p>The Free Plan includes unlimited team members and basic collaboration features.</p>
							</div>
						</div>

						<div class="faq-item">
							<button class="faq-question">
								How do I cancel my membership?
								<span class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
								</span>
							</button>
							<div class="faq-answer">
								<p>You can cancel your membership anytime in your account settings under “Billing”.</p>
							</div>
						</div>

						<div class="faq-item">
							<button class="faq-question">
								How do I transfer my membership to a different account?
								<span class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
								</span>
							</button>
							<div class="faq-answer">
								<p>Contact our support team and we’ll help you securely transfer your membership.</p>
							</div>
						</div>

						<div class="faq-item">
							<button class="faq-question">
								What is the refund policy?
								<span class="icon">
									<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/topbar-cross-icon.svg">';
								?>
								</span>
							</button>
							<div class="faq-answer">
								<p>Refunds are available within 14 days of purchase, depending on your plan’s terms.</p>
							</div>
						</div>
					</div>
					<div class="faq-contact">
						<a href="mailto:info@academymedical.net" tabindex="0">
							<div class="contact-box">
							<div class="icon">
								<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/mail-icon.svg">';
								?>
							</div>
							<h4>Email Us</h4>
							<p>Have questions or need assistance? Reach out to us via email. We're here to help!</p>
						</div>
</a>
						<a href="tel:+4733378901">
						<div class="contact-box">
							<div class="icon">
								<?php
									echo '<img src="' . esc_url( get_template_directory_uri() ) . '/assets/src/images/phone-icon.svg">';
								?>
							</div>
							<h4>Call Us</h4>
							<p>Need help or have inquiries? Call us anytime. We’re here for you.</p>
						</div>
						</a>
					</div>
				</div>
			</section>
			<div class="am-s96"></div>

			<script>
				const faqItems = document.querySelectorAll('.faq-item');
				const searchInput = document.getElementById('faqSearch');

				faqItems.forEach((item) => {
					const button = item.querySelector('.faq-question');
					button.addEventListener('click', () => {
						faqItems.forEach((i) => {
							if (i !== item) {
								i.classList.remove('active');
							}
						});
						item.classList.toggle('active');
					});
				});

				searchInput.addEventListener('input', () => {
					const query = searchInput.value.toLowerCase().trim();

					faqItems.forEach((item) => {
						const question = item.querySelector('.faq-question').innerText.toLowerCase();
						const answer = item.querySelector('.faq-answer p').innerText.toLowerCase();

						// Show item if query matches question or answer
						if (question.includes(query) || answer.includes(query)) {
							item.style.display = 'block';
						} else {
							item.style.display = 'none';
						}
					});
				});
			</script>
	<!-- Content End -->
</section>
<?php get_footer(); ?>
