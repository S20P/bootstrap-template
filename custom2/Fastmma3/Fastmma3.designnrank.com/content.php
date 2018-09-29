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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_FitnessMartial_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig">Confidence. <strong> Balance. </strong> Self-protection.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Martial arts can mean many different things depending on who you ask. For some, it's exercise. For others, it's learning to protect yourself. For the team at {companyName}, it's a way of approaching the world with clarity, self-confidence, and control of your own body. Join us today.</p>
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
         <h3 class="about-subheader">Proudly leading superior martial arts classes for the community.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">Whether you're looking for a new way to stay in shape or interested to learn more about hand-to-hand combat, {companyName} in {city} has you covered. Designing our courses with you in mind, our primary goals are improving your confidence, physical fitness, and knowledge.</p>
        <p class="about-us">Based in {city} and with students from the surrounding area, {companyName} is well-versed in several different martial arts disciplines and knows how to create the right environment that is engaging and pushes you to further your own personal ability.</p>
        <p class="about-us">If you don't think martial arts is for you, then let {companyName} change your mind. Call {phone} to arrange a visit to our {city} location.</p>
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
        <h3 class="service-subheader"> <strong>Full Suite </strong> of Martial Arts Classes</h3>
        <p>Because the world of martial arts is quite varied, we have a diverse course offering that gives you plenty of choice for your preferred discipline. Learn more about individual styles to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services">
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>Designed to bridge the gap between strike-oriented and grappling disciplines, {companyName} mixed martial arts classes are an exciting trend in the {city} area. Popularized by professional competition, mixed martial arts, or MMA, has taken the world by storm and for good reason – the balance between different forms of martial arts is the perfect approach to well-rounded combat skills.</p>
               <p>While MMA may be best known due to widespread television coverage, the truth is that you don't have to be competitive-minded to benefit from what mixed martial arts in {city} has to offer. Taking classes from {companyName} means that you'll receive incredible instruction and have engaging training sessions to keep you in peak condition.</p>
               <p>What mixed martial arts training from {companyName} aims to teach is the confidence, knowledge, and discipline to be in control of your body. In addition, our sessions are a great way to get rid of stress and learn how to react calmly when put in high-stress situations – both valuable skills both inside our classroom and outside in the {city} real world.</p>
               <p>Visit our {city} location and talk to a {companyName} pro to learn how mixed martial arts can work for you. Call us at {phone} to set up a visit.</p>
              </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
              <p>Kickboxing as a formal sport only came into being in the 1960s and 1970s, but individual kickboxing styles have been around for centuries. If you want top level kickboxing instruction in {city}, then {companyName} has the history and experience to take you from beginning punches and kicks to your first official fight.</p>
              <p>Of course, kickboxing in {city} is not only about fights – {companyName} is also happy to provide more relaxed classes that aim more at the increased fitness and physique gains that kickboxing can provide. In all classes, our team will work hard to make sure you receive the lessons you need to improve your kickboxing knowledge and perfect your technique.</p>
              <p>Whether you're looking to learn kickboxing as a way to compete in national and {city} events or you just want some structure to your fitness workouts, {companyName} invites you to our impressive facility to check out our classes and personally meet our instructors. From there, we'll help you find the right individual or group classes to fit your existing schedule.</p>
              <p>Step into kickboxing with expert training by {city}'s best. Call {phone} to speak with a member of the {companyName} team.</p>
              </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
                 <p>It may be one of the oldest martial arts forms, with a history dating back more than 500 years, but Muay Thai has enjoyed a Renaissance in {city}. As more and more people flock to learn the secrets of Muay Thai, {companyName} is proud to be the most knowledgeable gym in the local area with instructors that have years of Muay Thai experience under their belts.</p>
                 <p>Often compared to the modern sport of kickboxing, Muay Thai is actually quite different, with the latter having a much wider range of accepted attacking methods, including use of the knees and elbows. At {companyName} Muay Thai classes in {city}, we stick to formal study, focusing on the complete discipline, which includes striking as well as grappling.</p>
                 <p>While Muay Thai training in {city} does come with an obvious boost in self-confidence, the real benefits of {companyName} classes may not be so visible. More than many martial arts disciplines, Muay Thai encourages a heightened sense of balance as well as flexibility and muscle development, which can be seen in all students that train with us.</p>
                 <p>Call {phone} for Muay Thai training in {city} with the experts at {companyName}.</p>
             </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>It's not likely that you go out looking for trouble in {city}, but that doesn't mean trouble won't find you. In these cases, the expert self-defense instruction from {companyName} will ensure you have the preparation to defuse the situation and avoid injury. Our self-defense classes have a simple aim – give you the knowledge and ability you need to prevail when attacked.</p>
               <p>While the goal of our self-defense classes in {city} may be serious, {companyName} wants our training environment to be friendly and open to both long-term students and new learners. With that in mind, we encourage interaction, engagement, and talking to learn more about the martial arts techniques we teach and how they can be of benefit to you.</p>
               <p>In an ideal world, you'll never need to use the abilities you've learned with {companyName}, but we know that ideal doesn't always match up with reality. However, with our help, you'll have the confidence and physical skills needed to evade potentially dangerous situations in {city}.</p>
               <p>{companyName} self-defense instruction in {city} are open to students of all ages and ability levels. Dial {phone} for more info about our self-defense classes.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
             <div id="service5" class="collapse panel-body">
               <p>As one of the more interesting forms of martial arts in {city}, Brazilian jiu-jitsu is a great way to start exploring hand-to-hand combat. Rather than teaching how to punch or kick, {companyName} jiu-jitsu classes focus on learning both the essential mindset and impeccable techniques that make the discipline truly a force to be reckoned with.</p>
               <p>Whereas most martial arts in {city} focus on strikes, Brazilian jiu-jitsu is designed to give the person with the most developed technique the upper hand. Being armed with knowledge is what matters and {companyName} classes will teach you every detail that you need to know. Understanding this core concept and the real, “gentle art” meaning of the discipline are part of all the sessions we lead.</p>
               <p>In addition to its physical aspects, Brazilian jiu-jitsu classes at {companyName} also have a mental and philosophical side. A large part of being an expert jiu-jitsu practitioner in {city} is an ability to stay calm and make optimal attacking and blocking decisions at all times. Our experienced instructors will make sure you get a well-rounded jiu-jitsu education.</p>
               <p>To learn more about Brazilian jiu-jitsu and {companyName} classes in {city}, simply give us a call at {phone}.</p>
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

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.png" data-title="Striking" data-alt="Striking" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="Striking" alt="<?php echo $service3;?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Striking</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Self Defence" data-alt="Self Defence" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="Self Defence" alt="Self Defence">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Self Defence</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Classes " data-alt="Classes" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Classes" alt="Classes">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Classes </span> </div>
          </div>
          </a>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- Schedule Section -->
<div class="features-container  section-container about-container" id="schedule">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>Our Schedule</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader"></h3>
         <p class="about-us">Exercising with others is the perfect motivation to take your personal fitness to the next level. Explore our class selection, complete with positive instructors ready to help you get the most from every training session.
         </p>
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
                 <h5>17h30 – 18h30</h5>
                 <h4 class="its-col-heading">BEGINNER</h4>
                 <p class="its-visible">7 year and up</p>
                 <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">INTERMEDIATE-2</h4>
                 <div>
                 <h5>19h30 – 20h30</h5>
                 <h4 class="its-col-heading">CARDIO &amp; FIGHTING</h4>
                 <p class="its-visible">13 year and up</p>
                 <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
                </div>
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
             <h5>18h30-19h30</h5>
             <h4 class="its-col-heading">INTERMEDIATE-1</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>19h30-20h30</h5>
             <h4 class="its-col-heading">ADVANCED-2</h4>
             <p class="its-visible">11 year and up</p>
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
             <div>
             <h5>17h30-18h30</h5>
             <h4 class="its-col-heading">4-6 YEAR OLD</h4>
             <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
             </div>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>18h30-19h30</h5>
             <h4 class="its-col-heading">INTERMEDIATE-1</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>19h30-20h30</h5>
             <h4 class="its-col-heading">ADVANCED-1</h4>
             <p class="its-visible">10 year and up</p>
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
               <h5>17h30-18h30</h5>
               <h4 class="its-col-heading">BEGINNER</h4>
               <p class="its-visible">7 year and up</p>
               <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>18h30-19h30</h5>
               <h4 class="its-col-heading">INTERMEDIATE-2</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>19h30-20h30</h5>
               <h4 class="its-col-heading">CARDIO &amp; FIGHTING</h4>
               <p class="its-visible">13 year and up</p>
               <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
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
               <h5>17h30-18h30</h5>
               <h4 class="its-col-heading">INTERMEDIATE-1</h4>
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
               <div>
               <h5>9h00-10h00</h5>
               <h4 class="its-col-heading">4-6 YEAR OLD</h4>
               <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
               </div>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>10h00-11h00</h5>
               <h4 class="its-col-heading">BEGINNER</h4>
               <p class="its-visible">7 year and up</p>
               <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>11h00-12h00</h5>
               <h4 class="its-col-heading">INTERMEDIATE-1</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <div>
               <h5>12h00-13h00</h5>
               <h4 class="its-col-heading">INTERMEDIATE-2</h4>
               </div>
               </li>
           </ul>
         </div>
  </div>
       <!-- Sunday -->
  <div class="panel panel-primary">
     <h2 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#sunday" id="panel_open_close">  Sunday </h2>
         <div id="sunday" class="collapse ">
           <ul class="list-group">
             <li class="list-group-item its-col its-col-details">
                 <h5>17h30 – 18h30</h5>
                 <h4 class="its-col-heading">BEGINNER</h4>
                 <p class="its-visible">7 year and up</p>
                 <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">INTERMEDIATE-2</h4>
                 <div>
                 <h5>19h30 – 20h30</h5>
                 <h4 class="its-col-heading">CARDIO &amp; FIGHTING</h4>
                 <p class="its-visible">13 year and up</p>
                 <p class="its-visible">TRIAL CLASS <b style="color: #ee3227;">*</b></p>
                </div>
           </li>
           </ul>
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
        <h2 class="wow fadeInUp cta">Get Started Today!</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <!-- <p class="cta-desc">As an established martial arts instruction team in {city}, {companyName} has helped countless residents learn a wide variety of styles.</p> -->
        <table class="table table-bordered table-responsive visible-sm-block visible-md-block visible-lg-block  pricing_table" id="pricing_table">
           <thead>
           <tr class="pricing_thead_tr">
           <th>8 classes</th>
           <th>12 classes</th>
           <th>Unlimited</th>
           <th>Kids Classes</th>
           </tr>
           </thead>
           <tbody class="pricing_body">
           <tr>
               <td>
                 <span class="price">
                   <span class="dollar_sign">$</span>
                   <span class="price_value">150</span>
                   <span class="price_frequency">/Month</span>
                 </span>
               </td>
                <td>
                  <span class="price">
                    <span class="dollar_sign">$</span>
                    <span class="price_value">175</span>
                    <span class="price_frequency">/Month</span>
                  </span>
               </td>
               <td>
                 <span class="price">
                   <span class="dollar_sign">$</span>
                   <span class="price_value">200</span>
                   <span class="price_frequency">/Month</span>
                 </span>
               </td>
               <td>
                 <span class="price">
                   <span class="dollar_sign">$</span>
                   <span class="price_value">150</span>
                   <span class="price_frequency">/Month</span>
                 </span>
               </td>
           </tr>
           <tr>
               <td>
                 <ul class="price_content">
                   <li>8 classes per month, per your schedule.</li>
                 </ul>
               </td>
               <td>
                 <ul class="price_content">
                   <li>12 classes per month, per your schedule.</li>
                 </ul>
               </td>
               <td>
                 <ul class="price_content">
                   <li>Unlimited classes per month.</li>
                 </ul>
               </td>
               <td>
                 <ul class="price_content">
                   <li>Unlimited classes per month.</li>
                 </ul>
               </td>
           </tr>
         </tbody>
       </table>
       <div class="panel-group its-schedule  visible-xs-block" id="res_panel_group_tb">
      <div class="panel panel-default"  id="price_res_panel">

          <div class="panel-heading its-col-header" id="price_res_panel_head">
           <h2 class="panel-title its-col-header its-col-details" id="price_res_panel_title">
             8 classes
           </h2>
         </div>

        <div class="panel-collapse">
        <ul class="list-group price_content_panel">
            <li class="list-group-item its-col its-col-details">
              <span class="price">
                <span class="dollar_sign">$</span>
                <span class="price_value">150</span>
                <span class="price_frequency">/Month</span>
              </span>
            </li>
            <li class="list-group-item its-col its-col-details">
              8 classes per month, per your schedule.
            </li>
        </ul>
        </div>


          <div class="panel-heading its-col-header" id="price_res_panel_head">
           <h2 class="panel-title its-col-header its-col-details" id="price_res_panel_title">
             12 classes
           </h2>
         </div>

        <div  class="panel-collapse">
        <ul class="list-group price_content_panel">
            <li class="list-group-item its-col its-col-details">
              <span class="price">
                <span class="dollar_sign">$</span>
                <span class="price_value">175</span>
                <span class="price_frequency">/Month</span>
              </span>
            </li>
            <li class="list-group-item its-col its-col-details">
              12 classes per month, per your schedule.
            </li>
        </ul>
        </div>


          <div class="panel-heading its-col-header" id="price_res_panel_head">
           <h2 class="panel-title its-col-header its-col-details" id="price_res_panel_title">
          Unlimited
           </h2>
         </div>

        <div  class="panel-collapse">
        <ul class="list-group price_content_panel">
            <li class="list-group-item its-col its-col-details">
              <span class="price">
                <span class="dollar_sign">$</span>
                <span class="price_value">200</span>
                <span class="price_frequency">/Month</span>
              </span>
            </li>
            <li class="list-group-item its-col its-col-details">
              Unlimited classes per month…
            </li>
        </ul>
        </div>


          <div class="panel-heading its-col-header" id="price_res_panel_head">
           <h2 class="panel-title its-col-header its-col-details" id="price_res_panel_title">
             Kids Classes
           </h2>
         </div>

        <div  class="panel-collapse">
        <ul class="list-group price_content_panel">
            <li class="list-group-item its-col its-col-details">
              <span class="price">
                <span class="dollar_sign">$</span>
                <span class="price_value">150</span>
                <span class="price_frequency">/Month</span>
              </span>
            </li>
            <li class="list-group-item its-col its-col-details">
              Unlimited classes per month…
            </li>
        </ul>
        </div>
      </div>
      </div>
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
   <h3>Hours </h3>
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
