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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.png" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>Professional. </strong>Lqualified. Experienced.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Your construction project needs the expertise that only Construction High End can bring. With years of experience developing industrial, commercial, and multi-unit residential construction from design to completion, we offer a comprehensive solution for all large-scale projects.</p>
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
         <h3 class="about-subheader">The right choice for your next construction development.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">From shopping malls to apartment complexes to massive distribution centers in Montreal and beyond, Construction High End has the knowledge and experience necessary to transform your construction ideas to successful realization.</p>
        <p class="about-us">At Construction High End, we believe in quality and professionalism. In taking on your project, our high standards and unique approach will translate to a perfectly-executed construction project that comes in on time and under budget.</p>
        <p class="about-us">For a construction partner in Montreal that's able to deliver every time without fail, call 800-890-9432 and speak to a Construction High End professional.</p>
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
        <h3 class="service-subheader"> <strong>Our Primary </strong>Service Areas</h3>
        <p>Click the links to the below to learn more about our specific construction services. We specialize in design/build, general contracting, pre-construction, project management, and construction management.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">



      <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
           <div id="service1" class="collapse panel-body">
             <p> There may be many construction firms in Montreal, but Construction High End is the only one that can adapt to your scale with professional design/build services that encompass everything you need to make your project a success. We've worked on everything from large retail centers to multi-family housing developments and are truly a one-stop solution.</p>
              <p>You'll notice the Construction High End difference from our first planning session as we work within your existing design and use our construction expertise to identify potential problem areas. With us, your project's infrastructure will be completely sound and we'll use a detail-oriented approach to ensure that every issue is addressed before we start building.</p>
               <p> If you've dealt with Montreal construction companies that run over budget and let deadlines slip away, then you know how frustrating and costly incompetence can be. At Construction High End, we're the epitome of professionalism and your experienced point of contact will deliver results, not excuses.</p>
               <p>When you need a large-scale Montreal design/build service provider that takes ownership of your construction project, call Construction High End at 800-890-9432 and see the difference for yourself.</p>


          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
           <div id="service2" class="collapse panel-body">
             <p>Look around Montreal and you'll find general contracting work by Construction High End in nearly every corner. Established as an experienced partner for complex construction needs, we've developed relationships with many development firms that contact us time and time again when they need a professional company with a proven track record of quality.</p>
             <p>When Construction High End is hired for a general contracting project, the first step is detailed planning and cost control to iron out the specifics of your work and make sure our visions are perfectly aligned. We've found that thorough planning is one of the keys of successful contracting and you can count on us for innovative solutions that proactively avoid problems before they appear.</p>
              <p>Our general contracting services in Montreal come with a full quality assurance and control process to make sure that our work not only meets your specifications but also our high standards. We don't settle for unsatisfied clients – we keep going until the job is completed correctly and we're able to to proudly stand behind our professional level of work.</p>
              <p>Construction High End is ready to take on any industrial, commercial, and large-scale Montreal general contracting assignments in Montreal. Contact us at 800-890-9432 for more details.</p>


          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
           <div id="service3" class="collapse panel-body">
             <p>On a large-scale construction project in Montreal, there's no substitute for having a partner that understands the value of the pre-construction stage. At Construction High End, we know that creating a well-defined strategy from the beginning is essential and our comprehensive approach will translate to final results that are delivered on time, within budget, and of high quality.</p>
              <p>With any Montreal pre-construction assignment, we'll assess budgeting issues, scheduling concerns, and more in a transparent manner that allows you to see our process as well as our professionalism. In addition, trade services that are needed for your project will be prequalified and receive full vetting to make sure you're getting the best quality for the best price.</p>
               <p>After years of experience and countless successful Montreal construction projects, Construction High End has become an expert at the pre-construction stage and our cost forecasting is extremely accurate. Work with us once and you'll never go back to other firms that simply can't handle the full scope of your industrial, commercial, and large residential construction projects.</p>
               <p>For accurate project estimating and a pre-construction phase that puts your Montreal project on the right track, schedule a meeting with Construction High End by calling 800-890-9432.</p>


          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
           <div id="service4" class="collapse panel-body">
             <p>From obtaining all necessary permits to the final touches that fully realize your Montreal industrial, commercial, or residential ideas, you need a firm with the project management experience to make sure all the pieces fall into place. At Construction High End, we're exactly that type of company and specific brand of project management has satisfied many developers just like you.</p>
            <p>For us, project management has a very precise meaning – being a trusted construction partner that handles every detail of your build and is responsible for its success. While others may try to pass the buck, Construction High End understands that you're hiring us to deliver on time results that follow your project's specifications to the letter.</p>
             <p>On any project management job in Montreal, you'll have a single point of contact that will keep you up to date about the progress of the assignment and oversee the entire operation. Our experienced construction superintendent will work closely with all the teams involved to make sure that our goals for efficiency, effectiveness, and quality are all being met.</p>
             <p>Don't settle for project management companies that shirk responsibility at every chance. Call Construction High End at 800-890-9432 and deal with a firm that's ready to deliver.</p>


          </div>
    </div>
    <div class="panel panel-primary">
       <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
           <div id="service5" class="collapse panel-body">
             <p>For many developers, having control over selecting individual contractors is a major concern in any construction project. If you prefer more flexibility when it comes to using specific teams and handling parts of the project yourself, but still need an experienced manager to helm the operation, then Construction High End has construction management services that are the perfect answer.</p>
             <p>In a Montreal construction management project, Construction High End can assume a wide range of duties, from site selection and permit acquisition to quality management and on-site coordination. Our professional and flexible approach means that we're able to adapt our workflow to meet your exact needs and create a customized solution that allows you to stay involved.</p>
              <p>The construction manager assigned by Construction High End will act as your representative on the job site and effectively becomes an extension of your own vision. Whether you need contract document preparation, cost accounting, or any other aspect of the project, your point of contact will organize and assemble everything to make sure that the build goes smoothly and efficiently.</p>
              <p>At Construction High End, our Montreal construction management services are built to fit your needs. Call us at 800-890-9432 to learn more about how we can assist.</p>


          </div>
    </div>





<!--
				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="demo1">
				   <p> There may be many construction firms in Montreal, but Construction High End is the only one that can adapt to your scale with professional design/build services that encompass everything you need to make your project a success. We've worked on everything from large retail centers to multi-family housing developments and are truly a one-stop solution.</p>
            <p>You'll notice the Construction High End difference from our first planning session as we work within your existing design and use our construction expertise to identify potential problem areas. With us, your project's infrastructure will be completely sound and we'll use a detail-oriented approach to ensure that every issue is addressed before we start building.</p>
             <p> If you've dealt with Montreal construction companies that run over budget and let deadlines slip away, then you know how frustrating and costly incompetence can be. At Construction High End, we're the epitome of professionalism and your experienced point of contact will deliver results, not excuses.</p>
             <p>When you need a large-scale Montreal design/build service provider that takes ownership of your construction project, call Construction High End at 800-890-9432 and see the difference for yourself.</p>
				  </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo2">
				    <p>Look around Montreal and you'll find general contracting work by Construction High End in nearly every corner. Established as an experienced partner for complex construction needs, we've developed relationships with many development firms that contact us time and time again when they need a professional company with a proven track record of quality.</p>
            <p>When Construction High End is hired for a general contracting project, the first step is detailed planning and cost control to iron out the specifics of your work and make sure our visions are perfectly aligned. We've found that thorough planning is one of the keys of successful contracting and you can count on us for innovative solutions that proactively avoid problems before they appear.</p>
             <p>Our general contracting services in Montreal come with a full quality assurance and control process to make sure that our work not only meets your specifications but also our high standards. We don't settle for unsatisfied clients – we keep going until the job is completed correctly and we're able to to proudly stand behind our professional level of work.</p>
             <p>Construction High End is ready to take on any industrial, commercial, and large-scale Montreal general contracting assignments in Montreal. Contact us at 800-890-9432 for more details.</p>

				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo3">
				   <p>On a large-scale construction project in Montreal, there's no substitute for having a partner that understands the value of the pre-construction stage. At Construction High End, we know that creating a well-defined strategy from the beginning is essential and our comprehensive approach will translate to final results that are delivered on time, within budget, and of high quality.</p>
            <p>With any Montreal pre-construction assignment, we'll assess budgeting issues, scheduling concerns, and more in a transparent manner that allows you to see our process as well as our professionalism. In addition, trade services that are needed for your project will be prequalified and receive full vetting to make sure you're getting the best quality for the best price.</p>
             <p>After years of experience and countless successful Montreal construction projects, Construction High End has become an expert at the pre-construction stage and our cost forecasting is extremely accurate. Work with us once and you'll never go back to other firms that simply can't handle the full scope of your industrial, commercial, and large residential construction projects.</p>
             <p>For accurate project estimating and a pre-construction phase that puts your Montreal project on the right track, schedule a meeting with Construction High End by calling 800-890-9432.</p>
				   </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo4">
				    <h3 class="panel-title"><?php echo $service4; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo4">
				  	 <p>From obtaining all necessary permits to the final touches that fully realize your Montreal industrial, commercial, or residential ideas, you need a firm with the project management experience to make sure all the pieces fall into place. At Construction High End, we're exactly that type of company and specific brand of project management has satisfied many developers just like you.</p>
            <p>For us, project management has a very precise meaning – being a trusted construction partner that handles every detail of your build and is responsible for its success. While others may try to pass the buck, Construction High End understands that you're hiring us to deliver on time results that follow your project's specifications to the letter.</p>
             <p>On any project management job in Montreal, you'll have a single point of contact that will keep you up to date about the progress of the assignment and oversee the entire operation. Our experienced construction superintendent will work closely with all the teams involved to make sure that our goals for efficiency, effectiveness, and quality are all being met.</p>
             <p>Don't settle for project management companies that shirk responsibility at every chance. Call Construction High End at 800-890-9432 and deal with a firm that's ready to deliver.</p>
				    </div>
				</div>

              <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?php echo $service5; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo5">
				  	<p>For many developers, having control over selecting individual contractors is a major concern in any construction project. If you prefer more flexibility when it comes to using specific teams and handling parts of the project yourself, but still need an experienced manager to helm the operation, then Construction High End has construction management services that are the perfect answer.</p>
            <p>In a Montreal construction management project, Construction High End can assume a wide range of duties, from site selection and permit acquisition to quality management and on-site coordination. Our professional and flexible approach means that we're able to adapt our workflow to meet your exact needs and create a customized solution that allows you to stay involved.</p>
             <p>The construction manager assigned by Construction High End will act as your representative on the job site and effectively becomes an extension of your own vision. Whether you need contract document preparation, cost accounting, or any other aspect of the project, your point of contact will organize and assemble everything to make sure that the build goes smoothly and efficiently.</p>
             <p>At Construction High End, our Montreal construction management services are built to fit your needs. Call us at 800-890-9432 to learn more about how we can assist.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="DESIGN AND BUILD" data-alt="DESIGN AND BUILD" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">DESIGN AND BUILD</span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="GENERAL CONTRACTING" data-alt="GENERAL CONTRACTING" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">GENERAL CONTRACTING</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="PRE-CONSTRUCTION" data-alt="PRE-CONSTRUCTION" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">PRE-CONSTRUCTION</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="PROJECT MANAGEMENT" data-alt="PROJECT MANAGEMENT" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">PROJECT MANAGEMENT</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="CONSTRUCTION MANAGEMENT " data-alt="CONSTRUCTION MANAGEMENT" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> CONSTRUCTION MANAGEMENT</span> </div>
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
        <p class="cta-desc">Servicing Montreal and beyond, we're a reliable and trusted partner for complex construction projects of all types.</p>
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
