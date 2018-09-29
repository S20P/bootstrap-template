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
          <h1 class="wow fadeInLeftBig"> <strong>Modern, Comfortable, </strong>Built With You In Mind</h1>
          <div class="description wow fadeInLeftBig">
            <p>At {company}, we believe that your appearance should only be trusted by someone with the experience to understand what you want and the training to make it happen. As such, we only provide the best services that measure up to your quality standards.</p>
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
         <h3 class="about-subheader">Popular in {city} and for Good Reason.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">When we started {companyName}, we had a simple vision – provide top shelf beauty services in {city} at prices that our customers can afford. From that first day, we've made quality our top priority and we've never looked back.</p>
        <p class="about-us">From pedicures to bridal hairstyles and all points in between, our beauty professionals in {city} are capable of nearly any service. Coming from different backgrounds, they all have a few things in common – a high level of training and experience as well as a genuine desire to see you look your best.</p>
        <p class="about-us">Join the {companyName} family and learn why so many people just like you have chosen us. Call {phone} to discover our {city} beauty salon.</p>
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
        <h3 class="service-subheader"> <strong>A Wide Range </strong>of Services </h3>
        <p>A full suite of salon talents to treat everything from head to toe. Click below to learn more about each service.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
                 <p>A special day requires a special look and few days in your life will be as special as when you get married. Trust our hair and makeup experts to treat your big day with the attention it deserves and have you looking utterly flawless.</p>
                 <p>While many brides stress out over their upcoming nuptials in {city}, {companyName} aims to be the calm center of the storm – quietly doing what we do best to alleviate any worries about your appearance. Making you look good is our job and we're proud to be at your service.
                 </p>
                <p>At your initial bridal package consultation, {companyName} will ask the right questions to pinpoint exactly how you want to look and how to make it happen. This meeting will help us identify the correct hairstyle as well as any special makeup desires to ensure that we get it right on your wedding day. </p>
               <p>Don't trust a no-name stylist in {city} when there's so much on the line. Choose {companyName} by dialing {phone} and know that you'll be the star of your big show.   </p>

            </div>
      </div>

      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>Boasting a full selection of facial services that include exfoliation and deep cleansing, we're your local answer for impressive results at competitive prices. With us, your face will be clean, hydrated, and ready to meet whatever life throws your way.</p>
               <p>At {companyName}, we're experts in facials and have a wide variety of advanced techniques
                and high quality products at our disposal. Whether you suffer from congested pores, premature aging lines, or are just looking to keep up your youthful appearance, our {city} facials are the perfect solution.</p>
                <p>You might think facials are all about your skin's appearance, but the truth is that there's another hidden
                layer. Many of our clients in {city} find that the facial process is extremely relaxing and
                soothing. From the moment you enter the comfortable {companyName} facility, you'll
                discover a calming oasis designed to renew and refresh.</p>
                <p>{companyName} facial services are affordable and easy to schedule. Call us at {phone}
                  to set a date at our {city} location.</p>
            </div>
      </div>

      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>
                  Founded on impressive technical skills but with an ability to innovate, we're your top choice when it
                  comes to local hair care. Cutting, styling, and dyeing are only a few of our abilities and we're capable
                  of much more.
                     </p>
                     <p>
                  Nothing says stylish like a fresh haircut. On the other hand, nothing says dated as much as hair that
                  looks like it came from a decade ago. At {companyName} in {city}, we
                  specialize in both timeless and contemporary hairstyle creations that take into account everything from
                  your hair color to your face shape and skin tone.
                    </p>
                    <p>
                  Unlike other salons that simply do what they want while you're under the scissors, the hallmark
                  {companyName} process ensures that your final look is exactly what's desired. Before starting, we'll
                  talk about what you want from the new style, provide our expert recommendations, and then execute
                  the plan we've created together.
                    </p>
                    <p>
                  Step up to a hair salon that's a cut above the {city} competition. Schedule your next
                  visit with {companyName} by calling {phone}.
                    </p>
            </div>
      </div>

      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>
                Your skin goes through a ton of wear and tear – that's why professional treatment is the best way to
                keep it looking great, no matter the difficult circumstances you may put it through. From red or itchy
                skin to acne to wrinkles, we have an answer.
                   </p>
                   <p>
                Unlike other {city} beauty salons, our skin care technicians have gone through
                extensive training to understand how skin types can be very different and how to treat each one. Based
                on their incredible ability, skin care services are some of the most popular options at {companyName}.
                  </p>
                  <p>
                At {companyName} we understand that the wrong products and not knowing how to use the
                right ones can be a difficult problem to solve. However, our skin care services in {city}     are perfectly designed for both common, everyday skin issues and more difficult conditions. We'll not
                only help you select the right products, but we'll also show you exactly how they should be used.
                  </p>
                  <p>
                Oily, dry, or damaged skin can be irritating to say the least. Let {companyName} be your
                relief in {city}. Call us today at {phone}!
                  </p>
            </div>
      </div>

      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
             <div id="service5" class="collapse panel-body">
               <p>
                You may apply makeup nearly every day, but our professional and objective makeup artists could drastically change your daily routine. By showing you just how good your face could look, we'll help you user in a new era of beauty.
                </p>
               <p>
                Many women don't understand the thin line between makeup-enhanced beauty and decoration, but our team of specialists will quickly show you the difference. With {companyName} in {city},
                our goal is to apply the best quality makeup products in a way that creates an immaculate and stunning appearance.
                </p>
                <p>From eyelashes to rouge to lipstick and more, {companyName} has access to a wide world of
                  makeup products. In addition, we know how to evaluate what will look good and can help you find the exact color shade or tone that's been missing from your look. A single visit with us and you'll never look at makeup the same way.</p>
                <p>Our makeup team in {city} is here to elevate your style. Pencil in a date with {companyName} by calling {phone}. </p>
            </div>
      </div>

      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
             <div id="service6" class="collapse panel-body">
               <p>
                If you're like most people in {city}, then you probably use your hands and feet everyday. All that constant friction can take its toll, but our manicure and pedicure specialists will
                deliver a rejuvenating service aimed to please.
               </p>
               <p>Whether you're dealing with cracks, smudges, or something else, {companyName} has the right remedy to make you feel good as new. We'll start with a thorough soak and exfoliation process
               before providing professional nail clipping and styling exactly as desired. Your fingers and toes may be rough, but our mani-pedi team uses a gentle touch to erase the signs of constant use.
              </p>
              <p>In addition to standard manicures and pedicures in {city}, {companyName}     also offers specialized nail care services designed to meet your needs. Utilizing our top shelf products
              and state-of-the-art equipment, we can custom build the exact manicure or pedicure package you want.
              </p>
              <p>Treat yourself to an affordable {companyName} manicure or pedicure today. Call {phone}      to schedule an appointment or just stop by our {city} salon.
              </p>
            </div>
      </div>

       <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?> </h3>
             <div id="service7" class="collapse panel-body">
               <p>With one of the area's leading spa facilities and an ever-growing list of services, we're proud to be your local choice when you want a soothing massage, innovative body treatment, or other spa services completed by professionals.</p>
               <p>You might think of a visit to the {companyName} spa as a rare occasion, but the reality is that our spa services are more than just a one-time special treat – they're how the best looking in {city} stay that way. By providing superior massages, energizing therapies, and relaxing treatments, we help bring your inner beauty to the surface.</p>
                <p>From head to toe, our spa services in {city} have been created to address what ails you. Whether it's a deep tissue massage to relieve sore muscles or steam therapy to cleanse your skin's pores, our promise is to make you feel better when you leave our spa than when you came. At {companyName}, we believe in what we do and it shows.</p>
                <p>A professional spa experience in {city} makes the perfect gift. Call {companyName} at {phone} to learn more about our gift packages.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="Bridal package" data-alt="Bridal package" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Bridal package</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="Facials" data-alt="Facials" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Facials</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="Hair Care" data-alt="Hair Care" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Hair Care</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Skin Care" data-alt="Skin Care" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Skin Care</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Make Up " data-alt="Make Up" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Make Up </span> </div>
          </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service6.jpg" data-title="Manicure and Pedicure" data-alt="Manicure and Pedicure" data-desc="">
          <div> <img src="assets/img/gallery/service6_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Manicure and Pedicure</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service7.jpg" data-title="Spa" data-alt="Spa" data-desc="">
          <div> <img src="assets/img/gallery/service7_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Spa</span> </div>
          </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service8.jpg" data-title="Manicure and Pedicure" data-alt="Manicure and Pedicure" data-desc="">
          <div> <img src="assets/img/gallery/service8_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Manicure and Pedicure</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service9.jpg" data-title="Spa" data-alt="Spa" data-desc="">
          <div> <img src="assets/img/gallery/service9_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Spa</span> </div>
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
        <p class="cta-desc">{companyName} has been providing elegant solutions designed to meet both your budget as well as your exact needs.</p>
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
              <div class="img-box">
                  <img src="assets/img/wh.svg" alt="We offer 24Hrs Emergency Services" class="hrs">
              </div>
              <div class="wh-title" >
                <h3> Work Hours </h3>
              </div>
              <div class="wh-desc">
                <h5>{workingHours}</h5>
                <!--   <h5> SAT-SUN By Appointment </h5> -->
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
         <!--  <div class="form-inner-box">
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
