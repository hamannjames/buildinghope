<?php get_header(); ?>

<div id="slider" class="owl-carousel">
    <div class="slider-item" style="background-image:url('http://buildinghope.wpengine.com/wp-content/uploads/2017/10/building_front.jpg')">
        <div class="slider-content">
            <h3 class="slider-title">Our Dream Building</h3>
            <h4 class="slider-sub-title">2201 Wetmore, Everett WA</h4>
        </div>
    </div>

    <div class="slider-item" style="background-image:url('http://buildinghope.wpengine.com/wp-content/uploads/2017/10/building_back.jpg')">
        <div class="slider-content">
            <h3 class="slider-title">A place to reach our community</h3>
        </div>
    </div>

    <div class="slider-item" style="background-image:url('http://buildinghope.wpengine.com/wp-content/uploads/2017/10/IMG_0496-1.jpg')">
        <div class="slider-content center">
            <h3 class="slider-title">Are you in?</h3>
        </div>
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
    <span class="goal-number red">1%</span>
    <span class="goal-label">Funded</span>
  </div>
  <div class="goal-stat">
    <span class="goal-number red">$1,000</span>
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

    <section class="page-section" id="1-time-gift">
        <div class="page-section-container">
            <div class="page-section-content text-center">
                <h2 class="section-heading">1-Time Gift</h1>

                <div class="icons-wrapper">
                    <div class="icon-content main">
                        <i class="fa fa-hand-pointer-o" aria-hidden="true"></i>

                        <h3>Click the give now button</h3>

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
                    If you are interested in pledging to this cause each month for the next 6 months, please fill out the form below. We are so grateful to you for your pledge!
                </p>

                <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </section>

    <section class="page-section" id="contact">
        <div class="page-section-container">
            <div class="page-section-content text-center max-width-content">
                <h2 class="section-heading">Are you in?</h1>

                <p>
                    Join us in our dream of bringing hope and the message of Jesus to the people of Everett! If you have any questions, please call or email us
                    using the information below. We hope to hear from you soon!
                </p>

                <p>
                    If you want to mail a check make it out to Canyon Creek Church and put Everett
                    Building in the memo line. Our office address is 15117 Main St Suite B205, Mill Creek, Wa 98012
                </p>

                <div class="contact-info">
                    <span>Email: <a href="mailto:dan.h@canyoncreekonline.com">dan.h@canyoncreekonline.com</a></span>
                    <span>Cell: <a href="tel:2064061934">206-406-1934</a></span>
                </div>

                <a class="theme-button" href="#1-time-gift">1-Time Gift</a>
            </div>
        </div>
    </section>
</article>

<?php get_footer(); ?>
