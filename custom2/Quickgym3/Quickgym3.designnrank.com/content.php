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
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel:{phone}"><?php echo $phone; ?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Classes</a></li>
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
          <h1 class="wow fadeInLeftBig"> <strong>Be </strong>an inspiration</h1>
          <div class="description wow fadeInLeftBig">
            <p>With {companyName}, you have a local fitness center that's built around you – your fitness needs, your special programs, and a social community that will help push you to your exercise goals. Whether you want strength training or high-energy cardio, our equipment and programs will take you there.</p>
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
         <h3 class="about-subheader">{city}'s Top Fitness Center</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">For the best in {city} personal fitness, there's no better choice than {companyName}. With a commitment to your personal health that goes above and beyond other local gyms, we've made it a point to be THE place to go when you want real results you can see.</p>
        <p class="about-us">The {companyName} facility was designed to meet the needs of everyone, from weightlifters working to increase their ability and muscle tone to those simply looking for a relaxing place for daily or weekly yoga sessions.</p>
        <p class="about-us">Come join a {city} fitness center that finally gets it right. Call {companyName} at {phone} to arrange a free tour of our facilities.</p>
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
        <h3 class="service-subheader"> <strong>Comprehensive  </strong>Fitness Options </h3>
        <p>From advanced weightlifting machines to the area's best yoga instructors, we're all about giving you the right choices. Click through our primary exercise and training areas to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>On your own, the limits of your physical fitness routine can be perfectly clear. Without knowing the science and methods behind advanced training, your development can stall and lead to feelings of frustration. Fortunately, {companyName} is {city}'s best fitness center and has an unrivaled team of personal trainers to elevate your workout experience.</p>
                <p>All personal training programs start with matching your fitness needs with one of the established {companyName} trainers. From there, an initial assessment will inform your customized workout plan and you'll be on your way to new heights in your personal exercise development. Trust our trainers and watch your potential soar.</p>
                 <p>While many people in {city} imagine that a personal trainer is very expensive, our offers are oriented to fit in your budget, especially when time involved is considered. Because a personal training session is focused and more intense, you're getting more bang for your buck and could be saving many hours at the gym while still getting better results.</p>
                 <p>Find out if a {companyName} personal trainer is right for you by calling our {city} fitness center at {phone}.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>If you're concentrating on strength training in {city}, then {companyName} is the place to be. In developing our fitness center, we decided to make weightlifting a central focus and invested heavily in state of the art equipment that's ahead of others in town. Our pain is your gain and you'll quickly see why so many strength training enthusiasts come to {companyName} to work out.</p>
               <p>While the advanced strength training equipment at {companyName} was clearly a big draw, the community we've worked hard to develop has also played a major role in our success. Unlike other fitness centers in {city}, our community is very inclusive and many people have formed tight bonds that help them excel in their daily and weekly visits to the gym.</p>
                <p>Whether you're just getting started with strength training or have been at it for years, the atmosphere and equipment at {companyName} will make your journey as smooth as possible. Stop by to check out our {city} location and we'll be happy to give a free tour and show off our impressive strength training facility.</p>
                <p>To learn more about strength training and {companyName} membership plans, call our {city} location at {phone}.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>Finding a top notch cardio program in {city} can be difficult, but not if you look towards {companyName}. At our impressive fitness center, we have a full range of both solo cardio equipment as well as specialized programs built to push your exercise forward to the next level with motivating instruction and an intense atmosphere.</p>
                <p>At the center of {companyName} cardio program offerings are our Spinning classes, which utilize stationary bicycles, great instructors, and high pace music to deliver an unparalleled workout opportunity. Generally lasting between 30 minutes and an hour, Spinning classes in {city} are the perfect choice for those who want a high-cardio, low-impact atmosphere.</p>
                 <p>In addition to Spinning, {companyName} also has other, more traditional aerobic exercise programs available with instructors. As cardio programs work to increase your heart rate, they are an excellent option for long term weight loss, extending the length of your workout sessions, and developing increased muscle movement and flexibility.</p>
                 <p>When you're ready for a cardio challenge, call {companyName} at {phone} to learn more about our Spinning classes in {city}</p>


            </div>
      </div>


     <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>While yoga in {city} is a relatively new phenomenon, the actual practice dates back thousands of years and has been the centerpiece in the personal fitness routine of countless people. Encouraging introspection and inner motivation, our space at {companyName} has been designed specifically for the yoga programs that take at our facility.</p>
              <p>Combined with our expressive yoga space, {companyName} has also made it a point to hire only the best yoga instructors available in {city}. Each member of our team is engaging and positive, providing the perfect counterpoint to your own journey towards self-discovery. Focused on different yoga styles, we invite you to interact with all our instructors to find one that matches your personal preferences.</p>
               <p>The majority of our yoga programs at {companyName} are conducted in a group setting and available to those with a valid membership. As many have discovered, practicing yoga in a group is an excellent balance of personal work in a community setting. For that reason, most of our customers graduate and stick together to attend more advanced yoga classes.</p>
               <p>Call {phone} to learn more about the yoga programs in {city} offered by {companyName}.</p>


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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services1.jpg" data-title=" Personal Training " data-alt=" Personal Training " data-desc="">
          <div> <img src="assets/img/gallery/services1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> Personal Training </span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services2.jpg" data-title="Strength Training" data-alt="Strength Training" data-desc="">
          <div> <img src="assets/img/gallery/services2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Strength Training</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services3.jpg" data-title=" Cardio Program " data-alt=" Cardio Program " data-desc="">
          <div> <img src="assets/img/gallery/services3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> Cardio Program </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services4.jpg" data-title="Yoga " data-alt=" Yoga " data-desc="">
          <div> <img src="assets/img/gallery/services4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">  Yoga </span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services5.jpg" data-title="Personal training" data-alt="Personal training" data-desc="">
          <div> <img src="assets/img/gallery/services5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> Personal training</span> </div>
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
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">INTERMEDIATE-2</h4>
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
             <h5>18h30-19h30</h5>
             <h4 class="its-col-heading">INTERMEDIATE-1</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>19h30-20h30</h5>
             <h4 class="its-col-heading">ADVANCED-1</h4>
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
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>18h30-19h30</h5>
               <h4 class="its-col-heading">INTERMEDIATE-2</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>19h30-20h30</h5>
               <h4 class="its-col-heading">CARDIO</h4>
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
               <h5>10h00-11h00</h5>
               <h4 class="its-col-heading">BEGINNER</h4>
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
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">INTERMEDIATE-2</h4>

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
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Get Started Today!</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <!-- <p class="cta-desc">The {companyName} fitness center operates in {city} and draws customers concerned about personal fitness from the surrounding area.</p> -->
        <table class="table table-bordered table-responsive visible-sm-block visible-md-block visible-lg-block  pricing_table" id="pricing_table">
           <thead>
           <tr class="pricing_thead_tr">
           <th>8 Private Classes</th>
           <th>12 Private Classes</th>
           <th>Unlimited</th>
           <th>Membership</th>
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
                   <span class="price_value">50</span>
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
                   <li>Unlimited access.</li>
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
   <h3> Hours </h3>
          </div>
          <div class="wh-desc">
            <h5> {workingHours}</h5>
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

    </div>
  </div>
</div>
