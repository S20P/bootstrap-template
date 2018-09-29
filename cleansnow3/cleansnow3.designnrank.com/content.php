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
          <h1 class="wow fadeInLeftBig"> <strong>Winter Weather </strong>Is No Longer An Obstacle.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Every year, countless people in Montreal have winter weather problems, from a snowed-in driveway to icy sidewalks that can create a dangerous situation. Snowinator knows how to deal with these issues and much more – contact us for your snow and ice removal needs.</p>
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
         <h3 class="about-subheader">Proudly offering a full range of winter weather solutions.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">When it comes to snow removal, you want a company that not only knows what to do but also can be trusted to be there. Snowinator is exactly that company. Providing Montreal with snow removal services for years, we've proven that we're the right local choice.</p>
        <p class="about-us">Snowinator was built on the idea that effective snow removal shouldn't cost an arm and a leg. That's why our prices are designed with the greater Montreal community in mind. Compare our costs and services to others and you'll see why we've earned our trustworthy reputation.</p>
        <p class="about-us">Don't settle for a snow removal services company in Montreal that leaves you stranded. Call Snowinator at 800-890-9432.</p>
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
        <h3 class="service-subheader"><strong> A Wide Range </strong>of Services </h3>
        <p>Responding to snow and ice is our specialty and our comprehensive services will ensure that the colder months will pass quickly and easily. Our primary service areas are listed to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">

      <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
              <div id="service1" class="collapse panel-body">
              <div class="service-desc">
                  <p>If you think snow removal in Montreal is only about showing up with the right equipment, then you've never experienced Snowinator. While we do have a veritable army of snow removal equipment, we're also trained experts and know how to deal with all types of snow, ice, and winter weather situations.</p>
                  <p>Most of snow removal may be related to plowing and hauling snow and ice, but the truth is that Snowinator uses both preventive and reactive measures. With a storm coming in fast, we'll quickly have sidewalks, driveways, parking lots, and more ready for what Mother Nature can bring. Once the storm has abated, we'll be back out to de-ice, plow and get you back to normal function as soon as possible.</p>
                  <p>Other Montreal snow removal companies may just provide plowing services, but Snowinator is the real deal. In addition to professional plowing, we're also ready for shoveling, hauling, ice removal and nearly any other job. By calling us first, you'll have a full-service local solution capable of stepping up to any winter challenge.</p>
                  <p>Contact Snowinator by dialing 800-890-9432 to reach our Montreal office.</p>
                </div>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
              <div id="service2" class="collapse panel-body">
                <div class="service-desc">
                  <p>Being Montreal's top roadside assistance firm isn't easy. While Snowinator is proud of the way we help our local neighbors, the truth is that nobody is happy when they call us. Needing roadside assistance means there's a problem and our single goal is to solve that problem in the best possible way to make you happy when we leave.</p>
                  <p>The Snowinator roadside assistance team is capable of dealing with all manner of situations, from accidental lockouts to accident towing, dead batteries, and much more. Whatever your particular situation, we'll approach the problem with a level of customer service that aims to reduce your frustration and pain as much as possible.</p>
                  <p>Some Montreal roadside assistance companies may use your time of need as a way to charge more, but Snowinator never price-gouges our customers. Our rates are more than fair and competitive – ripping people off is simply not what we do. Our measure of success is how many people in the community recommend us to their friends and family.</p>
                  <p>When you're stuck and need roadside assistance in the Montreal area, call 800-890-9432 and Snowinator will be on the way.</p>
                </div>
                    </div>
       </div>




				<!-- <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="service1">
            <div class="service-desc">
              <p>If you think snow removal in Montreal is only about showing up with the right equipment, then you've never experienced Snowinator. While we do have a veritable army of snow removal equipment, we're also trained experts and know how to deal with all types of snow, ice, and winter weather situations.</p>
              <p>Most of snow removal may be related to plowing and hauling snow and ice, but the truth is that Snowinator uses both preventive and reactive measures. With a storm coming in fast, we'll quickly have sidewalks, driveways, parking lots, and more ready for what Mother Nature can bring. Once the storm has abated, we'll be back out to de-ice, plow and get you back to normal function as soon as possible.</p>
              <p>Other Montreal snow removal companies may just provide plowing services, but Snowinator is the real deal. In addition to professional plowing, we're also ready for shoveling, hauling, ice removal and nearly any other job. By calling us first, you'll have a full-service local solution capable of stepping up to any winter challenge.</p>
              <p>Contact Snowinator by dialing 800-890-9432 to reach our Montreal office.</p>
            </div>
				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="service2">
            <div class="service-desc">
              <p>Being Montreal's top roadside assistance firm isn't easy. While Snowinator is proud of the way we help our local neighbors, the truth is that nobody is happy when they call us. Needing roadside assistance means there's a problem and our single goal is to solve that problem in the best possible way to make you happy when we leave.</p>
              <p>The Snowinator roadside assistance team is capable of dealing with all manner of situations, from accidental lockouts to accident towing, dead batteries, and much more. Whatever your particular situation, we'll approach the problem with a level of customer service that aims to reduce your frustration and pain as much as possible.</p>
              <p>Some Montreal roadside assistance companies may use your time of need as a way to charge more, but Snowinator never price-gouges our customers. Our rates are more than fair and competitive – ripping people off is simply not what we do. Our measure of success is how many people in the community recommend us to their friends and family.</p>
              <p>When you're stuck and need roadside assistance in the Montreal area, call 800-890-9432 and Snowinator will be on the way.</p>
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

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service1; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service2; ?> " data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service2; ?> </span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
           </div>
           </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
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
        <p class="cta-desc">Based in Montreal, the Snowinator team provides snow removal services designed to reduce the difficulty of winter weather.</p>
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
