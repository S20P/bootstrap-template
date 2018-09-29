<!-- Loader -->

<div class="loader">
  <div class="loader-img"></div>
</div>

<!-- Top content -->
<div class="top-content">

  <!-- Top Bar-->
  <div class="top-bar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-sm-12 left-top">
          <div class="work-hours">
            <ul>
              <li> <span class="top-label"> <i class="fa fa-clock-o " aria-hidden="true"></i>Work Hours : </span><?php echo $workingHours;?></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 right-top">
          <div class="contact-details">
            <ul>
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel: (800)-890-9432"><?php echo $phone; ?></a></li>
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto: noreply@designnrank.com"> <?php echo $companyEmail;?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Bar Ends-->

  <!-- Top menu -->
  <nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Services</a></li>
          <li><a class="scroll-link" href="#gallery">Our Work</a></li>
          <li><a class="scroll-link" href="#contact-us">Contact Us</a></li>
          <!-- <li><a class="scroll-link" href="#testimonials">Testimonials</a></li>-->
        </ul>
      </div>
    </div>
  </nav>
  <div class="inner-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12 text">
          <h1 class="wow fadeInLeftBig"> <strong>Flawless Construction </strong>On Every Home.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Owning a home is a dream for many people in Montreal and HomeStruct is committed to making sure that the home you buy is well-built, rugged, and designed to last. With us, you have a local partner capable of creating only the best custom, modular, and manufactured homes.</p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a> </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 form-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Request A Quote</h3>
                <p>Fill out the form below and we will get in touch within 24 hours.</p>
              </div>
            </div>
            <div class="form-bottom contact-form">
              <form role="form" action="assets/contact.php" method="post" id="slider-form">
                <div class="form-group">
                  <label class="sr-only" for="contact-email">Email</label>
                  <input type="email" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email" required>
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-subject">Subject</label>
                  <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-phone">Phoen Number</label>
                  <input type="text" name="phone" placeholder="Phone Number..." class="contact-phone form-control" id="contact-phone">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-message">Message</label>

                  <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
                  <div class="g-recaptcha" data-sitekey="6LeaAycUAAAAACwYTJ1rwkJfFz0PN11A_ZwUTQs5"></div>
                </div>
                <div class="submit-box">
                  <button type="submit" class="sb-btn">Send message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- About Section -->
<!--<div class="features-container section-container about-container" id="about">
  <div class="about_image"><img src="assets/img/about_bg.png" alt=""></div>
  <div class="container subcont">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">Montreal's Best Home Builder </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">   From smaller manufactured homes to sprawling custom constructions, HomeStruct has been the leading provider of local home building services for years. What we offer is a seamless blend of home construction quality at affordable prices.</p>
        <p class="about-us">Your new custom, modular, or manufactured home in Montreal is a major step and we want to be there to help you enjoy what it means to be a home owner. With unmatched construction ability and a service-centered approach to home building, we're here to help.</p>
      </div>
    </div>
  </div>
</div>-->
<div class="features-container section-container about-container" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 more-features section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> Montreal's Best Home Builder</h3>
        <p class="about-us">   From smaller manufactured homes to sprawling custom constructions, HomeStruct has been the leading provider of local home building services for years. What we offer is a seamless blend of home construction quality at affordable prices.</p>
        <p class="about-us">Your new custom, modular, or manufactured home in Montreal is a major step and we want to be there to help you enjoy what it means to be a home owner. With unmatched construction ability and a service-centered approach to home building, we're here to help.</p>
      </div>
        <div class="col-sm-6 about_image">
            <img src="assets/img/about_bg.png" alt="">
        </div>
    </div>
   </div>
</div>
<!-- Service -->
<div class="service-container section-container section-container-gray-bg" id="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 more-features section-description wow fadeIn">
        <h2>Our Services</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> <strong>High-End </strong>Home Building Services</h3>
        <p>Homes come in all shapes and sizes, but HomeStruct is a master of them all. Check out the different types of homes we can construct by clicking the service areas to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="services ">


         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                      <p>Building a custom home in Montreal means you have complete control and the exact property you want, from right master bedroom size to stunning granite countertops. At HomeStruct, we'll work together and be there every step of the way to make sure that the final construction perfectly matches your vision.</p>
                      <p>With on-staff architects and technicians that have been in the business for years, HomeStruct has everything it takes to develop a custom construction that you'll be proud to call home. Starting with an extensive design phase, we'll plan out every last detail and give an accurate price quote so you'll know the cost before we lay the first stone.</p>
                      <p>During the build phase, we'll maintain open communication lines to keep you up to date with the progress of your Montreal custom home and you're welcome to visit the property to see for yourself the quality of our work. Our goal at HomeStruct is complete client satisfaction and you can rest assured that we deliver every time.</p>
                      <p>When you want an expert design/build solution for your Montreal custom home, HomeStruct is the name to remember. Call us today at 800-890-9432.</p>
               </div>
         </div>
           <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">
                        <p>In choosing a partner for your Montreal modular home, experience and quality are paramount. At HomeStruct, we have both and our many successful installations can be seen around the city. From the first moment you step through the door, you'll know that you made the right decision to work with us.</p>
                        <p>For many people in Montreal, a modular home is the perfect option for fast construction while still retaining some design choices to personalize your property. Our modular home models run the gamut from single family houses to duplexes and much more. In addition, HomeStruct provides many additional features to perfectly suit your specific needs.</p>
                        <p>Because we're local, you can rest assured that every HomeStruct modular home will completely conform to Montreal codes and up to our high standards. From the plumbing and electrical systems to the paint on the walls, we believe in quality, pure and simple. Your new home will be built to last from every possible perspective.</p>
                        <p>For an affordable modular home in Montreal of the highest quality, call HomeStruct at 800-890-9432.</p>
             </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">
                        <p>Manufactured homes may have gotten a bad reputation in the past, but the truth is that today's advanced construction and transportation methods ensure that new models are of a much higher quality. Designed and built by HomeStruct, your manufactured home will be the best that money can buy and comes with an extended craftsmanship guarantee.</p>
                        <p>What separates HomeStruct from other Montreal manufactured home builders is not only experience and technical ability, it's something that goes much deeper. We're a local business and care about the homes we create for our neighbors. If we wouldn't feel comfortable living in one of our manufactured homes, we won't sell it to you either.</p>
                        <p>The big benefit of choosing a manufactured home in Montreal is obviously the price. Compared to custom or modular homes, it's much cheaper and you'll still have plenty of customizable features. HomeStruct will help you find the manufactured home you want, choose the right options, and make sure it's installed properly.</p>
                        <p>Call 800-890-9432 to have all your Montreal manufactured home questions answered by an HomeStruct expert.</p>
               </div>
         </div>



<!--
				<div class="panel panel-primary">
				  <div class="panel-heading collapsed"  data-acc-link="service1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="service1">
            <p>Building a custom home in Montreal means you have complete control and the exact property you want, from right master bedroom size to stunning granite countertops. At HomeStruct, we'll work together and be there every step of the way to make sure that the final construction perfectly matches your vision.</p>
            <p>With on-staff architects and technicians that have been in the business for years, HomeStruct has everything it takes to develop a custom construction that you'll be proud to call home. Starting with an extensive design phase, we'll plan out every last detail and give an accurate price quote so you'll know the cost before we lay the first stone.</p>
            <p>During the build phase, we'll maintain open communication lines to keep you up to date with the progress of your Montreal custom home and you're welcome to visit the property to see for yourself the quality of our work. Our goal at HomeStruct is complete client satisfaction and you can rest assured that we deliver every time.</p>
            <p>When you want an expert design/build solution for your Montreal custom home, HomeStruct is the name to remember. Call us today at 800-890-9432.</p>
              </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading"  data-acc-link="service2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="service2">
            <p>In choosing a partner for your Montreal modular home, experience and quality are paramount. At HomeStruct, we have both and our many successful installations can be seen around the city. From the first moment you step through the door, you'll know that you made the right decision to work with us.</p>
            <p>For many people in Montreal, a modular home is the perfect option for fast construction while still retaining some design choices to personalize your property. Our modular home models run the gamut from single family houses to duplexes and much more. In addition, HomeStruct provides many additional features to perfectly suit your specific needs.</p>
            <p>Because we're local, you can rest assured that every HomeStruct modular home will completely conform to Montreal codes and up to our high standards. From the plumbing and electrical systems to the paint on the walls, we believe in quality, pure and simple. Your new home will be built to last from every possible perspective.</p>
            <p>For an affordable modular home in Montreal of the highest quality, call HomeStruct at 800-890-9432.</p>
           </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading"   data-acc-link="service3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="service3">
             <p>Manufactured homes may have gotten a bad reputation in the past, but the truth is that today's advanced construction and transportation methods ensure that new models are of a much higher quality. Designed and built by HomeStruct, your manufactured home will be the best that money can buy and comes with an extended craftsmanship guarantee.</p>
             <p>What separates HomeStruct from other Montreal manufactured home builders is not only experience and technical ability, it's something that goes much deeper. We're a local business and care about the homes we create for our neighbors. If we wouldn't feel comfortable living in one of our manufactured homes, we won't sell it to you either.</p>
             <p>The big benefit of choosing a manufactured home in Montreal is obviously the price. Compared to custom or modular homes, it's much cheaper and you'll still have plenty of customizable features. HomeStruct will help you find the manufactured home you want, choose the right options, and make sure it's installed properly.</p>
             <p>Call 800-890-9432 to have all your Montreal manufactured home questions answered by an HomeStruct expert.</p>
           </div>
				</div>-->


                	<!--<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?/*php echo $service5; */?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo5">
				  	"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
				  </div>
				</div>-->
	</div>
    </div>

    </div>
  </div>
</div>

<!-- Gallery Section -->
<div class="always-beautiful-container section-container gallery-container" id="gallery">

  <div class="container">


    <div class="row">
      <div class="col-sm-12 always-beautiful section-description wow fadeIn">
        <h2>Our Work</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="lightboxgallery-gallery clearfix">


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php echo $service1; ?>" data-alt="<?php echo $service1; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
          </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service1; ?>" data-alt="<?php echo $service1; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
          </div>
          </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="<?php echo $service2; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
          </div>
          </a>


        <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service2; ?> " data-alt="<?php echo $service2; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service2; ?> </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3; ?>" data-alt="<?php echo $service3; ?>" data-desc="">
         <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
         </div>
         </a>
          </div>
      </div>
    </div>

  </div>
</div>

<!-- CTA section -->
<div class="call-to-action-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Call us on</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <p class="cta-desc"> Local to Montreal, our custom, modular, and manufactured homes are available in all locations in the surrounding area.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 section-bottom-button wow fadeInUp"></div>
    </div>
  </div>
</div>

<!-- After CTA section-->
<div class="section-container after-cta wh-container">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="emergency">
          <div class="img-box"> <img src="assets/img/24hr.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-desc">
            <h3><?php echo $emergency; ?></h3>
          </div>
        </div>

      </div>
      <div class="col-md-6">
        <!--<div class="emergency">
          <div class="img-box"> <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-desc">
            <h3>Work Hours : <?php /*echo $workingHours; */?></h3>
          </div>
        </div>-->

          <div class="emergency">
          <div class="img-box"> <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-title" >
   <h3> Work Hours </h3>
          </div>
          <div class="wh-desc">
            <h5> MON-FRI 8:00am-5:00pm</h5>
            <h5> SAT-SUN By Appointment </h5>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--
 Our Client section
<div class="our-client-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Our Clients</h2>
        <div class="divider-1 fadeInUp cta "><span></span></div>
        <h3 class="service-subheader">Below is a list of clients we’ve worked with</h3>

        <div class="client_list">
          <div class="client_item"><img src="assets/img/client/c1.png"></div>
          <div class="client_item"><img src="assets/img/client/c2.png"></div>
            <div class="client_item"><img src="assets/img/client/c3.png"></div>
              <div class="client_item"><img src="assets/img/client/c4.png"></div>
                <div class="client_item"><img src="assets/img/client/c5.png"></div>
               </div>
        </div>

        </div>
      </div>
    </div>

</div>-->

<!-- Contact Us section -->
<div class="contact-us-container section-container contact-container">
  <div class="container-fluid">
    <div class="row row-eq-height">
      <div class="col-md-6 col-sm-6 contact-col cmap contact-info">
      <div class="address-box">
        <h3>Contact Info</h3>

        <!-- Address 1 -->
        <h5>Address</h5>
          <p><i class="fa fa-map-marker"></i> <?php echo $address." ".$city." ".$state." ".$country; ?></p>
       		 <p><i class="fa fa-phone"></i><?php echo $phone; ?></p>
        	<p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></p>
         <br>


          <!-- Address 2 -->
        <!--<h5>Adress 2</h5>
        <p><i class="fa fa-map-marker"></i> <?php echo $address2." ".$city2." ".$state2." ".$country2; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone2; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail2; ?>"><?php echo $companyEmail2; ?></a></p>-->

        <h3>We Accept</h3>

        <ul id="paymentsMethods">
          <li class="cash"> <img src="assets/img/paym_logo_1_cash.svg"> </li>
          <li class="cheque"> <img src="assets/img/paym_logo_11_cheque.svg"> </li>
          <li class="visa"> <img src="assets/img/paym_logo_2_visa.svg"> </li>
          <li class="mastercard"> <img src="assets/img/paym_logo_3_mastercard.svg"> </li>
          <li class="paypal"> <img src="assets/img/paym_logo_4_paypal.svg"> </li>
          <li class="discover"> <img src="assets/img/paym_logo_5_discover.svg"> </li>
          <li class="amexp"> <img src="assets/img/paym_logo_10_amexpress.svg"> </li>
        </ul>

        <p style="height:60px;">&nbsp;</p>
       </div>
      </div>
      <div class="col-md-6 col-sm-6 contact-col cmap" id="fullmap">
        <div id="map" style="width:100%; height:500px;"></div>
<!--        <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Contact Us</h3>
              </div>
            </div>
            <div class="form-bottom contact-form">
              <form role="form" action="assets/contact.php" method="post" id="footer-form">
                <div class="form-group">
                  <label class="sr-only" for="contact-email">Email</label>
                  <input type="email" name="email" placeholder="Email..." class="contact-email form-control" required id="contact-bottom-email"  >
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-subject">Subject</label>
                  <input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-bottom-subject">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-phone">Phoen Number</label>
                  <input type="text" name="phone" placeholder="Phone Number..." class="contact-phone form-control" id="contact-phone">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="contact-message">Message</label>
                  <textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-bottom-message"></textarea>
                     <div class="g-recaptcha" data-sitekey="6LeaAycUAAAAACwYTJ1rwkJfFz0PN11A_ZwUTQs5"></div>
                </div>
                <div class="submit-box">
                  <button type="submit" class="sbf-btn">Send message</button>
                </div>
              </form>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</div>
