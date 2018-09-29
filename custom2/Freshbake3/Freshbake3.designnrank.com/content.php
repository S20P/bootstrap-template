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
              <li> <span class="top-label"> <i class="fa fa-clock-o " aria-hidden="true"></i>Hours : </span><?php echo $workingHours;?></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-sm-12 right-top">
          <div class="contact-details">
            <ul>
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel: {phone}"><?php echo $phone; ?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="./"> <img src="assets/img/logo_GenericBake_Generic.svg" class="logo" alt="logo"> </a> <a href="./" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        <!-- <h3 class="company-slogan"><?php echo $companySlogan; ?></h3> -->
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
          <h1 class="wow fadeInLeftBig"> <strong> Consistency And Quality </strong> Are A Baker's Best Friend</h1>

          <div class="description wow fadeInLeftBig">
            <p>Nothing is more important than accurate measurement and timing. As much a science as it is an art, {companyName} aims to elevate our baked goods through a methodical process that makes sure every recipe is perfectly executed by our kitchen crew every time.</p>
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
         <h3 class="about-subheader">  World Class Baking Right Here in {city}.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">There's a huge difference between bread, pastries, and cake you buy at the store and the professional ability found in every {companyName} item. Whether you want an elaborate and gorgeous wedding cake to match the importance of your big day or simply want a batch of the tastiest cookies around, we're your {city} bakery.</p>
        <p class="about-us">At {companyName}, our business was literally made from scratch and our recipe is a clear winner. We've combined an impressive baking team with our excellent facility to create the only bakery in {city} you'll ever want to visit.</p>
        <p class="about-us">Life's too short to eat stale baked goods. Switch to {companyName} in {city} and start enjoying what you eat.</p>
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

        <h3 class="service-subheader"> <strong>Consistency And Quality </strong>Are A Baker's Best Friend </h3>
        <p>Our {city} customers know what tastes good. See why they keep choosing our bakery over the competition.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>
      From birthday parties to weddings to corporate events, cakes in {city} are synonymous
      with celebration. You could buy off the shelf or you could choose us and give your guests a sweet treat
      they'll remember.
         </p>
         <P>
      At {companyName}, our cake baking team are more than just technicians – they're wellversed
      in cake artistry and able to adapt your ideas into a final dessert that's what you want and more.
      This flexibility is why you come to a professional {city} bakery instead of simply
      shopping at a local grocery store.
        </P>
         <p>
      To match the ever-changing sweet tooth of our {city} community, {companyName} has developed a full range of cake types, fillings, icing options, and decorative
      elements. From Red Velvet to Strawberry Shortcake to Dark German Chocolate, we'll construct the
      cake of your dreams.
        </p>
         <p>
      If other {city} cake bakeries have fallen flat for you, give {companyName} a
      try. Call us at {phone} to inquire about our cake pricing.
        </p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>
      Baked goods have become a way of life – from early morning breakfast pastries to after-dinner
      desserts. Being ubiquitous at almost every meal, it's important to choose the best bread, cookie, and pie
      creator in town.
         </p>
         <p>
      Gone are the times when simply following recipes would be enough for a {city} bakery
      to survive. At {companyName}, we believe that today's baked goods providers can start with
      the classics but must also develop new options to satisfy the local palette. As such, our innovative
      recipes run the gamut from heavy, savory breads to light-as-air sweet desserts and all points in between.
        </p>
         <p>
      With {companyName}, you have a wide variety of baked goods at your disposal, from an
      assortment of breakfast pastries to that perfect loaf of crusty French bread to accompany your dinner.
      Our bakers in {city} can do it all and are ready to rise to any baked goods challenge.

        </p>
         <p>
      One taste of our creations and there's no going back to inferior {city} bakeries. Put your
      {companyName} baked goods order in by calling {phone}.
        </p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>
      From Monday morning roundtables at the office to a gala wedding reception, having the right food can
      make all the difference. Our catering packages will make sure that your breads and desserts are always
      on point and never half-baked.
          </p>
          <p>
      There's a clear sign that our bakery catering in {city} works – just look at the empty
      plates. If there's leftover scones, croissants, or muffins after breakfast, you can be sure that {companyName}
      was not the provider. Our creations are meant to be eaten, not decoration, and your
      guests will appreciate the difference.
        </p>
          <p>
      {companyName} offers a full complement of bakery catering options and can customize a
      platter to fit your exact needs. From breakfasts with fruit and pastry to afternoon lunches with handcrafted
      sandwiches, our baking team will use only the freshest ingredients to ensure that you'll love
      every bite. Featuring an extensive schedule for delivery, we're your choice for local {city} catering.
        </p>
          <p>
      Call {phone} to learn more about affordable catering from {companyName} in {city}.
        </p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>
      A bakery's menu says a lot about their business, from one-page leaflets that never go beyond the basics
      to overpriced novels that are more fake than bake. Our menu is something else entirely – a perfect
      blend of time-perfected tradition and innovative baking vision.
          </p>
          <p>
      {companyName} is a true bakery – capable of delivering flawless interpretations of the
      classics like butter croissants and chocolate chip cookies, while at the same time equally at home
      creating fantastic cakes and exquisite baked goods.
        </p>
          <p><a href="./menu.pdf" target="_blank">Download the {companyName} menu today and eat better in {city} - menu </a></p>
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


          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="Our Cakes" data-alt="RESIDENTIAL CLEANING" data-desc="">
            <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Our Cakes" alt="Our Cakes">
              <div class="lightboxgallery-gallery-item-content">
                 <span class="lightboxgallery-gallery-item-title"> Our Cakes </span>
              </div>
            </div>
          </a>


          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title=" Baked Goods" data-alt="Baked Goods" data-desc="">
            <div>
              <img src="assets/img/gallery/service2_thumb.jpg" title="Baked Goods" alt="Baked Goods">
                <div class="lightboxgallery-gallery-item-content">
                  <span class="lightboxgallery-gallery-item-title"> Baked Goods </span>
                </div>
              </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="Catering Services" data-alt="POST-CONSTRUCTION CLEANUP" data-desc="">
              <div> <img src="assets/img/gallery/service3_thumb.jpg" title="Catering Services" alt="Catering Services">
                <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> Catering Services </span> </div>
              </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Our Menu" data-alt="Our Menu" data-desc="">
              <div> <img src="assets/img/gallery/service4_thumb.jpg" title="Our Menu" alt="Our Menu">
                <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> Our Menu </span> </div>
              </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Baked Goods" data-alt="Baked Goods" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Baked Goods" alt="Baked Goods">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Baked Goods</span> </div>
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
        <p class="cta-desc">We may be known for our baking skills, but our signature customer service is the icing on the cake.</p>
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
   <h3> Hours </h3>
          </div>
          <div class="wh-desc">
            <h5>{workingHours}</h5>
            <!-- <h5> SAT-SUN By Appointment </h5> -->
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
          <!-- <div class="form-inner-box">
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
          </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
