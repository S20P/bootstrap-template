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
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto: admin@designnrank.com"> <?php echo $companyEmail;?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_Construction_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>Every Detail. </strong>Every Project. Every Time.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Bring us your ideas and your vision, and together, we’ll create a space reflecting your family and your lifestyle. Our team of award-winning designers, experienced craftsmen and a staff that orchestrates every detail works together to ensure your design and renovation experience is positive and worry-free. </p>
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
         <h3 class="about-subheader">Proudly helping people build their dream house and offices.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">Servicing the greater Montreal community for years, Dream Building & Remodeling is a comprehensive local provider of exquisite residential and commercial remodels, flawless new constructions, and seamless additions. </p>
        <p class="about-us">Focusing on quality and service, we want our customers to be happy with the work we do. No matter the size or complexity of the job, we always aim for complete satisfaction and delivering the kind of final results that drastically improve your Montreal property.</p>
        <p class="about-us">Your new construction or remodel is right around the corner – call Dream Building & Remodeling at 800-890-9432.</p>
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
        <h3 class="service-subheader"> <strong>A Wide Range</strong> of Services</h3>
        <p>From kitchen remodels to new commercial construction, Dream Building & Remodeling can handle all your contracting needs. Check out our main service areas to the below or call for more details.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
              <div id="service1" class="collapse panel-body">
                <p>In many Montreal homes, the bathroom is often the room most in need of a renovation, but the last to be done. However, the difference that a bathroom remodel can make is huge and you certainly won't regret the decision. Dream Building & Remodeling is here to help with a professional design-build bathroom remodel that addresses every detail of the room.</p>
                 <p>For any bathroom remodel, a Dream Building & Remodeling specialist will visit your home to not only see the room, but also to hear what problems you're looking to solve with the renovation. Better showers, toilets, and sinks are common concerns, but we'll also look for other ways to provide big improvements, such as bathroom lighting, flooring, and organizing fixtures to maximize the usable space.</p>
                  <p>We understand that completing a bathroom remodel in Montreal can be a trying time. For that reason, our team of experts will work around your schedule to make as little an imposition as possible. While on the job, we'll work effectively to ensure that the bathroom renovation goes quickly without sacrificing quality and get your bathroom back to full functionality.</p>
                  <p>To schedule a visit from a Dream Building & Remodeling bathroom renovation expert, call 800-890-9432.</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
              <div id="service2" class="collapse panel-body">
                <p>As the true hub of your Montreal home, your kitchen is literally where the magic happens – it's where families come together and where meaningful memories are made. At Dream Building & Remodeling, our kitchen remodels concentrate both on the attractiveness and functionality of your kitchen to make sure that everything is perfect from top to bottom.</p>
                <p>Available all the way from assisting with design to putting the final touches on your kitchen, we'll guide every step of the process, from sourcing fixtures and appliances at the right price to adding custom-built cabinets and trim work that makes your kitchen stand out from the crowd. With peerless kitchen remodeling experience, you'll see the Dream Building & Remodeling difference.</p>
                 <p>We understand that budget is always a concern with a kitchen remodel and for that reason, we'll always search deep to find the best deals possible. Keeping your costs low while providing the best bang for your buck is what we do. Our pricing is completely transparent and the final invoice will clearly show all items and materials as well as the labor expense.</p>
                 <p>Get a top level renovation done with Dream Building & Remodeling and start enjoying your time in the kitchen.</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
              <div id="service3" class="collapse panel-body">
                <p>When you're building from the ground up, you want to know that your house is in good hands. Experienced and local, Dream Building & Remodeling has built many homes in the greater Montreal area and we're happy to provide references from previous residential construction projects.</p>
                 <p>For a home construction that you'll love, there's no substitute for genuine craftmanship. We don't cut corners or compromise on the standards for your home and you can rest assured that only strong and durable materials will be used during the construction. Every detail matters and we'll work hard to show you why so many in Montreal have chosen us for their new home.</p>
                  <p>We're a full-service construction contractor, which means that we'll be able to not only build your home, but also provide details like custom cabinetry, countertops, and other features that will make your home unique. Regardless of whether you're building a cozy cottage or a sprawling mansion, you'll be able to see the top shelf quality that Dream Building & Remodeling delivers.</p>
                  <p>Contact Dream Building & Remodeling at 800-890-9432 to see how we can turn your Montreal dream home into a reality.</p>

             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
              <div id="service4" class="collapse panel-body">
                <p>In Montreal, a business is only as good as the space it occupies. At Dream Building & Remodeling, we understand the need for top quality commercial construction and will work with you to draft plans that address every possible problem. With the right construction infrastructure completed by Dream Building & Remodeling, you'll be giving your commercial property the best chance for success.</p>
               <p>Whether you're building a small stand-alone restaurant, a residential complex, or a large industrial warehouse, Dream Building & Remodeling has the skills and knowledge needed to bring your plans to life. From the start, we'll bring a value-added solution that addresses your budget, timeline, and design specifications.</p>
                <p>Because we've been active in Montreal for a long time, we are well aware of all the permit and fire code issues that are part and parcel to new commercial construction. As such, we'll help you wade through the paperwork and ensure that your property meets all local requirements and standards. With Dream Building & Remodeling, you have a full partner, not just a contractor.</p>
                <p>For a commercial construction in Montreal that's designed for success, call Dream Building & Remodeling at 800-890-9432.</p>


             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
              <div id="service5" class="collapse panel-body">
                <p>Whether your Montreal home is old or new, expanding with a new addition can help maximize your space and bring a healthy dose of extra room. However, building additions can be a tricky business, especially when considering all the licenses and permits needed. At Dream Building & Remodeling, we'll handle every aspect of your new addition, including the paperwork.</p>
                 <p>For the addition itself, we pride ourselves on the innovative designs we provide. Using your input, we'll draw up detailed plans to make sure your new space fully lives up to your expectations. Dream Building & Remodeling believes that spending time on your plans is the key to a successful addition build. Once we know exactly what you want with your new space, we'll be able to deliver it.</p>
                  <p>If you're like others in Montreal that have tried going it on your own with a DIY home addition such as a garage, office, or covered patio, then you probably know how difficult the project can be. With Dream Building & Remodeling by your side, we'll make short work of your new addition and have it ready to use in no time.</p>
                  <p>Don't struggle with a DIY addition – call the Dream Building & Remodeling professionals at 800-890-9432.</p>

             </div>
       </div>




<!--
				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="demo1">
				   <p>In many Montreal homes, the bathroom is often the room most in need of a renovation, but the last to be done. However, the difference that a bathroom remodel can make is huge and you certainly won't regret the decision. Dream Building & Remodeling is here to help with a professional design-build bathroom remodel that addresses every detail of the room.</p>
            <p>For any bathroom remodel, a Dream Building & Remodeling specialist will visit your home to not only see the room, but also to hear what problems you're looking to solve with the renovation. Better showers, toilets, and sinks are common concerns, but we'll also look for other ways to provide big improvements, such as bathroom lighting, flooring, and organizing fixtures to maximize the usable space.</p>
             <p>We understand that completing a bathroom remodel in Montreal can be a trying time. For that reason, our team of experts will work around your schedule to make as little an imposition as possible. While on the job, we'll work effectively to ensure that the bathroom renovation goes quickly without sacrificing quality and get your bathroom back to full functionality.</p>
             <p>To schedule a visit from a Dream Building & Remodeling bathroom renovation expert, call 800-890-9432.</p>
				  </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo2">
				    <p>As the true hub of your Montreal home, your kitchen is literally where the magic happens – it's where families come together and where meaningful memories are made. At Dream Building & Remodeling, our kitchen remodels concentrate both on the attractiveness and functionality of your kitchen to make sure that everything is perfect from top to bottom.</p>
            <p>Available all the way from assisting with design to putting the final touches on your kitchen, we'll guide every step of the process, from sourcing fixtures and appliances at the right price to adding custom-built cabinets and trim work that makes your kitchen stand out from the crowd. With peerless kitchen remodeling experience, you'll see the Dream Building & Remodeling difference.</p>
             <p>We understand that budget is always a concern with a kitchen remodel and for that reason, we'll always search deep to find the best deals possible. Keeping your costs low while providing the best bang for your buck is what we do. Our pricing is completely transparent and the final invoice will clearly show all items and materials as well as the labor expense.</p>
             <p>Get a top level renovation done with Dream Building & Remodeling and start enjoying your time in the kitchen.</p>

				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo3">
				   <p>When you're building from the ground up, you want to know that your house is in good hands. Experienced and local, Dream Building & Remodeling has built many homes in the greater Montreal area and we're happy to provide references from previous residential construction projects.</p>
            <p>For a home construction that you'll love, there's no substitute for genuine craftmanship. We don't cut corners or compromise on the standards for your home and you can rest assured that only strong and durable materials will be used during the construction. Every detail matters and we'll work hard to show you why so many in Montreal have chosen us for their new home.</p>
             <p>We're a full-service construction contractor, which means that we'll be able to not only build your home, but also provide details like custom cabinetry, countertops, and other features that will make your home unique. Regardless of whether you're building a cozy cottage or a sprawling mansion, you'll be able to see the top shelf quality that Dream Building & Remodeling delivers.</p>
             <p>Contact Dream Building & Remodeling at 800-890-9432 to see how we can turn your Montreal dream home into a reality.</p>
				   </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo4">
				    <h3 class="panel-title"><?php echo $service4; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo4">
				  	 <p>In Montreal, a business is only as good as the space it occupies. At Dream Building & Remodeling, we understand the need for top quality commercial construction and will work with you to draft plans that address every possible problem. With the right construction infrastructure completed by Dream Building & Remodeling, you'll be giving your commercial property the best chance for success.</p>
            <p>Whether you're building a small stand-alone restaurant, a residential complex, or a large industrial warehouse, Dream Building & Remodeling has the skills and knowledge needed to bring your plans to life. From the start, we'll bring a value-added solution that addresses your budget, timeline, and design specifications.</p>
             <p>Because we've been active in Montreal for a long time, we are well aware of all the permit and fire code issues that are part and parcel to new commercial construction. As such, we'll help you wade through the paperwork and ensure that your property meets all local requirements and standards. With Dream Building & Remodeling, you have a full partner, not just a contractor.</p>
             <p>For a commercial construction in Montreal that's designed for success, call Dream Building & Remodeling at 800-890-9432.</p>
				    </div>
				</div>

        <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?php echo $service5; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo5">
				   <p>Whether your Montreal home is old or new, expanding with a new addition can help maximize your space and bring a healthy dose of extra room. However, building additions can be a tricky business, especially when considering all the licenses and permits needed. At Dream Building & Remodeling, we'll handle every aspect of your new addition, including the paperwork.</p>
            <p>For the addition itself, we pride ourselves on the innovative designs we provide. Using your input, we'll draw up detailed plans to make sure your new space fully lives up to your expectations. Dream Building & Remodeling believes that spending time on your plans is the key to a successful addition build. Once we know exactly what you want with your new space, we'll be able to deliver it.</p>
             <p>If you're like others in Montreal that have tried going it on your own with a DIY home addition such as a garage, office, or covered patio, then you probably know how difficult the project can be. With Dream Building & Remodeling by your side, we'll make short work of your new addition and have it ready to use in no time.</p>
             <p>Don't struggle with a DIY addition – call the Dream Building & Remodeling professionals at 800-890-9432.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="BATHROOM REMODELING" data-alt="BATHROOM REMODELING" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">BATHROOM REMODELING</span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="KITCHEN REMODEL" data-alt="KITCHEN REMODEL" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">KITCHEN REMODEL</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="RESIDENTIAL CONSTRUCTION" data-alt="RESIDENTIAL CONSTRUCTION" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">RESIDENTIAL CONSTRUCTION</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="COMMERCIAL CONSTRUCTION" data-alt="COMMERCIAL CONSTRUCTION" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">COMMERCIAL CONSTRUCTION</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="ADDITIONS " data-alt="ADDITIONS" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">ADDITIONS </span> </div>
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
        <p class="cta-desc">Based in Montreal, Dream Building & Remodeling provides quality remodel and construction services.</p>
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
      <div class="col-md-4 col-sm-5 contact-col cmap contact-info">
      <div class="address-box">
        <h3>Contact Info</h3>

        <!-- Address 1 -->
        <h5>Adress </h5>
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
        </div>
      </div>
    </div>
  </div>
</div>
