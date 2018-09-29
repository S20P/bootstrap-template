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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_TaxPreparation_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>Stop Paying Too Much  </strong>On Your Yearly Taxes.</h1>
          <div class="description wow fadeInLeftBig">
            <p>It's a simple fact that most people and businesses in Montreal overpay on their taxes each year. Instead of giving up your hard-earned money, there's a better answer – turn to the experts at Rescutax. We'll work to ensure you pay exactly the minimum and not a penny more. </p>
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
         <h3 class="about-subheader">Proudly taking the pain out of taxes one client at a time.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">Rescutax is an established local business that provides tax planning and preparation services to both individual and corporate clients. With a history that goes back for years, we are a Montreal fixture that has enabled countless entities pay the lowest possible taxes.</p>
      <p class="about-us">For us, taxes are more than an annual nuisance – they're the basis for many of our long-term relationships and nothing gives us more pleasure than seeing our clients reduce their tax obligations year after year. Where others see an annoyance, we see an opportunity to forge local bonds and provide a helpful service.</p>
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
         <h3 class="about-subheader">Proudly taking the pain out of taxes one client at a time.</h3>
          <p class="about-us">Rescutax is an established local business that provides tax planning and preparation services to both individual and corporate clients. With a history that goes back for years, we are a Montreal fixture that has enabled countless entities pay the lowest possible taxes.</p>
          <p class="about-us">For us, taxes are more than an annual nuisance – they're the basis for many of our long-term relationships and nothing gives us more pleasure than seeing our clients reduce their tax obligations year after year. Where others see an annoyance, we see an opportunity to forge local bonds and provide a helpful service.</p>
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
        <h3 class="service-subheader"> <strong>Comprehensive </strong>Tax Assistance</h3>
        <p>Whether you're a full-time employee at a large corporation, an independent contractor, a small business owner or a mid-sized company manager, you can benefit from the Rescutax Tax preparation experts.. Our knowledgeable, dedicated team has the tools and skills to prepare your taxes in a timely and efficient fashion.  Look to the below to check out what we do.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="services ">

          <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                       <p>Contrary to popular belief, personal tax laws don't change from person to person in Montreal. However, what does change is your tax preparer's acumen in optimizing your tax paying responsibilities and making sure that you're not paying more than you should. At Rescutax, we've been preparing individual and family tax returns for years and are true experts.</p>
            <p>In addition to using state-of-the-art tax preparation software, Rescutax also makes it a point to routinely retrain all of our employees to be updated on the latest taxation laws. By staying up-to-date, our team can help you rest assured that not only will your tax return be flawlessly prepared, but you'll also benefit from the lowest legal amount of tax paid and lower chances of an audit.</p>
            <p>While personal tax preparation in Montreal is all about the paperwork and filing, Rescutax endeavors to bring a human touch to an otherwise data-driven industry. When you choose us for your personal tax returns, we'll not only take care of all the documents but we'll also take the time to explain all relevant details so that you understand exactly how your taxes have been handled.</p>
            <p>Stop wasting time trying to do your own tax returns. Choose Rescutax in Montreal for personal tax preparation savings by dialing 800-890-9432.</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">
                       <p>Whether you're a corporate empire or just a small mom-and-pop shop in Montreal, Rescutax has business tax preparation services to take the headache out of your yearly filing. We've helped local companies of all sizes with their tax returns and hope to add your firm's name to our list of satisfied customers.</p>
            <p>Any Montreal corporate tax preparation service can fill out forms, but only Rescutax will make the difference by taking time to understand how the financial side of your business works and search for ways to lower your tax bill. The more we know about your operations, the better we can serve you with finding deductions, avoiding audits, and streamlining your tax procedures for years to come.</p>
            <p>As part of our commitment to local Montreal firms, you'll find the prices for our corporate tax preparation to be more than competitive. Instead of trying to make a quick buck, Rescutax is in the business of building tax preparation relationships that stretch for years and allow us to provide the best service possible.</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">

                     <p>While it's true that most people in Montreal don't pay attention to their taxes until the payment date is due, the secret about taxes is that the more planning you do, the more you'll save. Let Rescutax be your partner and we'll help you set up a tax strategy not just for today but also for years to come.</p>
             <p>Rescutax tax planning services in Montreal start with an initial consultation to determine your exact needs as well as identify potential areas that could result in a lower tax bill on a multi-year timeline. Our tax planning specialists are well-versed in deferred income, reducing estate taxes, and coordinating your life plans with existing tax benefits.</p>
             <p>The key to successful tax planning in Montreal is being proactive. At Rescutax, we understand this concept and have worked out custom strategies for our individual and corporate clients that include structuring and splitting income as well as using deferment tactics that can lower your tax responsibilities considerably.</p>
             <p>With a strategy in place and Rescutax by your side, you'll be ready for the future. Learn more about our tax planning services in Montreal by calling 800-890-9432.</p>

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
        <p class="cta-desc">As the premier tax preparer and planning adviser in Montreal, Rescutax has assisted many clients in the greater local area.</p>
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

</div> -->

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
