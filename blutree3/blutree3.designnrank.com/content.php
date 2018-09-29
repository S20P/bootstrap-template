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
          <h1 class="wow fadeInLeftBig"> A Local Expert That Knows Your <strong> Trees. </strong></h1>
          <div class="description wow fadeInLeftBig">
            <p>Impressively knowledgeable and experienced, Tree Service strives to be the leading arborist and tree service provider in Montreal. Our team is your professional, one-stop solution for promoting the health and longevity of your property's plant life. </p>
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
         <h3 class="about-subheader">Improving Montreal, one tree at a time.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <p class="about-us">With a history of providing quality tree solutions in Montreal, Tree Service is well known as the firm to call when you want the job done right, whether it's a removal, pruning, or simply professional advice about what trees to plant. </p>
        <p class="about-us">Through every job we complete for our Montreal neighbors, you can be sure of one thing – quality. Completely certified and insured, we'll take every step necessary to make sure your trees are perfectly equipped for a long and healthy life. </p>
        <p class="about-us">Your property's green space deserves the attention of a professional – call Tree Service at 800-890-9432 for a free estimate.</p>
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
        <h3 class="service-subheader">A <strong>Full Selection </strong>of Services </h3>
        <p>From flawless tree removals to detailed arborist analysis that evaluates tree health and risk assessment, Tree Service can handle every aspect of your trees and give you expert recommendations.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">



      <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
            <div id="service1" class="collapse panel-body">
              <div class="service-desc">
                <p>Some Montreal tree service companies may consider the job done after only cutting down a tree, but Tree Service is a full solution for expert tree removal. Not only will we take care of safe and effective cutting that presents no danger to your property, we're also able of stump grinding and other services that fully remove all traces of a tree.</p>
                <p>When contracted for a tree removal job, our certified team will start with a visit to see the exact situation firsthand before giving you a quote. Because every tree is different and may require different tree removal methods, a professional assessment is the first step in a quality tree removal.</p>
                <p>In addition to standard tree removal in Montreal, Tree Service is also available for emergency services. While we strongly believe that being proactive is the right approach when dealing with trees, we also understand that events like storms and lightning can come without warning. Our professional team will mobilize quickly in emergency situations to make sure dangerous trees are removed quickly and expertly.</p>
                <p>Whether you need an immediate tree removal response or just have a tree that you've been meaning to get rid of, call 800-890-9432 to speak with Tree Service.</p>
              </div>

           </div>
     </div>
     <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
            <div id="service2" class="collapse panel-body">
              <div class="service-desc">
                <p>There are many reasons why a tree might need to be pruned in Montreal – for structural stability, view clearance, or increased fruit production, just to name a few. Whatever the reason, Tree Service has a full list of trimming services, including deadwood removal, branch thinning, hedge trimming, and many more suited perfectly for your needs.</p>
                <p>When done incorrectly, a trimming job can severely stunt the growth of your plants and cause irreparable damage. At Tree Service, we have the knowledge necessary to properly prune your trees and you can count on us for yearly maintenance trims that keep your trees, shrubs, and hedges at maximum health and looking great.</p>
                <p>The only thing that matches the quality of our pruning and trimming ability is our customer service. Many of our Montreal clients have been with us for years and we've played a major part in turning routine outdoor spaces into thriving ecosystems. Take a trip through town and you're bound to see our pruning handiwork on display.</p>
                <p>For a pruning or trimming job in Montreal that enhances your plants rather than destroying them, call Tree Service at 800-890-9432 to set up your first visit.</p>
              </div>

           </div>
     </div>
     <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
            <div id="service3" class="collapse panel-body">
              <div class="service-desc">
                <p>As far as investments in your Montreal property go, few can rival the rewards that planting new trees can bring. From seeing the growth over many years to providing a wind barrier, what may seem to start as something small becomes a major component of your outdoor space. At Tree Service, we fully understand the benefits of tree planting and have a suite of services to help.</p>
                <p>Tree Service will start a tree planting job by sending a certified arborist to your location to evaluate the space available and help you decide what type of tree you want. Because we have extensive local experience, we know which species work best for different functions and have partnerships with many local nurseries, giving us unparalleled access to a large selection.</p>
                <p>We are available for tree planting jobs of all shapes and sizes, from single plantings in residential locations to large-scale commercial and municipal planting contracts. In every case, we'll make sure that the right tree is selected, the right soil is used, and your new plants have everything they need to thrive.</p>
                <p>To learn more about our tree planting services in Montreal, call Tree Service at 800-890-9432.</p>
                </div>

           </div>
     </div>
     <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
            <div id="service4" class="collapse panel-body">
              <div class="service-desc">
                <p>As a tree ages, it can become unbalanced, with many tops or split trunks that can create an unsafe situation on your Montreal property. At Tree Service, one of our specialties is tree bracing and cabling that draws on our considerable knowledge of tree stability. Our services will work to correct codominant stems and keep you safe.</p>
                <p>Not meant to be attempted by those other than professionals, successful cabling takes an experienced hand to be executed properly. On a visit, a Tree Service cabling specialist will install high-strength material that will both reinforce the structure of the tree as well as allow it to continue to grow. Bracing is a similar technique that uses steel braces rather than cables to secure the tree.</p>
                <p>If you've already noticed a splitting trunk or a top-heavy tree, then it's time to call in the experts at Tree Service. Left alone, the problem will only get worse, but our specialists can easily install the right cabling or bracing to stop the small issue from becoming a big one. We'll explain what we're doing and provide a clear invoice for the materials and labor involved in the job.</p>
                <p>Don't wait too long to schedule a cabling or bracing job that could save a valuable tree – call Tree Service at 800-890-9432 today.</p>
               </div>

           </div>
     </div>
     <div class="panel panel-primary">
        <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
            <div id="service5" class="collapse panel-body">
              <div class="service-desc">
                <p>While there may be many people in Montreal that can do basic tree-related tasks, only a certified arborist has the knowledge and experience needed to perform top level assessments. At Tree Service, we have on-staff arborists that have all the necessary qualifications and are licensed to provide arborist work, such as creating arborist reports.</p>
                <p>Most of our arborist work centers on tree removal and risk evaluation for your property and that of your neighbors, but there is much more that a certified arborist can do. Our team can evaluate sick trees and provide treatment recommendations that will bring it back to a healthy state. In addition, we can also deliver arborist reports for new construction sites.</p>
                <p>Whatever arborist work you need done in Montreal, you can expect the same detail-oriented, quality service from Tree Service. We're proud of our knowledge and ability and would be happy to evaluate the current state of your plans and any biotic or abiotic damage that they may have suffered.</p>
                <p>Call Tree Service at 800-890-9432 to set up a convenient time for our certified arborist to visit your property for an assessment.</p>
               </div>

           </div>
     </div>



				<!-- <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="service1">
            <div class="service-desc">
              <p>Some Montreal tree service companies may consider the job done after only cutting down a tree, but Tree Service is a full solution for expert tree removal. Not only will we take care of safe and effective cutting that presents no danger to your property, we're also able of stump grinding and other services that fully remove all traces of a tree.</p>
              <p>When contracted for a tree removal job, our certified team will start with a visit to see the exact situation firsthand before giving you a quote. Because every tree is different and may require different tree removal methods, a professional assessment is the first step in a quality tree removal.</p>
              <p>In addition to standard tree removal in Montreal, Tree Service is also available for emergency services. While we strongly believe that being proactive is the right approach when dealing with trees, we also understand that events like storms and lightning can come without warning. Our professional team will mobilize quickly in emergency situations to make sure dangerous trees are removed quickly and expertly.</p>
              <p>Whether you need an immediate tree removal response or just have a tree that you've been meaning to get rid of, call 800-890-9432 to speak with Tree Service.</p>
            </div>
				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="service2">
            <div class="service-desc">
              <p>There are many reasons why a tree might need to be pruned in Montreal – for structural stability, view clearance, or increased fruit production, just to name a few. Whatever the reason, Tree Service has a full list of trimming services, including deadwood removal, branch thinning, hedge trimming, and many more suited perfectly for your needs.</p>
              <p>When done incorrectly, a trimming job can severely stunt the growth of your plants and cause irreparable damage. At Tree Service, we have the knowledge necessary to properly prune your trees and you can count on us for yearly maintenance trims that keep your trees, shrubs, and hedges at maximum health and looking great.</p>
              <p>The only thing that matches the quality of our pruning and trimming ability is our customer service. Many of our Montreal clients have been with us for years and we've played a major part in turning routine outdoor spaces into thriving ecosystems. Take a trip through town and you're bound to see our pruning handiwork on display.</p>
              <p>For a pruning or trimming job in Montreal that enhances your plants rather than destroying them, call Tree Service at 800-890-9432 to set up your first visit.</p>
            </div>
				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="service3">
            <div class="service-desc">
              <p>As far as investments in your Montreal property go, few can rival the rewards that planting new trees can bring. From seeing the growth over many years to providing a wind barrier, what may seem to start as something small becomes a major component of your outdoor space. At Tree Service, we fully understand the benefits of tree planting and have a suite of services to help.</p>
              <p>Tree Service will start a tree planting job by sending a certified arborist to your location to evaluate the space available and help you decide what type of tree you want. Because we have extensive local experience, we know which species work best for different functions and have partnerships with many local nurseries, giving us unparalleled access to a large selection.</p>
              <p>We are available for tree planting jobs of all shapes and sizes, from single plantings in residential locations to large-scale commercial and municipal planting contracts. In every case, we'll make sure that the right tree is selected, the right soil is used, and your new plants have everything they need to thrive.</p>
              <p>To learn more about our tree planting services in Montreal, call Tree Service at 800-890-9432.</p>
              </div>
				  </div>
				</div>

        <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="service4"> <h3 class="panel-title"> <?php echo $service4; ?></h3></div>
				  <div class="panel-body" data-acc-content="service4">
            <div class="service-desc">
              <p>As a tree ages, it can become unbalanced, with many tops or split trunks that can create an unsafe situation on your Montreal property. At Tree Service, one of our specialties is tree bracing and cabling that draws on our considerable knowledge of tree stability. Our services will work to correct codominant stems and keep you safe.</p>
              <p>Not meant to be attempted by those other than professionals, successful cabling takes an experienced hand to be executed properly. On a visit, a Tree Service cabling specialist will install high-strength material that will both reinforce the structure of the tree as well as allow it to continue to grow. Bracing is a similar technique that uses steel braces rather than cables to secure the tree.</p>
              <p>If you've already noticed a splitting trunk or a top-heavy tree, then it's time to call in the experts at Tree Service. Left alone, the problem will only get worse, but our specialists can easily install the right cabling or bracing to stop the small issue from becoming a big one. We'll explain what we're doing and provide a clear invoice for the materials and labor involved in the job.</p>
              <p>Don't wait too long to schedule a cabling or bracing job that could save a valuable tree – call Tree Service at 800-890-9432 today.</p>
             </div>
				  </div>
				</div>

        <div class="panel panel-primary">
          <div class="panel-heading" data-acc-link="service5"> <h3 class="panel-title"> <?php echo $service5; ?></h3></div>
          <div class="panel-body" data-acc-content="service5">
            <div class="service-desc">
              <p>While there may be many people in Montreal that can do basic tree-related tasks, only a certified arborist has the knowledge and experience needed to perform top level assessments. At Tree Service, we have on-staff arborists that have all the necessary qualifications and are licensed to provide arborist work, such as creating arborist reports.</p>
              <p>Most of our arborist work centers on tree removal and risk evaluation for your property and that of your neighbors, but there is much more that a certified arborist can do. Our team can evaluate sick trees and provide treatment recommendations that will bring it back to a healthy state. In addition, we can also deliver arborist reports for new construction sites.</p>
              <p>Whatever arborist work you need done in Montreal, you can expect the same detail-oriented, quality service from Tree Service. We're proud of our knowledge and ability and would be happy to evaluate the current state of your plans and any biotic or abiotic damage that they may have suffered.</p>
              <p>Call Tree Service at 800-890-9432 to set up a convenient time for our certified arborist to visit your property for an assessment.</p>
             </div>
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


          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php echo $service1; ?>" data-alt="Aidan Meyer" data-desc="">
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
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service5; ?> </span> </div>
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
        <p class="cta-desc">Conveniently located with service to the greater Montreal area, Tree Service is available for tree services of all shapes and sizes.</p>
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
      <div class="col-md-4 col-sm-5 contact-col cmap contact-info">
      <div class="address-box">
        <h3>Contact Info</h3>

        <!-- Address 1 -->
        <h5>Adress</h5>
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
          <li class="visa"> <img src="assets/img/paym_logo_2_visa.svg"> </li>
          <li class="mastercard"> <img src="assets/img/paym_logo_3_mastercard.svg"> </li>
          <li class="paypal"> <img src="assets/img/paym_logo_4_paypal.svg"> </li>
          <li class="discover"> <img src="assets/img/paym_logo_5_discover.svg"> </li>
          <li class="amexp"> <img src="assets/img/paym_logo_10_amexpress.svg"> </li>
          <li class=""> <img src="assets/img/paym_logo_7_D-club.png"> </li>
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
        </div>
      </div>
    </div>
  </div>
</div>
