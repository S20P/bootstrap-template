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
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto: zpirogov@gmail.com"> <?php echo $companyEmail;?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_AutomotiveBodyShop_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>A Trusted Name  </strong>For Body Repair And Paint.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Returning to normal after an accident or collision may be difficult, but Automotive Body Shop makes sure that at least your vehicle will get back to its former pristine condition with a minimum of fuss. Our talented body repair and flawless auto paint could even make it better than before.</p>
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

                  <div class="input-group date"  id="datetimepicker1">
                    <input type='text' class="contact-email form-control date-time" placeholder="Select Date and Time *"/>
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
         <h3 class="about-subheader">The right choice for impressive autobody and more.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">With a home base in Montreal, Automotive Body Shop provides auto body repair, auto painting, and towing services to the surrounding region. As a local business, we understand the misfortune of an accident but offer quality auto services at affordable prices to bring your vehicle back to excellent status.</p>
        <p class="about-us">The Automotive Body Shop shop in Montreal is fully equipped, meaning we have a diverse array of specialized equipment that allows us to provide superior repairs and painting. For the best quality at the best price, we're the ones to call.</p>
        <p class="about-us">Call Automotive Body Shop at 800-890-9432 for all your towing, auto body repair, and auto painting needs in Montreal.</p>
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
        <h3 class="service-subheader"> <strong>All You Need </strong>Under One Roof</h3>
        <p>At our Montreal shop, we have everything to transform your car from wrecked to amazing. Click through our service areas to the below to learn more about all we do.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">

          
          <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                    
                      <p>With as much as people drive cars, it's no small wonder than fender benders, collisions, and other mishaps are common in Montreal. When the unfortunate happens, it's good to have a partner like Automotive Body Shop that can respond with auto body repair that quickly makes accident-related imperfections a thing of the past.</p>
            <p>At the Automotive Body Shop auto body repair shop in Montreal, we've built a unique blend of not only the best auto body specialists in town but also the best equipment. In this manner, we're able to offer a wide variety of repair services suited to all types of dents and other issues. With our unparallelled abilities, your car will get the facelift it needs to look great again.</p>
             <p>Because Automotive Body Shop has years of experience in assisting people with auto body repair needs, we've developed an intimate knowledge of the insurance process and are happy to assist with paperwork filing and other parts of your claim. Whether an insurance company is covering the repair or you're paying out of pocket, we'll make sure you get the best possible, cost-effective solution.</p>
             <p>Call Automotive Body Shop at 800-890-9432 to discuss your particular auto body repair situation and we'll set a good time for you to visit our Montreal location.</p>
				   
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">
                       <p>Even though it's not related to the mechanical or electrical systems of your vehicle, having a broken window or windshield can just as effectively render your car useless in Montreal. To get back up and running, Automotive Body Shop has full glass repair and replacement options to fit your exact needs.</p>
            <p>The unfortunate truth with glass repair and replacement in Montreal is that the majority of cases will need the latter rather than the former. Once automotive glass has cracked, splintered, or otherwise been weakened, it will need replacement to keep you safe and protected from insects, bad weather, and stones or other debris that can come from the road.</p>
             <p>At Automotive Body Shop, we'll do everything in our power to save your existing windows or windshields if at all possible. We understand that replacing the glass in your vehicle is often an unplanned expense and one that can be costly depending on your car's make and model. We'll help you find the most affordable option, whether a repair is possible or in the case you need a windshield replacement in Montreal.</p>
             <p>Before trying to drive a vehicle in Montreal with a broken window or windshield, call Automotive Body Shop at 800-890-9432 to find the best repair or replacement prices.</p>
				
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">
                   <p>There are few things worse that being stranded on the road in Montreal after an accident. With a car that won't run and no way to move it, you need a local firm that will deliver a competent service without taking advantage of the difficult situation you're in. At Automotive Body Shop, we believe in affordable towing done right and will never overcharge.</p>
            <p>Because you can need a tow at any time of day or night, Automotive Body Shop is able to provide emergency response for accident situations or roadside assistance services like jump starts, and fuel delivery. Our flat bed towing or chain towing vehicles can easily fit the vast majority of vehicle makes and models and we're happy to find a solution for difficult towing situations.</p>
             <p>Part of being the best towing company in Montreal has to do with our responsiveness. We know that when we receive a call, it's often because someone is in need. By acting quick and with compassion, a member of our team will be able to reach your location quickly and provide an affordable towing solution.</p>
             <p>Keep our number handy, 800-890-9432, and give Automotive Body Shop a call the next time you need professional towing services.</p>
				    
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
                <div id="service4" class="collapse panel-body">
                  	 <p>There are few things worse that being stranded on the road in Montreal after an accident. With a car that won't run and no way to move it, you need a local firm that will deliver a competent service without taking advantage of the difficult situation you're in. At Automotive Body Shop, we believe in affordable towing done right and will never overcharge.</p>
            <p>Because you can need a tow at any time of day or night, Automotive Body Shop is able to provide emergency response for accident situations or roadside assistance services like jump starts, and fuel delivery. Our flat bed towing or chain towing vehicles can easily fit the vast majority of vehicle makes and models and we're happy to find a solution for difficult towing situations.</p>
             <p>Part of being the best towing company in Montreal has to do with our responsiveness. We know that when we receive a call, it's often because someone is in need. By acting quick and with compassion, a member of our team will be able to reach your location quickly and provide an affordable towing solution.</p>
             <p>Keep our number handy, 800-890-9432, and give Automotive Body Shop a call the next time you need professional towing services.</p>
			   
                      
               </div>
         </div>
        
         
        

      <!--<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?/*php echo $service5; */?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo5">
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="BODY REPAIR" data-alt="BODY REPAIR" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">BODY REPAIR</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="BODY REPAIR" data-alt="BODY REPAIR" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">BODY REPAIR</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="BODY REPAIR " data-alt="BODY REPAIR " data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="PAINT AND REFINISHING " alt="PAINT AND REFINISHING ">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">BODY REPAIR </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="PAINT AND REFINISHING " data-alt="PAINT AND REFINISHING " data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">PAINT AND REFINISHING </span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="PAINT AND REFINISHING  " data-alt="PAINT AND REFINISHING " data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">PAINT AND REFINISHING  </span> </div>
          </div>
          </a>



          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service6.jpg" data-title="PAINT AND REFINISHING" data-alt="PAINT AND REFINISHING" data-desc="">
          <div> <img src="assets/img/gallery/service6_thumb.jpg" title="PAINT AND REFINISHING" alt="PAINT AND REFINISHING">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">PAINT AND REFINISHING</span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service7.jpg" data-title="GLASS REPAIR AND REPLACEMENT" data-alt="GLASS REPAIR AND REPLACEMENT" data-desc="">
          <div> <img src="assets/img/gallery/service7_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">GLASS REPAIR AND REPLACEMENT</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service8.jpg" data-title="GLASS REPAIR AND REPLACEMENT" data-alt="GLASS REPAIR AND REPLACEMENT" data-desc="">
          <div> <img src="assets/img/gallery/service8_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">GLASS REPAIR AND REPLACEMENT</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service9.jpg" data-title="CAR TOWING" data-alt="CAR TOWING" data-desc="">
          <div> <img src="assets/img/gallery/service9_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">CAR TOWING</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service10.jpg" data-title="CAR TOWING " data-alt="CAR TOWING" data-desc="">
          <div> <img src="assets/img/gallery/service10_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">CAR TOWING </span> </div>
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
        <p class="cta-desc">Automotive Body Shop is based in Montreal and has been providing towing, body repair, and painting services to the local community for years.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 section-bottom-button wow fadeInUp"></div>
    </div>
  </div>
</div>




<!--
<div class="features-container  about-container icon-section" id="icons">
  <div class="container">
     <div class="row">
      <div class="col-sm-12 always-beautiful section-description wow fadeIn">
        <h2>Cars we work with</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 icon-carousel wow fadeIn">


<div class="customer-logos">
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-1"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-2"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-3"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-4"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-5"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-6"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-7"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-8"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-9"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-10"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-14"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-15"></div></div>


</div>



    </div>
    </div>
  </div>
</div>-->




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
