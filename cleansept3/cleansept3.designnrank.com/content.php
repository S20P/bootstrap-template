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
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel: (800) 890-9432"><?php echo $phone; ?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/Compny_logo.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Services</a></li>
          <li><a class="scroll-link" href="#gallery">Gallery</a></li>
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
          <h1 class="wow fadeInLeftBig">Professional <strong>Septic</strong> Services.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Nobody wants to talk about the function of their septic system, but you can bet it'll be a hot topic of conversation if something goes wrong. For rock-solid septic work that'll keep the discussion at bay, choose Septics for your installation, repair, or septic pumping needs.</p>
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
<div class="features-container section-container about-container" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">Full-featured and ready to help, we're your septic system experts.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">If you're a home or business owner in Montreal with a septic system, then there's a good chance you're already using Septics our services. Working with both residential and commercial properties, we're proud to be the area's leading name for quality septic installations, maintenance, repair, and more.</p>
        <p class="about-us">At Septics, our aim is to provide the type of septic services that keep our clients' waste removal systems running smoothly and our environment protected. Septic systems are an excellent solution, but only when they are installed and maintained properly. Whether you're starting from scratch or fixing an existing system, we're happy to be of assistance.</p>
        <p class="about-us">Call Septics for flawless septic system work and worry no more. Dial 800-890-9432 to reach us today!</p>
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
        <h3 class="service-subheader">The Royal Flush of<strong>  Septic </strong> Services. </h3>
        <p>From start to finish, Septics will make sure your flushes go where they should. Check out our septic services to the below to see how we can help.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">

      <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
               <div id="service1" class="collapse panel-body">
                 <div class="service-desc">
                   <p>Connecting to the municipal water system in Montreal may be good for some, but many prefer or need the freedom that only an independent septic system installation can bring. Our team can make it happen!</p>
                   <p class="service-title">More than digging a hole</p>
                   <p>Proper septic system installation in Montreal involves more than digging a hole and putting a tank in it. At Septics, we'll use our years of experience and training to evaluate your property's exact needs and site-specific limitations to come up with a custom septic solution. We offer pressurized pipes, gravel fields, treatment plants, and much more.</p>
                   <p>Unlike some Montreal septic system installers, we understand that dealing with the paperwork can be the biggest obstacle to overcome. As such, we'll help you every step of the way and will provide our professional expertise to assist in getting the local permits necessary for your preferred septic installation.</p>
                   <p>To discuss new septic system installations by Septics, dial 800-890-9432 or visit our Montreal office.</p>
                 </div>

              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
               <div id="service2" class="collapse panel-body">
                 <div class="service-desc">
                     <p class="service-title">Assessing capacity and structural integrity</p>
                   <p>Having a problem with your septic system can be more than an annoyance - it can be a major issue that demands immediate attention. Our inspection and repair services are the perfect answer for smooth septic performance for years to come.</p>
                   <p>To fix your Montreal septic system, Septics will first perform a thorough and detailed inspection of every component, from piping to the tank itself. In the case of the latter, our research will include capacity assessment, structural integrity, and detection of any unwanted leaks.</p>
                   <p>Once Septics has identified not only the problem but also what's causing it, then we'll get to work on the best possible solution. Our septic repairs in Montreal are designed to be long-term, not just an inferior patch job. With us, you can always count on quality of the highest order.</p>
                   <p>If you need a septic repair in Montreal and don't want to get your hands dirty, give Septics a call at 800-890-9432 and we'll take care of it.</p>
                 </div>

              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
               <div id="service3" class="collapse panel-body">
                 <div class="service-desc">
                   <p class="service-title">You'll appreciate the quality service we deliver.</p>
                   <p>From small homes to large commercial centers, if your Montreal property has a septic system, your tank will eventually need to be pumped. For affordable, safe, and clean pumping, we're your choice in the local area.</p>
                   <p>Most modern septic tanks are built to hold large quantities, but sludge build-up will still happen. When it's time to go back to a blank slate, the Septics team will visit your Montreal address and use our state-of-the-art equipment to make quick work of the job at hand. You may only see us once every few years, but you'll appreciate the quality service we deliver.</p>
                   <p>The consequences of not having your Montreal septic tank pumped can be severe, as system failure can cause health and water contamination problems. If you're not sure how close you are to needing a pump, we'll be happy to come to your location for a professional analysis.</p>
                   <p>Don't procrastinate and let a simple Montreal septic tank pumping job turn into a major repair. Call Septics at 800-890-9432 and let us help.</p>
                   </div>

              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
               <div id="service4" class="collapse panel-body">
                 <div class="service-desc">
                   <p>Whether your septic system is on the fritz or you need a temporary waste solution, our portable toilets are an excellent choice. With us, you'll have a portable toilets partner with the right inventory, quality, and services to scale to any size.</p>
                   <p class="service-title">Custom plans</p>
                   <p>From wedding parties and outdoor concerts to construction sites and marathons, you might need portable toilets in Montreal for any number of reasons. Regardless of your exact requirements, an Septics representative will work with you to develop a custom plan that has you and your guests completely covered.</p>
                   <p>For those in Montreal that have suffered a septic system problem, Septics portable toilets can also be used as a way to continue using your property while repairs take place. In this manner, your day-to-day life will be affected as minimally as possible.</p>
                   <p>At Septics, our portable toilets in Montreal are modern and clean. Call 800-890-9432 to learn about our full range, including toilets, urinals, showers, hand washing stations, and more.</p>
                  </div>

              </div>
        </div>









<!--

      <div class="panel panel-primary">
        <div class="panel-heading" data-acc-link="service1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
        <div class="panel-body" data-acc-content="service1">
          <div class="service-desc">
            <p>Connecting to the municipal water system in Montreal may be good for some, but many prefer or need the freedom that only an independent septic system installation can bring. Our team can make it happen!</p>
            <p class="service-title">More than digging a hole</p>
            <p>Proper septic system installation in Montreal involves more than digging a hole and putting a tank in it. At Septics, we'll use our years of experience and training to evaluate your property's exact needs and site-specific limitations to come up with a custom septic solution. We offer pressurized pipes, gravel fields, treatment plants, and much more.</p>
            <p>Unlike some Montreal septic system installers, we understand that dealing with the paperwork can be the biggest obstacle to overcome. As such, we'll help you every step of the way and will provide our professional expertise to assist in getting the local permits necessary for your preferred septic installation.</p>
            <p>To discuss new septic system installations by Septics, dial 800-890-9432 or visit our Montreal office.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading" data-acc-link="service2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
        <div class="panel-body" data-acc-content="service2">
          <div class="service-desc">
              <p class="service-title">Assessing capacity and structural integrity</p>
            <p>Having a problem with your septic system can be more than an annoyance - it can be a major issue that demands immediate attention. Our inspection and repair services are the perfect answer for smooth septic performance for years to come.</p>
            <p>To fix your Montreal septic system, Septics will first perform a thorough and detailed inspection of every component, from piping to the tank itself. In the case of the latter, our research will include capacity assessment, structural integrity, and detection of any unwanted leaks.</p>
            <p>Once Septics has identified not only the problem but also what's causing it, then we'll get to work on the best possible solution. Our septic repairs in Montreal are designed to be long-term, not just an inferior patch job. With us, you can always count on quality of the highest order.</p>
            <p>If you need a septic repair in Montreal and don't want to get your hands dirty, give Septics a call at 800-890-9432 and we'll take care of it.</p>
          </div>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading" data-acc-link="service3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
        <div class="panel-body" data-acc-content="service3">
          <div class="service-desc">
            <p class="service-title">You'll appreciate the quality service we deliver.</p>
            <p>From small homes to large commercial centers, if your Montreal property has a septic system, your tank will eventually need to be pumped. For affordable, safe, and clean pumping, we're your choice in the local area.</p>
            <p>Most modern septic tanks are built to hold large quantities, but sludge build-up will still happen. When it's time to go back to a blank slate, the Septics team will visit your Montreal address and use our state-of-the-art equipment to make quick work of the job at hand. You may only see us once every few years, but you'll appreciate the quality service we deliver.</p>
            <p>The consequences of not having your Montreal septic tank pumped can be severe, as system failure can cause health and water contamination problems. If you're not sure how close you are to needing a pump, we'll be happy to come to your location for a professional analysis.</p>
            <p>Don't procrastinate and let a simple Montreal septic tank pumping job turn into a major repair. Call Septics at 800-890-9432 and let us help.</p>
            </div>
        </div>
      </div>

      <div class="panel panel-primary">
        <div class="panel-heading" data-acc-link="service4"> <h3 class="panel-title"> <?php echo $service4; ?></h3></div>
        <div class="panel-body" data-acc-content="service4">
          <div class="service-desc">
            <p>Whether your septic system is on the fritz or you need a temporary waste solution, our portable toilets are an excellent choice. With us, you'll have a portable toilets partner with the right inventory, quality, and services to scale to any size.</p>
            <p class="service-title">Custom plans</p>
            <p>From wedding parties and outdoor concerts to construction sites and marathons, you might need portable toilets in Montreal for any number of reasons. Regardless of your exact requirements, an Septics representative will work with you to develop a custom plan that has you and your guests completely covered.</p>
            <p>For those in Montreal that have suffered a septic system problem, Septics portable toilets can also be used as a way to continue using your property while repairs take place. In this manner, your day-to-day life will be affected as minimally as possible.</p>
            <p>At Septics, our portable toilets in Montreal are modern and clean. Call 800-890-9432 to learn about our full range, including toilets, urinals, showers, hand washing stations, and more.</p>
           </div>
        </div>
      </div> -->



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
        <h2>Gallery</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="lightboxgallery-gallery clearfix">


          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php echo $service1; ?>" data-alt="Aidan Meyer" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
          </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service5_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3; ?> " data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service3_thumb.jpg" title=" <?php echo $service3; ?>" alt="<?php echo $service3; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service3; ?> </span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service4; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service4; ?>" alt="<?php echo $service4; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service4; ?></span> </div>
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
        <p class="cta-desc">Our team in Montreal is composed of innovative septic specialists with tons of talent and training.</p>
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
            <h5>SAT-SUN By Appointment</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Us section -->
<div class="contact-us-container section-container contact-container">
  <div class="container-fluid">
    <div class="row row-eq-height">
      <div class="col-md-4 col-sm-5 contact-col cmap contact-info">
      <div class="address-box">
        <h3>Contact Info</h3>

        <!-- Address 1 -->
        <h5>Adress</h5>
          <p><i class="fa fa-map-marker"></i> <?php echo $address." ".$city." ".$state." ".$country; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail; ?>"><?php echo $companyEmail; ?></a></p>
         <br>


          <!-- Address 2 -->
        <!-- <h5>Adress 2</h5>
        <p><i class="fa fa-map-marker"></i> <?php echo $address2." ".$city2." ".$state2." ".$country2; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone2; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail2; ?>"><?php echo $companyEmail2; ?></a></p> -->

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
      <div class="col-md-8 col-sm-7 contact-col cmap">
        <div id="map" style="width:100%; height:500px;"></div>
        <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Contact us</h3>
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
        </div>
      </div>
    </div>
  </div>
</div>
