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
          <h1 class="wow fadeInLeftBig"> Around the Clock <strong> Monitoring and Security</strong></h1>
          <div class="description wow fadeInLeftBig">
            <p>We're here to ease your loved one's transition to retirement home living.Learn more to discover who we are and how we help.</p>
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
<div class="features-container section-container about-container" id="about">
   <div class="container">
    <div class="row">
      <div class="col-sm-6 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">A Retirement Home Oasis in Montreal</h3>
            <p class="about-us">At Care Facility Plus , we know that building a great community isn't about marketing or advertisements – it's about the personal connections we make with each and every one of our guests. From our on-staff nurses to supplementary caregivers, every member of our team knows what it means to be compassionate.</p>
            <p class="about-us">With this unrivaled experience and innovative approach towards Montreal retirement homes and assisted living, Care Facility Plus is proud to be the right place for aging friends or family to call home. Trust us for exceptional care and your loved one will be in good hands.</p>
            <p class="about-us">Learn more about Care Facility Plus . Dial 800-890-9432 to speak to a member of our Montreal retirement home team.</p>
         </div>
         <div class="col-sm-6 about_image">
             <img src="assets/img/backgrounds/3.jpg" alt="">
        </div>
    </div>
     </div>
</div>
<!--<div class="features-container section-container about-container" id="about">
  <div class="about_image"><img src="assets/img/backgrounds/3.jpg" alt=""></div>
  <div class="container subcont">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">A Retirement Home Oasis in Montreal</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">At Care Facility Plus , we know that building a great community isn't about marketing or advertisements – it's about the personal connections we make with each and every one of our guests. From our on-staff nurses to supplementary caregivers, every member of our team knows what it means to be compassionate.</p>
        <p class="about-us">With this unrivaled experience and innovative approach towards Montreal retirement homes and assisted living, Care Facility Plus is proud to be the right place for aging friends or family to call home. Trust us for exceptional care and your loved one will be in good hands.</p>
        <p class="about-us">Learn more about Care Facility Plus . Dial 800-890-9432 to speak to a member of our Montreal retirement home team.</p>
      </div>
    </div>
  </div>
</div>-->
<!-- Service -->
<div class="service-container section-container section-container-gray-bg" id="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 more-features section-description wow fadeIn">
        <h2>Our Services</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> <strong>Personal Care  </strong>by Professional Nurses</h3>
        <p>Make sure your long-term loved one gets the nursing care they need to thrive. </p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="services ">


      <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
              <div id="service1" class="collapse panel-body">

                <p>Our skilled nursing is the perfect solution for those with special medical needs or for recovery after a hospital stay. Compassionate, caring, and more than competent, our nurses are what makes our facility the best in the Montreal region.</p>
                <p>At Care Facility Plus , we believe that our nurses and caregivers are an essential link towards the happiness of our clients. By providing top level skilled nursing at our Montreal location, we're building an environment perfectly suited for your loved one to age gracefully.</p>
                <p>In terms of what our skilled nursing provides, it starts with the basics like personal medical care and extends to medication administration and monitoring, physical therapy, wound care, and more. The nurses on the team are true friends to our guests and an integral part of the Care Facility Plus community in Montreal.</p>
                <p>Meet our skilled nursing team for yourself with a visit to our Montreal facility. Call Care Facility Plus at 800-890-9432 to set up a convenient time.</p>
                <p>Get on the right path for excellent dental hygiene – call 800-890-9432 to schedule your next checkup with Care Facility Plus .</p>

             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
              <div id="service2" class="collapse panel-body">
                <p>For many of the guests at our Montreal retirement home, coping with memory loss is a constant struggle. To help combat the pain of Alzheimer's and other senility or dementia disorders, we develop custom memory care plans.</p>
                <p>By learning from the guest's family when possible and developing personal daily cues, the Care Facility Plus team in Montreal tries to foster not only the remembrance of positive memories but the creation of new ones as well. Many find our structured routine for each guest to be an excellent way to address the specific needs of those suffering from the various forms of memory loss.</p>
                <p>Every member of the Care Facility Plus team has been trained specifically in how best to deal with Alzheimer's and other related issues. Given the delicate nature of the problem, we require that all our staff not only understand the problem but also how to respond in a caring and compassionate way.</p>
                <p>To learn more about our memory care programs in Montreal, call Care Facility Plus at 800-890-9432 and speak to a member of our caregiving team.</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
              <div id="service3" class="collapse panel-body">
                <p>Your aging family and friends want to stay independent and we want to help. With our skilled team, ample amenities, and relaxed environment, your loved one will get the assisted living support they need and the true comforts of an independent life.</p>
                <p>While Care Facility Plus certainly encourages independent living in Montreal whenever possible, we also understand that many of our guests may need a helping hand. For that reason, our assisted living program is the perfect answer to provide a convenient structure while still giving the guest the ability to make decisions about their daily life.</p>
                <p>Gentle Care Facility Plus assisted living is not meant to be a rigid format for daily life but rather a comfortable guideline with plenty of room for activities and guest spontaneity. Your loved one will decide when they wake up, go to bed, eat, walk, and much more. Our role at our Montreal facility is simply to provide assistance when it's needed.</p>
                <p>Discover an assisted living retirement home in Montreal well-suited to comfort and gentle care. Call Care Facility Plus at 800-890-9432 today!</p>
                <p>One reason why so many people come to the Care Facility Plus office in Montreal for their fillings and crowns has to do with our advanced equipment. While some dentists may make do with outdated chairs and more,</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
              <div id="service4" class="collapse panel-body">
                <p>For many, the biggest fear in joining a retirement community is the thought of being alone. While that might be true for other Montreal nursing homes, we endeavor to provide a plethora of activities and opportunities for person-to-person engagement.</p>
                <p>Community means sharing experiences and that's what the Care Facility Plus community in Montreal is all about. Whether it's a nice chat over a catered dinner, group walks, or a games night, we believe that social interaction is a large part of what has made our retirement home a success.</p>
                <p>From fitness and exercise classes to open and inviting common areas, Care Facility Plus has created both the space and the atmosphere to make interaction possible. In addition, we're happy to publish regular listings of our activities and invite all our guests to attend. For many, activities like arts and crafts day or field trips to local Montreal parks remain treasured memories.</p>
                <p>If you'd like to attend one of our social events in Montreal, simply call Care Facility Plus at 800-890-9432 for available times and locations.</p>
             </div>
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
        <h2>Our Work</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="lightboxgallery-gallery clearfix">


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php /*echo $service1; ?>" data-alt="<?php echo $service1; ?>" data-desc="">
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
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; */?></span> </div>
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
        <p class="cta-desc">Our personal connections make a difference. Discover why so many choose our Montreal location to call home.</p>
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
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
      <div class="emergency">
          <div class="img-box"> <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs"> </div>
          <div class="wh-desc">
            <h3>Work Hours : <?php echo $workingHours; ?></h3>
          </div>
        </div>
      </div>
      <div class="col-md-3">
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

        <!-- <h3>We Accept</h3>

        <ul id="paymentsMethods">
          <li class="cash"> <img src="assets/img/paym_logo_1_cash.svg"> </li>
          <li class="cheque"> <img src="assets/img/paym_logo_11_cheque.svg"> </li>
          <li class="visa"> <img src="assets/img/paym_logo_2_visa.svg"> </li>
          <li class="mastercard"> <img src="assets/img/paym_logo_3_mastercard.svg"> </li>
          <li class="paypal"> <img src="assets/img/paym_logo_4_paypal.svg"> </li>
          <li class="discover"> <img src="assets/img/paym_logo_5_discover.svg"> </li>
          <li class="amexp"> <img src="assets/img/paym_logo_10_amexpress.svg"> </li>
        </ul> -->

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
