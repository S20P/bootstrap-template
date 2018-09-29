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
          <h1 class="wow fadeInLeftBig"> <strong>Keeping Your Car </strong>Looking its Best.</h1>
          <div class="description wow fadeInLeftBig">
            <p>A superior auto detailing job truly makes a vehicle's appearance pop, from the deep black of the tires to shiny chrome fenders to immaculate and colorful paint jobs. Add in Best Automotive's engine detailing, paint correction, and headlight restoration and you'll a car that demands notice.</p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a> </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 form-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Request An Appointment</h3>
                <p>Fill out the form below and we will get in touch within 24 hours.</p>
              </div>
            </div>
            <div class="form-bottom contact-form">
              <form role="form" action="assets/contact.php" method="post" id="slider-form">
                <div class="form-group">
                  <div class='input-group date' id='datetimepicker6'>
                      <input type='text' placeholder="Select Date and Time" class="form-control" />
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>
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
         <h3 class="about-subheader">The right choice for impressive auto detailing and more.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">With Best Automotive in your own backyard, you don't need to travel for miles and miles to get a professional auto detailing job at an affordable price. We're a local business from the ground up and pride ourselves on the care and attention we bring to each and every vehicle we detail.</p>
        <p class="about-us">While other auto detailers in Montreal may cut corners, we know that doing it right is the only way to go. Our team uses only the best products that ensure an amazing finish without causing damage to your car's materials. Choose us when only the best auto detailing will do.</p>
        <p class="about-us">Visit Best Automotive once and you'll see the talent behind our reputation. Call 800-890-9432 to book a slot at our Montreal shop.</p>
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
        <h3 class="service-subheader"><strong>A New level  </strong>of Clean and Functional</h3>
        <p>The services at Best Automotive are designed to address every possible aspect of your vehicle's cleanliness. Check out what we do to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">
      <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
           <div id="service1" class="collapse panel-body">
               <div class="service-desc">
             <p>More than just a car wash, auto detailing in Montreal means transforming your vehicle into a pristine condition that simply shines. At Best Automotive, our detailing service goes head and shoulders beyond the competition to deliver the kind of look that will turn heads and have you enjoying your car like never before.</p>
             <p>With equal focus on interiors and exteriors, specialized members of the Best Automotive team will work together to create a seamless vision of clean. For the former, we use hot water extraction and steam cleaning for the upholstery and fabrics, and only the best cleaners to take care of your console, the dash, and other areas.</p>
             <p>After the interior is a work of art, we'll start on the exterior, using nonabrasive products that will deliver a healthy glow without scratching or causing damage to your paint job. In addition, we'll shine wheels, tires, grills, and more to make sure your car stands out from the crowd in Montreal. Trust Best Automotive for auto detailing that's simply beyond compare.</p>
             <p>Amazing auto detailing in Montreal is affordable with Best Automotive. Call 800-890-9432 to hear about our special prices.</p>
          </div>
        </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
           <div id="service2" class="collapse panel-body">
                <div class="service-desc">
             <p>While you and your Montreal mechanic are probably the only people that will look at your engine, having a full engine detail will make it a joy to pop your hood. For those of you that want to see your classic or modern engine shine, Best Automotive has the services to make it happen and take your vehicle to the next level.</p>
             <p>Essentially, engine detailing is about cleaning, degreasing, and protecting and can be used not only for showing a vehicle, but also preparing an engine for a paint job. After covering areas in your engine compartment that can be sensitive to water, a Best Automotive team member will thoroughly and methodically uses special equipment to remove all of the grime and dirt.</p>
             <p>To finish off the engine detail and give your car that wow factor, we'll apply a special dressing that enhances the clean appearance and reduces future collection of grease and debris. Best Automotive in Montreal is the local leader for engine details and we're happy to add you to our customer list.</p>
             <p>For an engine detail in Montreal that exceeds your expectations, dial 800-890-9432 to speak to a Best Automotive representative.</p>
          </div>
          </div>
    </div>
    <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
            <div id="service3" class="collapse panel-body">
                 <div class="service-desc">
              <p>No matter how careful you are, scratches and dings on your vehicle can slowly erode that beautiful, new car look. However, the paint corrections specialists are ready and waiting at Best Automotive to deal with any issues you might have quickly and effectively. Instead of trusting the gimmick remedies that simply don't work, call your local Montreal pros and get it done right.</p>
              <p>Paint correction in Montreal is not a simple process and takes a high degree of skill to deliver a seamless look. Using advanced equipment, knowledge of all the latest correction techniques, and many years of experience, we'll shave down the clear coat layers to resolve the paint problem. From there, we'll add paint sealants that ensure your paint correction won't quickly fade.</p>
              <p>Even if your car has seen better years in Montreal, you may be surprised with the massive improvement that a Best Automotive paint correction can bring. For many that hire us for the service, we're able to deliver an exceptional look that can seemingly wipe away years of scratches in a single session.</p>
              <p>A scratch on your car doesn't need to be a major frustration. Call Best Automotive in Montreal at 800-890-9432 and we'll take care of it.</p>
     </div>
     </div>
     </div>
     <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
            <div id="service4" class="collapse panel-body">
                 <div class="service-desc">
              <p>Any new car fresh off a Montreal dealership lot is going to look amazing. While most people understand that dirt and scratches happen on the paint, wheels, and interiors, few realize that it also affects the headlights as well. At Best Automotive, we offer affordable headlight restoration that brings clear vision back into view.</p>
              <p>When a headlight is new, it has a layer of UV protection. However, this protection is broken down by Montreal weather over time, leaving your car's lights cloudy and much less bright. Because the cost of full headlight replacement can be very prohibitive, restoration by Best Automotive is an option that fixes the issue without breaking the bank.</p>
              <p>Best Automotive can perform all types of headlight restorations, from modern cars and trucks to commercial vehicles to classic cars where replacement is no longer an option. With a convenient facility in Montreal, we can be easily reached from many locations.</p>
              <p>Before you order an expensive headlight replacement, call Best Automotive at 800-890-9432 and see if our headlight restoration in Montreal might be a better choice.</p>
            </div>
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
        <h2>Our Work</h2>
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


                     <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service6.jpg" data-title="<?php echo $service1; ?>" data-alt="Aidan Meyer" data-desc="">
                     <div> <img src="assets/img/gallery/service6_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
                       <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
                     </div>
                     </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service2; ?> " data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service2; ?> </span> </div>
           </div>
           </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3; ?>" data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
           </div>
           </a>


            <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service7.jpg" data-title="<?php echo $service3; ?>" data-alt="Aidan Meyer" data-desc="">
             <div> <img src="assets/img/gallery/service7_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
             <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
            </div>
            </a>

            <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service8.jpg" data-title="<?php echo $service3; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service8_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
            </div>
            </a>


            <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service9.jpg" data-title="<?php echo $service3; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service9_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; ?></span> </div>
            </div>
            </a>
            <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service4; ?>" data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service4; ?>" alt="<?php echo $service4; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service4; ?></span> </div>
            </div>
            </a>

            <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service10.jpg" data-title="<?php echo $service4; ?> " data-alt="Aidan Meyer" data-desc="">
            <div> <img src="assets/img/gallery/service10_thumb.jpg" title=" <?php echo $service4; ?>" alt="<?php echo $service4; ?>">
             <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service4; ?> </span> </div>
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
        <p class="cta-desc">Best Automotive has been providing top quality auto detailing services for years in the greater Montreal area.</p>
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
      <div class="col-md-6 col-sm-6 contact-col cmap" id="fullmap">
        <div id="map" style="width:100%; height:500px;"></div>
<!--        <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
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
        </div>-->
      </div>
    </div>
  </div>
</div>
