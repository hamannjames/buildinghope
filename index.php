<?php get_header(); ?>

<div id="slider" class="owl-carousel">
    <div class="slider-item" style="background-image:url('http://buildinghope.wpengine.com/wp-content/uploads/2017/10/building_front.jpg')">
    </div>

    <div class="slider-item" style="background-image:url('http://buildinghope.wpengine.com/wp-content/uploads/2017/10/building_back.jpg')">
    </div>
</div>

<article id="site-content">
    <section class="page-section" id="our-mission">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h1 id="main-heading" class="section-heading">We need to raise $100,000 in 30 days!</h1>

                <p>
                    We have been called to be a campus of black, brown, asian, native, and white people. We have been called
                    to be a church campus where the rich and poor sit under one roof, becoming a family and loving Jesus together.
                </p>

                <p>
                    To fulfill that dream, we need a roof, and we believe we have found that roof in this building. We believe this
                    location can empower us to do great things for the people of Everett, from Celebrate Recovery, to feeding people,
                    to a pre-school for at-risk families, to worship practice, to youth and college small groups, MOPS, prayer meetings,
                    and so many others. In order to see that happen, we need to raise <strong>$100,000 in 30 days</strong>!
                </p>
            </div>
        </div>
    </section>

    <section class="page-section color">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h2 class="section-heading">What we've raised so far</h1>

                <p>
                    Some generous people have given us a head start and we are more than grateful to them. Keep checking back
                    for updates on how much we have left to raise!
                </p>

                <div id=countdown-wrap>
  <div id="goal">$100,000</div>
  <div id="glass">
    <div id="progress">
    </div>
  </div>
  <div class="goal-stat">
    <span class="goal-number">1%</span>
    <span class="goal-label">Funded</span>
  </div>
  <div class="goal-stat">
    <span class="goal-number">$1,000</span>
    <span class="goal-label">Raised</span>
  </div>
  <div class="goal-stat">
    <span class="goal-number"><div id="countdown"></div></span>
    <span class="goal-label">30 Days to Go</span>
  </div>
  <div class="goal-stat">
    <span class="goal-number">2</span>
    <span class="goal-label">Sponsors</span>
  </div>
</div>
<!--http://stackoverflow.com/questions/9335140/how-to-countdown-to-a-date -->

            </div>
        </div>
    </section>

    <section class="page-section" id="are-you-in">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h2 class="section-heading">Are you in?</h1>

                <p>
                    Join us in our dream of bringing hope and the message of Jesus to the people of Everett! If you'd like to partner
                    with us, there are a couple of ways you can give:
                </p>
            </div>
        </div>
    </section>

    <section class="page-section" id="one-time-gift">
        <div class="page-section-container no-padding-top">
            <div class="page-section-content text-center">
                <h2 class="section-heading">1-Time Gift</h1>

                <div class="icons-wrapper">
                    <div class="icon-content main">
                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>

                        <h3>Click the link</h3>

                        <p>
                            Click our give link below to go to our secure giving page
                        </p>
                    </div>

                    <div class="icon-content">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="icon-content main">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                        <h3>Select Everett location</h3>

                        <p>
                            Select North Everett Campus from the location dropdown
                        </p>
                    </div>

                    <div class="icon-content">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </div>

                    <div class="icon-content main">
                        <i class="fa fa-building" aria-hidden="true"></i>

                        <h3>Select Building Fund</h3>

                        <p>
                            Select Everett Building from the funds dropdown
                        </p>
                    </div>
                </div>

                <p>Then enter an amount and optional memo and click next. We thank you for your gift!</p>

                <a target="_blank" class="theme-button" href="https://giving.onthecity.org/canyoncreek/uauth_giving/new?city_account_id=320&mobile=0">Give Now</a>
            </div>
        </div>
    </section>

    <section class="page-section color" id="6-month-pledge">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h2 class="section-heading">6-Month Pledge</h1>

                <p>
                    If you are interested in pledging to this cause, please fill out the form below. We are so grateful to you and your pledge!
                </p>

                <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h2 class="section-heading">Will you join us?</h1>

                <p>
                    We thank you for your interest and hope you our cause. If you have any questions, please call or email us
                    using the information below. We hope to hear from you and hope you help bring hope to the people of Everett!
                </p>

                <div class="contact-info">
                    <span>Email: <a href="mailto:danhamannmedia@gmail.com">danhamannmedia@gmail.com</a></span>
                    <span>Cell: <a href="tel:2064061934">206-406-1934</a></span>
                </div>

                <a class="theme-button" href="#are-you-in">Give Now</a>
            </div>
        </div>
    </section>
</article>

<?php get_footer(); ?>
