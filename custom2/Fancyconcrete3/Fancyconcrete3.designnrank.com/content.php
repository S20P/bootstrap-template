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
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel: {phone}"><?php echo $phone; ?></a></li>
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto: {companyEmail}"> <?php echo $companyEmail;?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Bar  -->

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
          <h1 class="wow fadeInLeftBig"> <strong>The Right Choice</strong> For Flawless  Concrete  </h1>
          <div class="description wow fadeInLeftBig">
            <p> As the leading provider for many {city} projects, {companyName} is a specialist concrete firm that know every trick in the book for delivering concrete surfaces that impress. Our professional design/build services help make your concrete ideas a reality from start to finish.
          </p>
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
         <h3 class="about-subheader">Flawless Concrete Work</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">
              As {city}'s go-to choice for top notch concrete services, {companyName} is proud to deliver everything from retaining walls to industrial concrete flooring for our local community.</p>
        <p class="about-us">
              When you work with {companyName}, you're in good hands. Our professional team will treat your property the same way they would treat their own, producing only the best quality work at prices you can afford.</p>
        <p class="about-us">
              To find out how our talented team can improve your {city} space, send us an email or call us at {phone}.
            </p>
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
        <h3 class="service-subheader"> A <strong> Perfect Pour </strong> Every Time </h3>
        <p>Detail-oriented and meticulous, {companyName} offers a wide range of concrete services for residential and commercial clients. Look to the below for our primary services.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>In the past, concrete may have been thought of as the cheap and unattractive option for driveways, walkways, and patios in {city}, but that's no longer the case. With an installation from {companyName}, you can expect a high quality surface that can easily last up to 30 years, thus erasing the undeserved reputation of previous time.
               </p>
                <p> What led to that reputation was improper installation that was prone to cracking and deterioration almost immediately after the concrete was poured. When using a top level professional like {companyName}, you have access to many different textures and styles such as stamped concrete, paving stones, and acid stains that produce an attractive and durable driveway or walkway.
                </p>
                 <p> Current times have seen concrete become the material of choice for residential driveways and walkways in {city} and for good reason. As the finest provider of concrete options, {companyName} has put our talents to good use, delivering flawless installations all over the city and beyond.
                </p>
                 <p> When you want the best that concrete driveways and walkways can bring, call {companyName} at {phone} to schedule a free home visit.
                 </p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>
           Not all residential lots in {city} are perfectly level, which can create many erosion and water drainage issues. For many, the perfect solution is a retaining wall built by {companyName} - your local concrete expert. This retaining wall will not only correct the aforementioned problems, but can also be a stylish improvement to your outdoor space.


              </p>
               <p>
           More affordable than stone and with many of the same properties, properly poured concrete retaining walls will last for years to come at a fraction of the price. {companyName} has made it our business to be retaining wall specialists and we're able to create unique designs that address the needs of your individual location.


               </p>
                <p>
          In working with {companyName} for a retaining wall in {city}, you'll experience our hallmark customer service and the high quality of our concrete builds. We'll take your design ideas and incorporate them into a beautiful concrete retaining wall that not only takes care of infrastructure issues but also looks great. For taller walls, we can use interlocking blocks that add extra strength and integrity.


               </p>
                <p>
          Call {phone} or email {companyName} to find out more about options for your concrete retaining wall.

                </p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>Often thought to be better suited for outdoor spaces in {city}, concrete can actually be a great choice for interior flooring. One of the reasons why {companyName} continues to see more and more concrete flooring customers has to do with the variety of styles that can be achieved with this seemingly simple material.

              </p>
               <p>  Contrary to popular belief, a standard concrete floor is not your only option. Decorative stamped concrete is a common choice, as well as acid staining – a process that can simulate the elegant look of marble without any of the high expenses. At {companyName}, we're capable of delivering a wide range of concrete floors, all of which can be a tasteful solution for your {city} property.

               </p>
                <p> In addition to residential situations, concrete flooring is also a great choice for industrial settings like a warehouse or factory where strength and longevity are important concerns. Our concrete floors can be found in many {city} industrial locations and our flawless installation means that your location will have the best protection possible against cracks and other problems.

               </p>
                <p> Speak to a {companyName} associate about your concrete flooring needs by calling {phone}.
                </p>


            </div>
      </div>


    <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>Look around a commercial location in {city} and there's a very good chance you'll see concrete. Favored for it's durability and easy maintenance, concrete is the material of choice for many commercial properties. As such, {companyName} offers a full suite of commercial concrete services that ranges from parking garages to retail showrooms to building entrances and courtyards.
               </p>
              <p>As {city}'s top commercial concrete installation firm, we've assisted many businesses just like yours in finding the right cost-effective option for any number of surfaces. Our talented concrete specialists are capable of achieving a wide range of looks and styles that can be incorporated into your overall commercial design.
              </p>
               <p>Another advantage of a {companyName} concrete installation is the increased durability that it affords. Because concrete is an inherently strong material, it's perfectly suited to high traffic situations like shopping malls and retail walkways that get an impressive number of visitors every year. Local to {city}, we can also perform routine maintenance to keep your concrete looking great over the years.
               </p>
               <p> Trust {companyName} for your next commercial concrete project in {city}. Call {phone} to learn more.
               </p>


            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
             <div id="service5" class="collapse panel-body">

               <p>While a proper concrete installation will last a long time, the unfortunate truth is that many concrete jobs in {city} are done hastily and without the attention to detail needed to preserve the life of the concrete. At {companyName}, a large part of our business involves concrete repairs and maintenance to fix bad concrete installation work.
              </p>
                <p>When we visit your {city} location to inspect your concrete installation, we'll be honest about whether we think a repair is possible or if a replacement is the better option. In many cases, we've been able to save concrete patios, driveways, and walkways by repairing cracks and fixing the underlying water drainage problems.
                </p>
                <p> In addition to standard repairs, {companyName} is also able to help {city} residents improve the attractiveness of their concrete with decorative restorations that can add vibrant and attractive textures to drab concrete surfaces. Stains, polishing, and overlays can all be used by our talented concrete restoration team to mimic more expensive materials like marble or deliver a new look to your property.
               </p>
                <p> If you have a previous installation that's already showing signs of wear and tear, call {companyName} at {phone} for a professional concrete repair.
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services1.jpg" data-title="DRIVEWAYS AND WALKWAYS" data-alt="DRIVEWAYS AND WALKWAYS" data-desc="">
          <div> <img src="assets/img/gallery/services1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">DRIVEWAYS AND WALKWAYS</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services2.jpg" data-title="RETAINING WALLS" data-alt="RETAINING WALLS" data-desc="">
          <div> <img src="assets/img/gallery/services2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">RETAINING WALLS   </span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services3.jpg" data-title="CONCRETE FLOORING" data-alt="CONCRETE FLOORING" data-desc="">
          <div> <img src="assets/img/gallery/services3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">CONCRETE FLOORING</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services4.jpg" data-title="COMMERCIAL SERVICES" data-alt="COMMERCIAL SERVICES" data-desc="">
          <div> <img src="assets/img/gallery/services4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">COMMERCIAL SERVICES</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services5.jpg" data-title="CONCRETE REPAIRS " data-alt="CONCRETE REPAIRS" data-desc="">
          <div> <img src="assets/img/gallery/services5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">CONCRETE REPAIRS</span> </div>
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
        <p class="cta-desc">Conveniently located with service to the greater {city} area, {companyName} is available for concrete jobs of all shapes and sizes.</p>
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
            <h5>{workingHours}</h5>

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
        <!-- <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
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
        </div> -->
      </div>
    </div>
  </div>
</div>
