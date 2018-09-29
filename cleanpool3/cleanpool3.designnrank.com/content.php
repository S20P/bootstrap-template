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
          <h1 class="wow fadeInLeftBig"> Uncovering Your Pool's <strong>True Potential.</strong></h1>
          <div class="description wow fadeInLeftBig">
            <p>Local specialists ready to serve your Montreal pool's every need. Take a look at our frequently asked questions or contact us directly today. Countless clients call us every year during pool season! Find out why we’re Montreal’s leading pool maintenance team.</p>
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
         <h3 class="about-subheader">Experienced pool professionals. No pool is too big or too small.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">At Aquatic Jump, we truly love what we do. From fixing small pool problems to full-scale pool renovations, our work makes the pools of our clients more enjoyable. With that in mind, we know that what we're doing is essentially making people happy – not a bad way to earn a living.	</p>
        <p class="about-us">Local to Montreal, Aquatic Jump is not trying to compete with larger, national pool maintenance companies. Instead, we simply want to be the best option for our neighbors and others in the local area that are tired of paying too much for quality pool openings, repairs, and more.</p>
        <p class="about-us">Join those in Montreal who already know about our talents. Call Aquatic Jump at 800-890-9432 and experience the difference today!</p>
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
        <h3 class="service-subheader">A <strong> Wide Range </strong> of Services</h3>
        <p>We've tailored our business to cover all your pool requests and our full service offering is designed to have your pool taken care of in a quick and orderly fashion. Click through to learn about our offers.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
           <div id="service1" class="collapse panel-body">
             <div class="service-desc">
               <p>While having a pool can be a great addition to your Montreal property, going through the trouble of opening and closing each year can be more than a hassle	Our convenient services ensure you'll create treasured pool memories year after year.</p>
               <p>If you're like many pool owners in Montreal, then you know that special feeling you get when the weather warms up. No, we're not talking about the sun's rays on your face - we're talking about that heavy feeling you get every time you think about the work to be done to open your pool. At Aquatic Jump, our superior ability means we'll have it open in no time.	</p>
               <p>In a similar vein, waiting too long to close your Montreal pool can see the work pile up like dominoes. Falling leaves, debris from autumn rains, and more can make it harder and harder to close your pool. With Aquatic Jump, we'll come right when you've made the decision to end the season and close your pool at a reasonable price.</p>
               <p>Stop putting off a pool opening or closing in Montreal just because you're dreading the work. Aquatic Jump is here at 800-890-9432 for a quick, easy solution.</p>
             </div>

          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
           <div id="service2" class="collapse panel-body">
             <div class="service-desc">
               <p>Choosing to do your Montreal pool's maintenance yourself may save a few dollars in the short term, but it could end up costing a whole lot more in the long-run. Making mistakes with your water's chemistry or cleaning lines improperly can shorten the life of your pool.</p>
               <p>With Aquatic Jump, you no longer have to worry about the guesswork involved in Montreal pool maintenance. Every member of our team is well-trained in pool chemistry and has the experience needed to work on the inner mechanics of nearly every type of pool.</p>
               <p class="service-title">Training and experience in pool chemistry </p>
               <p>On every pool maintenance visit in Montreal, we offer a complete package of services, from simple water testing to scum line removal to visual inspection of your pumps and filters. The Aquatic Jump maintenance report will show not only the current state of your pool, but also all work we've completed as well as our recommendations to improve your pool's quality.</p>
               <p>Getting a professional pool maintenance in Montreal may be less expensive than you think. Contact Aquatic Jump at 800-890-9432 to learn more.</p>
             </div>

          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
           <div id="service3" class="collapse panel-body">
             <div class="service-desc">
               <p>Check out the best pools in Montreal and you might wonder how they all have the same beautiful shine reflecting through the crystal clear water. The secret's out and those in the know choose our pool cleaning services for a superior look.</p>
               <p class="service-title">Complete pool cleaning </p>
               <p>If you've gone through a complete pool cleaning in Montreal, then it's probably not a job you want to do again. The scrubbing and polishing can be hard work and is the reason that so many locals call Aquatic Jump. We take care of your pool cleaning from start to finish and because we're pros, the end result will look better than if you would have done it yourself.”</p>
               <p>In addition to our deep cleaning for Montreal pools, we also offer regular weekly cleaning to keep it looking exceptional throughout the swimming season. During these routine visits, we'll remove any debris, flush the scum line, and can even add deck or patio cleaning as an extra service.</p>
               <p>For a Montreal pool cleaner that does it all, look no further than Aquatic Jump. Call us today at 800-890-9432!</p>
               </div>

          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
           <div id="service4" class="collapse panel-body">
             <div class="service-desc">
               <p>Your pool may look wonderful when it's first installed, but time and use can see the luster fade. Our pool repair and renovation services are the perfect answer for pools that need a little TLC to return to their former glory.</p>
               <p class="service-title">A great look for your pool</p>
               <p>Like any other part of your Montreal property, your pool is not immune to needing repairs. Fortunately, Aquatic Jump is right here to take care of them swiftly and professionally, with specialists who can help identify faulty heaters, replace coping, and much more to bring your pool back from the brink.</p>
               <p>For some of our clients, it's not a case of function but more about their Montreal pool's appearance. In these cases, Aquatic Jump is able to offer stylish renovations that can transform your pool area. Let our team find a great look and start enjoying days spent by the pool more than ever before.</p>
               <p>Montreal pool renovations and repair by Aquatic Jump comes with honest pricing and trustworthy experts. Dial 800-890-9432 to hear more about our options.</p>
              </div>

          </div>
    </div>




<!-- 
				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="service1">
            <div class="service-desc">
              <p>While having a pool can be a great addition to your Montreal property, going through the trouble of opening and closing each year can be more than a hassle	Our convenient services ensure you'll create treasured pool memories year after year.</p>
              <p>If you're like many pool owners in Montreal, then you know that special feeling you get when the weather warms up. No, we're not talking about the sun's rays on your face - we're talking about that heavy feeling you get every time you think about the work to be done to open your pool. At Aquatic Jump, our superior ability means we'll have it open in no time.	</p>
              <p>In a similar vein, waiting too long to close your Montreal pool can see the work pile up like dominoes. Falling leaves, debris from autumn rains, and more can make it harder and harder to close your pool. With Aquatic Jump, we'll come right when you've made the decision to end the season and close your pool at a reasonable price.</p>
              <p>Stop putting off a pool opening or closing in Montreal just because you're dreading the work. Aquatic Jump is here at 800-890-9432 for a quick, easy solution.</p>
            </div>
				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="service2">
            <div class="service-desc">
              <p>Choosing to do your Montreal pool's maintenance yourself may save a few dollars in the short term, but it could end up costing a whole lot more in the long-run. Making mistakes with your water's chemistry or cleaning lines improperly can shorten the life of your pool.</p>
              <p>With Aquatic Jump, you no longer have to worry about the guesswork involved in Montreal pool maintenance. Every member of our team is well-trained in pool chemistry and has the experience needed to work on the inner mechanics of nearly every type of pool.</p>
              <p class="service-title">Training and experience in pool chemistry </p>
              <p>On every pool maintenance visit in Montreal, we offer a complete package of services, from simple water testing to scum line removal to visual inspection of your pumps and filters. The Aquatic Jump maintenance report will show not only the current state of your pool, but also all work we've completed as well as our recommendations to improve your pool's quality.</p>
              <p>Getting a professional pool maintenance in Montreal may be less expensive than you think. Contact Aquatic Jump at 800-890-9432 to learn more.</p>
            </div>
				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="service3">
            <div class="service-desc">
              <p>Check out the best pools in Montreal and you might wonder how they all have the same beautiful shine reflecting through the crystal clear water. The secret's out and those in the know choose our pool cleaning services for a superior look.</p>
              <p class="service-title">Complete pool cleaning </p>
              <p>If you've gone through a complete pool cleaning in Montreal, then it's probably not a job you want to do again. The scrubbing and polishing can be hard work and is the reason that so many locals call Aquatic Jump. We take care of your pool cleaning from start to finish and because we're pros, the end result will look better than if you would have done it yourself.”</p>
              <p>In addition to our deep cleaning for Montreal pools, we also offer regular weekly cleaning to keep it looking exceptional throughout the swimming season. During these routine visits, we'll remove any debris, flush the scum line, and can even add deck or patio cleaning as an extra service.</p>
              <p>For a Montreal pool cleaner that does it all, look no further than Aquatic Jump. Call us today at 800-890-9432!</p>
              </div>
				  </div>
				</div>

        <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service4"> <h3 class="panel-title"> <?php echo $service4; ?></h3></div>
				  <div class="panel-body" data-acc-content="service4">
            <div class="service-desc">
              <p>Your pool may look wonderful when it's first installed, but time and use can see the luster fade. Our pool repair and renovation services are the perfect answer for pools that need a little TLC to return to their former glory.</p>
              <p class="service-title">A great look for your pool</p>
              <p>Like any other part of your Montreal property, your pool is not immune to needing repairs. Fortunately, Aquatic Jump is right here to take care of them swiftly and professionally, with specialists who can help identify faulty heaters, replace coping, and much more to bring your pool back from the brink.</p>
              <p>For some of our clients, it's not a case of function but more about their Montreal pool's appearance. In these cases, Aquatic Jump is able to offer stylish renovations that can transform your pool area. Let our team find a great look and start enjoying days spent by the pool more than ever before.</p>
              <p>Montreal pool renovations and repair by Aquatic Jump comes with honest pricing and trustworthy experts. Dial 800-890-9432 to hear more about our options.</p>
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

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service1; ?> " data-alt="Aidan Meyer" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service1; ?>" alt="<?php echo $service1; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service1; ?> </span> </div>
          </div>
          </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
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
        <p class="cta-desc">Local to Montreal and servicing the surrounding area, we're the preferred team for pool openings, closings, repairs, cleaning, maintenance, and more.</p>
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
