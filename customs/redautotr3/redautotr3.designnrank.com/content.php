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
          <h1 class="wow fadeInLeftBig"> <strong>Rugged Repairs </strong>For Tough Trucks</h1>
          <div class="description wow fadeInLeftBig">
            <p>When your truck starts to break down, you want a team that knows all about the wear and tear that long weeks out on the road can bring. At Automotive Truck Repair, we're a local repair and maintenance shop in Montreal composed of trucking specialists with unparalleled knowledge and ability.</p>
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
         <h3 class="about-subheader">Guaranteed maintenance and repair for your diesel truck.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">Featuring the best mechanics and the most customer-oriented service, Automotive Truck Repair is the leader for comprehensive diesel truck maintenance and repair in Montreal. Known far and wide, we work with both local companies as well as truck drivers stuck on the road in need of help.</p>
        <p class="about-us">From tire and wheel services to truck diagnostics and scheduled maintenance, everything at Automotive Truck Repair is done with an attention to quality. We want your truck to be at peak performance and last for years – the hard work we put into every maintenance and repair task will make it happen.</p>
        <p class="about-us">Automotive Truck Repair is ready to help trucking operations of all sizes in Montreal reach the next level. Call us at 800-890-9432 to find out how we can assist you.</p>
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
        <h3 class="service-subheader"> <strong> Everything  </strong>Your Truck Needs  </h3>
        <p>We're comprehensive, which means that if it's about diesel trucks, then it's our business and we can do it. Check out our trucking services to the below to learn more.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">
        
        
        <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                   <div class="service-desc">
              <p>Having your truck inspected on a regular basis may be a pain, but the truth is that it has to be done – not only to control emissions but also to ensure that you and other drivers are safe on Montreal streets. Automotive Truck Repair has full truck inspection services for all makes and models completed by experts and at affordable prices.</p>
              <p>Whether you've got one truck in Montreal or a fleet of 100, our inspection services can be tailored to the exact needs of your transport company. We can set up an organized plan for inspection visits to keep as many trucks on the road as possible and have you in and out of the Automotive Truck Repair shop quickly and without issue.</p>
              <p>As the most respected truck inspection and repair shop in Montreal, Automotive Truck Repair provides complete inspections that take a look at your mechanical, electrical, cooling, and other truck systems to make sure they're working correctly. Truck drivers in the know choose us because they trust we're delivering the highest quality inspection to keep them safe.</p>
              <p>A full-service truck inspection in Montreal is easy. Just call Automotive Truck Repair at 800-890-9432 and schedule your inspection visit.</p>
            </div>  
                     
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">
                 <div class="service-desc">
              <p>Having your truck inspected on a regular basis may be a pain, but the truth is that it has to be done – not only to control emissions but also to ensure that you and other drivers are safe on Montreal streets. Automotive Truck Repair has full truck inspection services for all makes and models completed by experts and at affordable prices.</p>
              <p>Whether you've got one truck in Montreal or a fleet of 100, our inspection services can be tailored to the exact needs of your transport company. We can set up an organized plan for inspection visits to keep as many trucks on the road as possible and have you in and out of the Automotive Truck Repair shop quickly and without issue.</p>
              <p>As the most respected truck inspection and repair shop in Montreal, Automotive Truck Repair provides complete inspections that take a look at your mechanical, electrical, cooling, and other truck systems to make sure they're working correctly. Truck drivers in the know choose us because they trust we're delivering the highest quality inspection to keep them safe.</p>
              <p>A full-service truck inspection in Montreal is easy. Just call Automotive Truck Repair at 800-890-9432 and schedule your inspection visit.</p>
            </div>    
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">
                      <div class="service-desc">
              <p>If you own a truck and trailer in Montreal, then you know how important it is to find a good mechanic for your scheduled maintenance. The team at Automotive Truck Repair are true pros and we know just how your valuable truck needs to be treated. Our attention to detail is unparalleled and our wealth of experience means your preventive maintenance will be done in no time.</p>
              <p>From Mack to Volvo and International to Peterbilt, scheduled maintenance needs can be quite different between each manufacturer. Automotive Truck Repair understands these differences and all of our truck maintenance uses a case-by-case approach directed by the manufacturer instead of a single checklist that's applied to every truck. With us, you'll have the maintenance you need.</p>
              <p>All of our truck scheduled maintenance packages in Montreal can be combined with a full check-up to make sure that all systems are functioning well at the same time. We'll check your brakes, run diagnostics, and test everything from cabin air conditioning to engine power to have your truck at optimal performance and as safe as possible.</p>
              <p>For reliable and professionally done truck scheduled maintenance in Montreal, there's only one option. Call Automotive Truck Repair today at 800-890-9432.</p>
              </div>
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
                <div id="service4" class="collapse panel-body">
                     <div class="service-desc">
              <p>Nothing is worse than damaging your truck's engine by forgetting to get an oil change. Unfortunately, plenty of truck owners in Montreal have had just that problem, but Automotive Truck Repair has a solution. Our easy and convenient truck oil changes can either be scheduled in advance or without notice – once you're in our system, we'll remind you when your next truck oil change might be due.</p>
              <p>At the Automotive Truck Repair shop, our space has been designed with truck lube, oil, and filter service in mind. There is easy access to our service bays and our efficient workflow means that we'll be able to quickly take care of what you need with a minimum amount of downtime for you or your truck.</p>
              <p>All truck lube services in Montreal are not of the same quality. While some may use inferior oil brands and generic filters, you can rest assured that Automotive Truck Repair is not like the rest. We never compromise on the quality of materials and parts and each service with us will use only the best.</p>
              <p>Fast truck lube, oil, and filter jobs by Automotive Truck Repair are just around the corner. Call us at 800-890-9432 or drop by our Montreal shop.</p>
             </div> 
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
                <div id="service5" class="collapse panel-body">
                    <div class="service-desc">
              <p>Even the best truck drivers in Montreal will routinely have tire and wheel problems. With so much time on the road and so many miles logged, having the right tire and wheel service provider matters. At Automotive Truck Repair, we are the professionals and all of our services are completed with care for your truck.</p>
              <p>From mounting and balancing to wheel torquing to tire bleeding, Automotive Truck Repair is able to complete any tire or wheel service you need. We keep a large inventory on hand to speed up the replacement process and will happily help you find the right tire and wheel models for your truck's exact need.</p>
              <p>Fleet operators in Montreal with many trucks may find our corporate packages beneficial. With Automotive Truck Repair as your local partner for truck tire and wheel services, we'll routinely inspect your trucks to make sure there are no tire or wheel issues that need to be corrected. In this manner, we'll be able to stop unsafe blowouts before they happen, thus increasing safety for your drivers.</p>
              <p>When quality is important for your truck's tires and wheels, call Automotive Truck Repair in Montreal at 800-890-9432.</p>
            </div>
                      
               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
                <div id="service6" class="collapse panel-body">
                   <div class="service-desc">
              <p>Your truck's diesel engine is not the same as a car's, so it makes no sense to take an ailing truck to a Montreal car repair shop. At Automotive Truck Repair, we're specialized on diesel engine repairs for Mack, Volvo, International, and other makes. With us, you'll have a team of mechanics that know what they're doing and capable of providing advanced engine repair services.</p>
              <p>Truck engine repairs is what we do and our service includes everything from dealing with complex fixes for cracked exhaust systems to simply changing out the spark plugs and distributor cap. With every truck repair we do, we'll keep you informed about what we're doing and why to give you complete control to decide whether you want the repair or not.</p>
              <p>While some other truck repair shops in Montreal may cut corners, Automotive Truck Repair believes that your safety and your truck's longevity depend on the quality of the repairs we make. As such, any truck engine repair job will feature high quality parts that always meet or exceed the manufacturer requirements.</p>
              <p>Instead of trusting your truck's engine to a less-than-qualified Montreal repairman, call Automotive Truck Repair at 800-890-9432 and get a true professional.</p>
              </div> 
                      
               </div>
         </div>
          <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?>                     </h3>
                        <div id="service7" class="collapse panel-body">
            <div class="service-desc">
              <p>Inside a diesel truck, the electrical system can range from quite simple to extremely complicated, which means you need a Montreal specialist that knows how to perform repairs and upgrades on even tricky setups. Automotive Truck Repair is exactly that type of provider and our electrical specialist have the skills necessary to make any installation or repair you need.</p>
              <p>From the start, we'll pull your truck into one of the service bays at our Montreal facility and assess the current electrical system using advanced tools for measuring how much electricity you need and how much is being provided. If the electrical system is not performing properly, we'll make the necessary changes to get back to a functional status.</p>
              <p>For truck electrical system upgrades, we're able to wire in new batteries, install electronics, and much more to make your truck cabin a more comfortable and functional space. For many local drivers in Montreal, Automotive Truck Repair has deliver custom electrical solutions that have greatly improved their lives while on the road.</p>
              <p>Call Automotive Truck Repair at 800-890-9432 for dependable and high quality electrical systems work in Montreal that elevates your truck's performance.</p>
             </div>

                       </div>
          </div>
        
        
        

				

	</div>
    </div>

    </div>
  </div>
</div>

<!-- Gallery Section -->
<!-- <div class="always-beautiful-container section-container gallery-container" id="gallery">
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


          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php /*echo $service1; ?>" data-alt="Aidan Meyer" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
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

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service5; ?> " data-alt="Aidan Meyer" data-desc="">
           <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service5; ?>" alt="<?php echo $service5; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service5;*/ ?> </span> </div>
           </div>
           </a>

        </div>
      </div>
    </div>
  </div>
</div> -->

<!-- CTA section -->
<div class="call-to-action-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Call us on</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <p class="cta-desc">Our truck repair and maintenance facility is located in Montreal and we proudly provide quality service to all types of diesel trucks.</p>
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
