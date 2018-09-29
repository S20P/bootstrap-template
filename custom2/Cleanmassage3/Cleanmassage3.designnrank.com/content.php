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
              <li> <span class="top-label"> <i class="fa fa-clock-o " aria-hidden="true"></i>Work Hours : </span>{workingHours}</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 right-top">
          <div class="contact-details">
            <ul>
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel:{phone}"><?php echo $phone; ?></a></li>
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto: {companyEmail}"> <?php echo $companyEmail;?></a></li>
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
          <h1 class="wow fadeInLeftBig"> <strong>Massage and Acupuncture </strong>by Specialists</h1>
          <div class="description wow fadeInLeftBig">
            <p>While some massage locations in {city} may apply the same movements to every customer that walks in the door, {companyName} knows that each client is different and our team of masseuses are well-versed in how to adapt their massage skills to meet the unique body and muscle problems you may be facing.</p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a> </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 form-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Get In Touch</h3>
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
         <h3 class="about-subheader">Uncompromising Quality and Standards</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">At {companyName}, our mission is simple – do everything we can to improve your life at an affordable price. Maintaining this motto, we've been growing since the day we opened our doors and many in {city} now come to us on a regular basis.</p>
        <p class="about-us">The key to {companyName}'s {city} success may have a foundation in our mission statement, but the truth is that we owe it all to our talented masseuses and other staff. They understand our vision and everything they do serves the same purpose. When you visit our massage facility, you'll feel better when you leave – that's a promise.</p>
        <p class="about-us">If you're curious about what {companyName} massage can do for you or want to meet our team, simply call us at {phone} or visit our {city} facility for a tour.</p>
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
        <h3 class="service-subheader"> <strong>A Wide Range </strong>of {companyName} Services </h3>
        <p>Our massage and acupuncture services are what your body needs for true relaxation. Read more about our services by clicking through below. </p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>
                 From lighter Swedish massages for routine physical improvement to deep tissue and sports massages meant to heal after a period of high exertion, our massages are based upon you the customer and your masseuse will adjust the requested service to meet your exact needs.
                </p>
                <p>
                 At the {companyName} massage salon in {city}, we're proud of what we do and our ability to help those in our local community at an affordable price. Contrary to popular belief, massage doesn't have to be an overly-expensive privilege – it's a healthy practice that can provide benefits to nearly everyone.
                </p>
                <p>
                Becoming a master masseuse isn't about finishing a quick program to take a certificate. As all the {companyName} massage experts know, it takes years in the field, gaining experience and honing one's craft. Every time we perform a massage on one of our clients, it's the culmination of a lifelong study.        </p>
                <p>
                Let our hands work magic for your stress, aches, and pains. Call the {companyName} massage location in {city} at {phone} for an appointment.
                </p>

            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>
                  Your pregnancy can be one of the most magical times of your life, but even this beauty comes with a price – drastic changes in your body. Our prenatal massage will help you stretch hard-to-reach muscles and react to the shifting of your body's gravity.
               </p>
               <p>
               The {companyName} team at our {city} location are ready to assist you as you experience firsthand how these changes can affect your daily life. In many regards, a prenatal massage is very similar to other forms, but there are a number of differences – the most noticeable being that many mothers prefer lying on their sides instead of face-down.
               </p>
                <p>
               {companyName} prenatal massages have a number of direct benefits, such as relaxing tired backs or reducing ankle and wrist swelling. As you near your due date, stretching and physical movement can be limited, but a visit to our {city} location will help you flex and work those dormant muscles.
               </p>
              <p>
               To learn more about our prenatal massage therapy in {city}, call {companyName} at {phone}.
               </p>

            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
                <p>
                 Coming from the East but now firmly entrenched in the West, acupuncture is gaining increased acceptance as an effective way to deal with chronic pain, headaches, anxiety, digestive problems, and much more. Never more popular, we offer complete acupuncture services.
                 </p>
                <p>
                 While most people think acupuncture as the ancient Chinese system seen in movies, the truth is that modern acupuncture in {city} has taken a very different form. All acupuncture experts at {companyName} may have learned the classic form first, but are also specialists in what is known as Western medical acupuncture – a distinct style.
                </p>
                <p>
                 In this more current form of acupuncture, also known as anatomical acupuncture, the nervous system receives stimulation during the process and is able to treat many pain areas, including myofascial and more. {companyName} clients also use our {city} acupuncture services for edema, vertigo, nausea, and tinnitus.
                </p>
                  <p>
                 Discuss how acupuncture in {city} may be a potential solution to your pain. Dial {phone} for a {companyName} professional.
                </p>


            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>
                It's no secret that as an athlete, your body takes more wear and tear than a typical sedentary lifestyle. As such, our sports massages are designed for those with a more active lifestyle and are a unique blend of deep tissue work, fascia stretching, and other techniques.
              </p>
              <p>
               At {companyName}, we're a full-featured sports massage provider and can create a custom package to meet all your needs, including osteopathy and physical therapy. Many of our local athletes in {city} already know that our service is second to none and a valuable asset in their quest for sporting perfection.
              </p>
              <p>
               To get started with an athletic massage program at {companyName}, we'll assign an experienced masseuse to set a baseline for problematic muscles and areas. As part of your training program, routine sports massages will help to correct tight muscles and other chronic pain that could be limiting your performance.        </p>
              <p>
               Take your tip-top shape one step further – call {companyName} at {phone} for a sports massage in {city}.
              </p>
            </div>
      </div>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="Massage Therapy" data-alt="Massage Therapy" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Massage Therapy</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="Prenatal Massage" data-alt="Prenatal Massage" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Prenatal Massage</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="Acupuncture" data-alt="Acupuncture" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Acupuncture</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Sports Massage" data-alt="Sports Massage" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Sports Massage</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Prenatal Massage " data-alt="Prenatal Massage" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Prenatal Massage </span> </div>
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
        <h2 class="wow fadeInUp cta">Call us at</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <p class="cta-desc">Ask about our Gift Certificates, Loyalty Rates and Referral Discounts for promotional advantages and we will get back to you shortly.</p>
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
          <div class="wh-title" >
   <h3> Work Hours </h3>
          </div>
          <div class="wh-desc">
            <h5> {workingHours}</h5>
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
      <div class="col-md-8 col-sm-7 contact-col cmap">
        <div id="map" style="width:100%; height:500px;"></div>
        <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
        </div>
      </div>
    </div>
  </div>
</div>
