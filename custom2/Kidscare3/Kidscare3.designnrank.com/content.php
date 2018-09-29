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
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto:{companyEmail}"> <?php echo $companyEmail;?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_GenericChildrenCare_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Classes</a></li>
          <li><a class="scroll-link" href="#gallery">Gallery</a></li>
          <!-- <li><a class="scroll-link" href="#schedule">Schedule</a></li> -->
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
          <h1 class="wow fadeInLeftBig">Taking<strong> the Beginning Steps Together </strong>for {city}'s Future</h1>
          <div class="description wow fadeInLeftBig">
            <p>At {company}, we know that there's a vast difference between a large-scale daycare operation and a small, personal, and immersive {city} daycare culture. With less children per group than our rivals, an environment that's tailored to our children's needs, and a flexible schedule that doesn't need to conform to a national company directive, we certainly fall into the latter category.</p>
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
         <h3 class="about-subheader">From infancy to the first day of school, our daycare options are comprehensive.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">As a small business in {city}, {companyName} has only ever had a single goal, to make sure that the children of our community are prepared for the road that lies ahead. To meet this daunting task, we've developed a daycare center and team that are light years ahead of the competition.</p>
        <p class="about-us">Every step of the way, your child will receive our all-around approach to daycare, which mixes social interaction, physical play time, and personal development in equal parts with traditional learning</p>
        <p class="about-us">By providing a comprehensive education, we're able to help those in our care progress rapidlyand be ready when it's time to start attending school.</p>
        <p class="about-us">To get started with a {city} taxation services firm that understands what you need, give {companyName} a call at 800-890-9432.</p>
      </div>
    </div>
  </div>
</div>
<!-- Service -->
<div class="service-container section-container section-container-gray-bg" id="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 more-features section-description wow fadeIn">
        <h2>Our Classes</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> Every Detail is <strong> Designed </strong> With Your Child in Mind</h3>
        <p>We're proud to be a vital part of {city}'s past, present, and future. </p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services">
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
                   <p>Our daycare programs in {city} utilize a holistic approach designed to treat your infant as an individual. From being flexible about nap and eating times to adapting on the fly to their needs, you'll know that your baby is receiving high quality care.</p>
                   <p>Unlike older children that can easily be assimilated into a single schedule, infants require constant attention and an ever-evolving daycare program. As such, the {companyName} solution puts a high emphasis on following your child's progress and gradually adjusting their schedule as needed to incorporate more or less time with other infants as needed.</p>
                   <p>Because this style of infant daycare in {city} can be difficult to achieve, {companyName} hires only the best local staff and each member of our team has received excellent training to reach the high standards of care that have become our hallmark.</p>
                   <p>To find out more about our {city} infant daycare options, simply call {companyName} at 800-890-9432.</p>
                </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>As your toddler grows older and spends more time interacting with others in {city}, {companyName} will be there to help guide their development, encourage positive social habits, and teach them the basics of independent thought.</p>
               <p>The years spent as a toddler in {city} will be some of the most important and formative of your child's life. For exactly that reason, {companyName} wants to help by ensuring that their journey into exploring the world around them is complete with professional chaperones that make sure they're both given the freedom to learn as well as the resources needed to excel.</p>
               <p>Our space at {companyName} has been designed with your toddler in mind. Sharp edges are nonexistent and shelving is reachable for even the littlest of arms.At our innovative {city} facility, your toddler will be able to explore and learn to their heart's content.</p>
               <p>To schedule a visit or enroll your toddler into one of our {city} daycare programs, contact {companyName} by email or phone at 800-890-9432.</p>
              </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>It may sound simple, but before starting school, any child can benefit from learning how to learn. With {city} pre-school daycare by {companyName}, your child will be well prepared for the structure, social life, and learning opportunities of school.</p>
               <p>While some {city} pre-school programs offer rigid instruction, {companyName} prefers to create a dynamic environment where behavior and social interaction matter just as much as letters and numbers. Your child's care provider will take the time to respond to all questions fully and deeply rather than only giving superficial answers.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>when your child enters Kindergarten, they'll face challenges of every stripe and color, from learning obstacles to new social situations. With our small class size and superior instructors, we'll help your young one turn these challenges into success stories.</p>
               <p>All of our Kindergarten programs in focus on developing a core knowledge set that will not only aid your child in their first years of elementary school, but also give them the boost they need to truly excel. From learning the basics of math and writing to gaining a new appreciation of music, the well-rounded {companyName} approach will cover all bases.</p>
               <p>In addition to beginning academics, the {companyName} Kindergarten program in {city} also addresses social issues as well. Providing opportunities to accept responsibility, learn healthy habits, and interact positively to all types of children, we're certain your child will be ready for their new experiences at school.</p>
               <p>Find out more about {companyName} starting dates and age requirements by calling our {city} location at 800-890-9432.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php echo $service1;?>" data-alt="<?php echo $service1;?>" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="<?php echo $service1;?>" alt="<?php echo $service1;?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1;?></span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2;?>" data-alt="<?php echo $service2;?>" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2;?>" alt="<?php echo $service2;?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2;?></span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3;?>" data-alt="<?php echo $service3;?>" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service3;?>" alt="<?php echo $service3;?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3;?></span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service3;?> " data-alt="<?php echo $service3;?>" data-desc="">
           <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service3;?>" alt="<?php echo $service3;?>">
             <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3;?> </span> </div>
           </div>
           </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service4;?>" data-alt="<?php echo $service4;?>" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service4;?>" alt="<?php echo $service4;?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service4;?></span> </div>
          </div>
          </a>

          </div>
      </div>
    </div>
  </div>
</div>

<!-- Schedule Section -->
<div class="features-container section-container about-container" id="schedule">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>Our Schedule</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
       <h3 class="service-subheader"> <strong>Daycare </strong> Learning Schedule</h3>
        <p class="about-us">We provide all our learning schedules of our Daycare so that parents are aware of what their children are doing and learning. </p>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-10 col-sm-offset-1">
       <div class="services">
    <!-- Monday -->
     <div class="panel panel-primary">
         <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#monday" id="panel_open_close"> Monday </h2>
         <div id="monday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
    <!-- Tuesday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#tuesday" id="panel_open_close">  Tuesday </h2>
         <div id="tuesday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
    <!-- Wednesday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#Wednesday" id="panel_open_close">  Wednesday </h2>
         <div id="Wednesday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
    <!-- Thursday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#thursday" id="panel_open_close">  Thursday </h2>
         <div id="thursday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
    <!-- Friday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#friday" id="panel_open_close">  Friday </h2>
         <div id="friday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
    <!-- Saturday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#saturday" id="panel_open_close">  Saturday </h2>
         <div id="saturday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>7:00 - 7:30 AM</h5>
                 <h4 class="its-col-heading">Doors Open / Breakfast </h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>8:30 AM</h5>
                 <h4 class="its-col-heading">Circle Time / Free Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>9:30 AM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>11:30 AM</h5>
                 <h4 class="its-col-heading">Lunch</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>12:00 PM</h5>
                 <h4 class="its-col-heading">Nap</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:00 PM</h5>
                 <h4 class="its-col-heading">Wake Up</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>2:30 PM</h5>
                 <h4 class="its-col-heading">Snack</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>3:00 PM</h5>
                 <h4 class="its-col-heading">Outside Play / Centre Play</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:00 PM</h5>
                 <h4 class="its-col-heading">Clean Up & Home Time Prep</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
                 <h5>5:30 PM</h5>
                 <h4 class="its-col-heading">Home Time</h4>
             </li>
           </ul>
         </div>
  </div>
       <!-- Sunday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#sunday" id="panel_open_close">  Sunday - Closed </h2>
         <!-- <div id="sunday" class="collapse ">
           <ul class="list-group">

           </ul>
         </div> -->
  </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- CTA section -->
<div class="call-to-action-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description  wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Call us on</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
         <p class="cta-desc">Our attendants are ready for any inquiries you might have. Give us a call and we will be able to assist you.</p>
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
            <h3><?php  echo $emergency; ?></h3>
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

          <!-- Address 2 -->
        <!--<h5>Adress 2</h5>
        <p><i class="fa fa-map-marker"></i> <?php echo $address2." ".$city2." ".$state2." ".$country2; ?></p>
        <p><i class="fa fa-phone"></i><?php echo $phone2; ?></p>
        <p><i class="fa fa-envelope"></i><a href="mailto:<?php echo $companyEmail2; ?>"><?php echo $companyEmail2; ?></a></p>-->



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
