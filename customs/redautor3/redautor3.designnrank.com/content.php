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
              <li><span class="top-label"> <i class="fa fa-clock-o " aria-hidden="true"></i>Work Hours : </span><?php echo $workingHours;?></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_AutomotiveRepairs_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>Mechanics </strong>You Can Trust In Montreal.</h1>
          <div class="description wow fadeInLeftBig">
            <p>At Automotive Repairs, we take auto repair and customer service seriously. Whether you have a complete transmission rebuild or just need a quick oil and filter change, we'll treat your vehicle as our own and make sure that the work we do exceeds your expectations of Montreal repair shops.</p>
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
         <h3 class="about-subheader">A complete Montreal repair service </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">Automotive Repairs is a local, full-featured auto shop in Montreal with years of experience and comprehensive ability. Instead of searching for a different provider every time your vehicle has a problem, our team of technicians is at the ready to deal with everything from electrical problems to diagnostic issues.</p>
        <p class="about-us">We believe in providing the best possible customer service and transparent pricing for all the work we do. When you choose us, you'll know your in good hands and that when you drive your vehicle away from our shop, it will have an excellent repair or maintenance service – that's the Automotive Repairs way!</p>
        <p class="about-us">Contact us today by email, call us at 800-890-9432, or simply drop by our Montreal repair shop for a visit.</p>
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
        <h3 class="service-subheader"> <strong>A Wide Range </strong>of Services</h3>
        <p>As the best auto repair company in town, we're equipped and ready to handle all your repair and maintenance needs. Look to the below to find our areas of expertise.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
               <div id="service1" class="collapse panel-body">
                 <p>Any modern car you see in Montreal has several intertwining systems that work together seamlessly to complete a driving experience. However, when these systems get out of whack, nothing short of a professional diagnostics check-up will return everything back to their intended settings. From assessing error codes to taking your car's tuning to the next level, Automotive Repairs's diagnostics work is a great choice.</p>
                  <p>When a customer brings their vehicle to our Montreal location, we'll look at every individual system, from electrical problems to engine issues, each of which can have a tangible effect. The diagnostic tools we use are of the highest quality and capable of resolving even small errors that could be hampering your time behind the wheel.</p>
                   <p>The unfortunate fact is that the vast majority of cars on Montreal roads are not performing up to their potential. With a full engine diagnostics service and tune up package from Automotive Repairs, your car will get the complete treatment and you'll see both fuel efficiency and performance gains immediately.</p>
                   <p>To schedule a diagnostics visit at our Montreal facility, give Automotive Repairs a call today at 800-890-9432.</p>
              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
               <div id="service2" class="collapse panel-body">
                 <p>Many people might think of vehicle inspections in Montreal as an unnecessary trouble to be completed every year. While most modern cars and trucks will pass an inspection easily and with flying colors, the service performed by Automotive Repairs has additional benefits that could help you save a considerable amount of money.</p>
                 <p>An inspection may cover emissions and other concerns, but what's really happening when Automotive Repairs looks at your vehicle is simply making sure that it is still safe for driving on many different road types. By performing high quality inspections, we're doing our part to keep Montreal safe and reduce the number of preventable accidents on the streets.</p>
                  <p>In addition to the required checks of a standard vehicle inspection, Automotive Repairs mechanics will also take the time to perform a top to bottom, A-Z look at your vehicle and find seemingly hidden areas that could use an upgrade or tweak. From aligning tires for better fuel efficiency to catching exhaust problems before they start, we're the local Montreal inspection provider to trust.</p>
                  <p>Don't put off your vehicle inspection in Montreal for another day – dial 800-890-9432 and make an appointment with Automotive Repairs today!</p>


              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
               <div id="service3" class="collapse panel-body">
                 <p>If you're driving a newer car, then there's a good chance you've already experienced the sticker shock of going to a local Montreal dealership for scheduled maintenance. It's no secret that oil changes, tune ups, tire rotation, and other services cost more at the dealership, but few realize that Automotive Repairs offers the same (if not better) service at cheaper prices.</p>
                  <p>Scheduled maintenance, also called preventative maintenance, is a plan set forth by your car's manufacturer and details how often you'll need oil changes or other service. At Automotive Repairs, we're well acquainted with the service schedules of a wide variety of models and understand exactly what's needed at every stop of the process.</p>
                   <p>In addition to keeping your car running well in Montreal, a scheduled maintenance service at Automotive Repairs comes with the extra benefit of quality. We'll always use OEM parts or better and we've worked hard to earn our strong reputation for providing affordable preventative maintenance that keeps your warranty intact.</p>
                   <p>Compare the prices for scheduled maintenance in Montreal and you'll see why Automotive Repairs is a winner. Call 800-890-9432 to set up your next visit.</p>


              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
               <div id="service4" class="collapse panel-body">
                 <p>By far the most common automotive service task, getting an oil change in Montreal doesn't have to be an exercise in frustration. At Automotive Repairs, oil and filter changes are our bread and butter and we've perfected the art of getting you in and out of our service facility as quickly and professionally as possible.</p>
                <p>As part of a complete preventative maintenance plan, oil and filter changes help to reduce the chance of overheating and removes oil that is commonly saturated with debris and contaminants. When you bring your car to our Montreal shop, a friendly Automotive Repairs associate will help you figure out the best high quality oil for your needs and have you back on the road in no time.</p>
                 <p>On these regular service visits to Automotive Repairs, you can count on our team to also check your fluid levels and top up as needed. When you leave our Montreal auto repair center, you can rest assured that your vehicle is well-prepared to meet the next 3,000-5,000 miles as listed in your owner's manual.</p>
                 <p>For a top notch lube, oil, and filter service without the waiting of other Montreal shops, give Automotive Repairs a call at 800-890-9432.</p>

              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
               <div id="service5" class="collapse panel-body">
                 <p>You may not pay much attention to the wheels and tires on your car, but when there's a problem, we guarantee you'll notice. In Montreal, you need good wheels and tires to navigate the streets as well as a partner to fix them when problems arise. At Automotive Repairs, we're that partner and happy to repair or replace your wheels and tires.</p>
                  <p>If you've noticed vibration or shaking while you drive, then there's probably an issue with your tires or wheels. Over time, it's easy to get out of alignment, but a quick service to Automotive Repairs will get it taken care of and eliminate that annoying pull to one side. Using our professional-grade equipment, we'll use digital testing to assess the problem and then provide the best fix.</p>
                   <p>The thing to remember about wheel and tire problems is that they often lead to bigger issues. Not having enough tread on your tires creates an unsafe driving situation and wheels that are out of balance can cause bent axles and other more costly repairs. Trust Automotive Repairs for your wheel and tire services and we'll get the job done.</p>
                   <p>At the first sign of wheel or tire troubles, give Automotive Repairs a call at 800-890-9432 and we'll find a convenient time to visit our Montreal shop.</p>

              </div>
        </div>
        <div class="panel panel-primary">
           <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
               <div id="service6" class="collapse panel-body">
                 <p>Far and away the single most complex part of your vehicle, the engine is the beating heart of your car. When there are engine problems, it can affect every other aspect and easily leave you stranded on the side of the road. However, there is a solution to Montreal engine woes in Automotive Repairs - a local engine repair specialist.</p>
                 <p>Whether your car's from this year or three decades ago, the mechanics at Automotive Repairs have the experience and knowledge needed to perform engine repairs of all shapes and sizes. From cracked manifolds to complete rebuilds to restore your engine to its former glory, we have successfully finished countless engine repairs in Montreal.</p>
                  <p>Even the best engines will accumulate their share of wear and tear over the years, but Automotive Repairs recommends thorough engine maintenance to ensure the longest possible engine lifespan. Come to us for routine maintenance as well as engine repairs and we'll keep you treasured car running as long as possible.</p>
                  <p>For professional engine repair service by true experts, Automotive Repairs is just a phone call away. Dial 800-890-9432 to learn more about our engine repair services in Montreal.</p>
              </div>
        </div>
         <div class="panel panel-primary">
                   <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?> </h3>
                       <div id="service7" class="collapse panel-body">
                         <p>From batteries and starters to radios and windshield wipers, your car depends on electricity to function properly. When your vehicle's electrical system starts to fail, it not only changes your driving comfort, but can also be a serious situation if it's not dealt with quickly. At Automotive Repairs, we know electrical systems and our Montreal location is outfitted to handle any problem.</p>
                          <p>Automotive Repairs is the right combination of experience, knowledge, and professional automotive equipment. Our electrical specialists have seen almost every imaginable electrical issue and know how to fix them all. Armed with electrical diagnostic equipment that makes it easy to isolate underlying causes, you'll be back to the Montreal streets sooner than you think.</p>
                           <p>Dimmed headlights, broken turn signals, and dysfunctional door locks are just a few of the common electrical and electronic problems that Automotive Repairs can repair, but we're open to any electrical challenge. Give us a chance and you'll see why so many people in Montreal trust us for their electrical and other automotive work.</p>
                           <p>For expert car electrical system advice or to schedule a service appoint, contact Automotive Repairs in Montreal by email or telephone (800-890-9432).</p>

                      </div>
                </div>
                <div class="panel panel-primary">
                   <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service8" id="panel_open_close"> <?php echo $service8; ?> </h3>
                       <div id="service8" class="collapse panel-body">
                         <p>Even though it's not related to the mechanical or electrical systems of your vehicle, having a broken window or windshield can just as effectively render your car useless in Montreal. To get back up and running, Automotive Repairs has full glass repair and replacement options to fit your exact needs.</p>
                        <p>The unfortunate truth with glass repair and replacement in Montreal is that the majority of cases will need the latter rather than the former. Once automotive glass has cracked, splintered, or otherwise been weakened, it will need replacement to keep you safe and protected from insects, bad weather, and stones or other debris that can come from the road.</p>
                         <p>At Automotive Repairs, we'll do everything in our power to save your existing windows or windshields if at all possible. We understand that replacing the glass in your vehicle is often an unplanned expense and one that can be costly depending on your car's make and model. We'll help you find the most affordable option, whether a repair is possible or in the case you need a windshield replacement in Montreal.</p>
                         <p>Before trying to drive a vehicle in Montreal with a broken window or windshield, call Automotive Repairs at 800-890-9432 to find the best repair or replacement prices.</p>

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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="DIAGNOSTICS" data-alt="DIAGNOSTICS" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">DIAGNOSTICS</span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="INSPECTIONS" data-alt="INSPECTIONS" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">INSPECTIONS</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="SCHEDULED MAINTENANCE  " data-alt="SCHEDULED MAINTENANCE  " data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="PAINT AND REFINISHING " alt="PAINT AND REFINISHING ">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">SCHEDULED MAINTENANCE  </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="LUBE OIL AND FILTER " data-alt="LUBE OIL AND FILTER  " data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">LUBE OIL AND FILTER  </span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="TIRE AND WHEEL SERVICES  " data-alt="TIRE AND WHEEL SERVICES " data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">TIRE AND WHEEL SERVICES </span> </div>
          </div>
          </a>



          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service6.jpg" data-title="ENGINE REPAIR" data-alt="ENGINE REPAIR" data-desc="">
          <div> <img src="assets/img/gallery/service6_thumb.jpg" title="PAINT AND REFINISHING" alt="PAINT AND REFINISHING">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">ENGINE REPAIR</span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service7.jpg" data-title="ELECTRICAL SYSTEMS" data-alt="ELECTRICAL SYSTEMS" data-desc="">
          <div> <img src="assets/img/gallery/service7_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">ELECTRICAL SYSTEMS</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service8.jpg" data-title="GLASS REPAIR AND REPLACEMENT" data-alt="GLASS REPAIR AND REPLACEMENT" data-desc="">
          <div> <img src="assets/img/gallery/service8_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">GLASS REPAIR AND REPLACEMENT</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service9.jpg" data-title="INSPECTIONS" data-alt="INSPECTIONS" data-desc="">
          <div> <img src="assets/img/gallery/service9_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">INSPECTIONS</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service10.jpg" data-title="DIAGNOSTICS" data-alt="DIAGNOSTICS" data-desc="">
          <div> <img src="assets/img/gallery/service10_thumb.jpg" title=" DIAGNOSTICS" alt="DIAGNOSTICS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">DIAGNOSTICS </span> </div>
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
        <p class="cta-desc">Automotive Repairs is based in Montreal and is a one-stop solution for everything from windshield replacements to engine rebuilds.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 section-bottom-button wow fadeInUp"></div>
    </div>
  </div>
</div>





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
  <div class="slide"><img src="assets/img/slider-icon/brands-1.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-2.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-3.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-4.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-5.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-6.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-7.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-8.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-9.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-10.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-14.png"></div></div>
  <div class ="col-md-3">
  <div class="slide"><img src="assets/img/slider-icon/brands-15.png"></div></div>


</div>



    </div>
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
