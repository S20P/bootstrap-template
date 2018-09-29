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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_GenericDentistry_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Services</a></li>
          <!--<li><a class="scroll-link" href="#gallery">Gallery</a></li>-->
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
          <h1 class="wow fadeInLeftBig"> <strong>A Full Suite  </strong>of Dental Services</h1>
          <div class="description wow fadeInLeftBig">
            <p>From infants to those nearing the century mark and beyond, we're your dentist of choice in Montreal.</p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a> </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 form-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Make An Appointment</h3>
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
  <div class="about_image"><img src="assets/img/about-image.jpg" alt=""></div>
  <div class="container subcont">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">We're proud to have built long-lasting connections with our satisfied clients and kept local dental health as high as possible. </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">While some may pass our dentist office in Montreal without thinking about who we are, those that have been coming to us for years know the difference. Both affordable and professional, the Full Trust and Care  dental care team has helped many in the local area with tooth issues big and small. </p>
      <p class="about-us">With this in mind, we're proud to have built long-lasting connections with our satisfied clients and kept local dental health as high as possible. In many cases, these relationships extend across generations and we've become known as the preferred family dentist of the Montreal area.</p>
      </div>
    </div>
  </div>
</div>-->
<div class="features-container section-container about-container" id="about">
    <div class="container">
    <div class="row">
      <div class="col-sm-6 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">We're proud to have built long-lasting connections with our satisfied clients and kept local dental health as high as possible. </h3>
         <p class="about-us">While some may pass our dentist office in Montreal without thinking about who we are, those that have been coming to us for years know the difference. Both affordable and professional, the Full Trust and Care  dental care team has helped many in the local area with tooth issues big and small. </p>
         <p class="about-us">With this in mind, we're proud to have built long-lasting connections with our satisfied clients and kept local dental health as high as possible. In many cases, these relationships extend across generations and we've become known as the preferred family dentist of the Montreal area.</p>
      </div>
        <div class="col-sm-6 about_image">
            <img src="assets/img/about-image.jpg" alt="">
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
        <h3 class="service-subheader"> <strong> Full Trust and Care </strong>Services</h3>
        <p>We have a full range of dental services, from check ups to crowns and more. Click through to learn more about our specialty areas.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="services ">

          <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                   <p>Twice a year, everyone should have a standard dental hygiene checkup. Whether you choose us or another Montreal area dentist, we encourage you visit a hygienist every six months to detect problems early and for cleaning.</p>
            <p>While most people think a checkup visit to their Montreal dentist is only about cleaning, the truth is that catching problems is much more important. At Full Trust and Care , we'll provide a thorough inspection and make sure that any cavities, gingival problems, wisdom teeth, or other issues are dealt with in a timely manner.</p>
            <p>Routine checkups are easy at Full Trust and Care . We'll send a friendly reminder whenever your six months date is coming due and use our convenient flexible scheduling to find the perfect time for your visit to our Montreal office. By making appointments twice a year, your teeth will get the treatments they need and have the best chance of lasting for decades to come.</p>
            <p>Get on the right path for excellent dental hygiene – call 800-890-9432 to schedule your next checkup with Full Trust and Care .</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">
                  <p>If you're dreading a trip to the dentist to fix a nagging cavity, then we have the right solution – a caring, effective experience from one of Montreal's leading fillings and crowns expert. Our gentle touch will have your teeth fixed quickly.</p>
            <p>For most people, the thought of visiting a Montreal dentist entails lots of pain, even if for a routine procedure. At Full Trust and Care , one of our goals is to as much pain out of a dental visit as possible, including with fillings and crowns. Careful to avoid sensitive nerves, our drilling, filling, and crowning are all done with your comfort in mind. </p>
            <p>One reason why so many people come to the Full Trust and Care  office in Montreal for their fillings and crowns has to do with our advanced equipment. While some dentists may make do with outdated chairs and more, we understand that keeping up-to-date with the latest dentistry advancements has a direct result on how you feel.</p>
             <p>Come see how a professional filling or crown procedure in Montreal can be. Dial 800-890-9432 for Full Trust and Care  - your local <experts class=""></experts></p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">
                    <p>Cosmetic dentistry is the art of making your teeth look their best. Whether it's by advanced whitening techniques or the application of porcelain or resin veneers, we'll use our dentistry talents to get rid of discoloring, chips, or tooth decay.</p>
             <p>Many people in Montreal think that over-the-counter tooth whitening kits from the store are good enough, but the truth is that they can actually do more harm than good. With a professional whitening service from Full Trust and Care , you'll safely get the brilliant shine you're looking for without any of the risk.</p>
             <p>In a similar vein, the team at Full Trust and Care  is proud to be local leaders for Montreal veneers. Working carefully to match your existing tooth color and stains, your new veneers will have a natural look that will seamlessly integrate into your existing smile. With years of veneer experience, we can provide an affordable and attractive solution.</p>
             <p>Don't be embarrassed about your smile, get it fixed by the Full Trust and Care  pros. Schedule your Montreal office visit by calling 800-890-9432 today!
     </p>

               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
                <div id="service4" class="collapse panel-body">
                     <p>Believe it or not, childhood dental problems are probably more common than you think. Fortunately, our Montreal dental office is well-equipped to deal with a range of issues, from premature tooth decay to gum disease and more.</p>
             <p>Having tooth problems at a young age can have a severe effect on your Montreal child, including speech and learning impairment, not to mention self-esteem. At Full Trust and Care , we're able to deal with nearly any childhood dental issue and we're proud to have positively affected so many lives in the local community.</p>
             <p>Pediatric dentistry and visits to Full Trust and Care  should start quite early, with most experts recommending the first visit between six months and one year of age. During this first visit, we'll create a trail of dental records and information as well as begin nurturing proper tooth growth and identify any possible future problems.</p>
             <p>With Full Trust and Care , your child's dental health will start right. Visit our Montreal office or call 800-890-9432 to speak to a member of our team.</p>

               </div>
         </div>









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
        <p class="cta-desc">Use the contact form below to contact us by email and we will get back to you at our earliest convenience.</p>
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
        <div class="emergency">
          <div class="img-box"> <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-desc">
            <h3>Work Hours : <?php echo $workingHours; ?></h3>
          </div>
        </div>

          <!--<div class="emergency">
          <div class="img-box"> <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-title" >
   <h3> Work Hours </h3>
          </div>
          <div class="wh-desc">
            <h5> MON-FRI 8:00am-5:00pm</h5>
            <h5> SAT-SUN By Appointment </h5>

          </div>
        </div>-->

      </div>

    </div>
  </div>
</div>


<!-- Our Client section 
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
-->
</div>

<!-- Contact Us section -->
<div class="contact-us-container section-container contact-container">
  <div class="container-fluid">
    <div class="row row-eq-height">
      <div class="col-md-6 col-sm-6 contact-col cmap contact-info">
      <div class="address-box">
        <h3>Contact Info</h3>

        <!-- Address 1 -->
        <h5>Address </h5>
          <p><i class="fa fa-map-marker"></i> <?php echo $address." ".$city." ".$state." ".$country; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></p>
         <br>


          <!-- Address 2 -->
        <!--<h5>Adress 2</h5>
        <p><i class="fa fa-map-marker"></i> <?php echo $address2." ".$city2." ".$state2." ".$country2; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone2; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail2; ?>"><?php echo $companyEmail2; ?></a></p>-->

        <!--<h3>We Accept</h3>

        <ul id="paymentsMethods">
          <li class="cash"> <img src="assets/img/paym_logo_1_cash.svg"> </li>
          <li class="cheque"> <img src="assets/img/paym_logo_11_cheque.svg"> </li>
          <li class="visa"> <img src="assets/img/paym_logo_2_visa.svg"> </li>
          <li class="mastercard"> <img src="assets/img/paym_logo_3_mastercard.svg"> </li>
          <li class="paypal"> <img src="assets/img/paym_logo_4_paypal.svg"> </li>
          <li class="discover"> <img src="assets/img/paym_logo_5_discover.svg"> </li>
          <li class="amexp"> <img src="assets/img/paym_logo_10_amexpress.svg"> </li>
        </ul>-->

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
