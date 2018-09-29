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
          <h1 class="wow fadeInLeftBig"> <strong>Well-Known Locally for </strong>Tanning</h1>
          <div class="description wow fadeInLeftBig">
            <p>At Tanning, we only use state-of-the-art tanning machines and booths.All staff at our Montreal tanning salon are experts.Count on us for a golden tan you'll love and we'll deliver!</p>
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
         <h3 class="about-subheader">World Class Tanning Just Minutes Away</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">When it comes to tanning salons in Montreal, you have plenty of choices, from bargain basement shops with outdated equipment to so-called “luxury” salons that use the same beds as us but charge double the price or more. At Tanning, we offer top quality tanning solutions at reasonable prices – just ask our current clients.</p>
       <p>Being priced competitively and having the best equipment is only the start at Tanning. We've outfitted our Montreal tanning salon to be the most comfortable in the city and only hire service-forward staff. Every minute spent with us is a pleasure, never a pain.
       </p>
       <p> Our salon may make you feel like a million dollar, but you can rest assured that we're priced to meet a typical Montreal budget. All of our tanning services, such as bed tanning, stand tanning, sunless tanning and outdoor tanning are priced competitively and offer quite a bit more value than other local salons.
       </p>
       <p>
         Come see the Tanning difference today. Call 800-890-9432 to set up an appointment or drop by to meet the Montreal tanning team.
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
        <h3 class="service-subheader"> <strong>A Wide Range </strong>of Tanning   Services </h3>
        <p>All the tanning solutions you want at prices you can afford. Discover our primary tanning services by clicking through to the below.Reading about each of our service areas.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p>Choosing the right Montreal tanning salon can be more difficult than it looks. Contrary to popular belief, they're not all the same and a quick glance at our tanning equipment list will show we're light years ahead of the competition.
               </p>
                <p>Expert bed tanning in Montreal is all about experience, something Tanning has in spades. Providing top quality tans of all shades to our local clientele, we've built up a knowledge base of effective techniques and tools that few in the area can rival. Trust us with your skin and we'll make you look great.</p>
                 <p>To make sure that you're as comfortable as possible at our Montreal tanning salon, our inventory of flat tanning beds is second to none. If you're unsure of which one will provide the best results on an individual basis, a friendly Tanning associate will be happy to explain the pros and cons of each model. </p>
                 <p>Come to a Montreal tanning salon where your golden glow is within reach. Dial 800-890-9432 and choose Tanning.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>We understand that some people don't have time for regular trips to the tanning salon, some are afraid of tanning beds, and some are just looking for a temporary look. Our Montreal sunless tanning solves all these problems and more.
               </p>
               <p>As a revolutionary new service from Tanning, sunless tanning is achieved with a machine that spreads an even layer of a special solution across your face and body. Depending on the equipment chosen, your sunless tanning session can be over in mere minutes – not the hours needed for other methods.</p>
                <p>With sunless tanning gaining popularity in Montreal, it's important to choose a local tanning salon that knows what they're doing. Our sunless tanning technicians are experienced with the different types of tools and know just how to get that golden, homogenous look you're going for.</p>
                <p>In less than an hour from now, you could be tan! Call 800-890-9432 or drop by the Tanning tanning salon in Montreal today.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>When most people imagine a Montreal tanning salon, they picture the ubiquitous beds. While there are some benefits to using the traditional models, many of our customers are now choosing state-of-the-art upright, standing tanning booths.
               </p>
                <p>The biggest advantage to standing is clearly time. Instead of the 20-30 minutes that a usual bed tan can take, our upright tanning booths can cut your time spent tanning down to 10 minutes or less. For Tanning clients on the go, this gap in time can mean the difference between getting an indoor tan or not.</p>
                 <p>Upright tanning in Montreal also has a number of other improvements, not the least of which is simply a better tan. Because there are no pressure points in a stand tanning booth, the high-intensity lamps at Tanning have more of an opportunity to diffuse and create a more even appearance.</p>
                 <p>Check out Montreal upright tanning booths for yourself. Come to Tanning or call 800-890-9432 and we'll walk you through all the details.</p>


            </div>
      </div>


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>If you think that going to a salon for an outdoor tan might defeat the purpose, think again. Our outdoor tanning packages are an affordable way to get the natural tan you want in a relaxed and comfortable environment with others just like you.
               </p>
              <p>It's no secret that everybody wants a tan – the problem is only where to get it. At Tanning, we're a complete tanning provider, which includes outdoor as well as indoor options. In the case of the former, our inviting space is the hub for a community of locals that want to enjoy their time spent tanning.</p>
               <p>Equipped with comfortable chairs, beds, tables, and other furniture, Tanning also provides access to a wide range of SPF lotions, all from high-quality producers. In addition, our light refreshments are the perfect complement to a day spent in front of the Montreal sun.</p>
               <p>Instead of a quick indoor tan, savor every minute with our Montreal outdoor tanning space. Call Tanning at 800-890-9432 for openings and availability.</p>


            </div>
      </div>
     <!-- <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
             <div id="service5" class="collapse panel-body">
               <p>In this day and age, there's no excuse for using products and techniques that can be damaging to the local Montreal community. At First Class Cleaning , we're committed to green cleaning and are perfectly capable of delivering not only a property that shines but also one that minimizes the environmental impact of the cleaning process.</p>
               <p>Regardless of whether you need regular janitorial service or sporadic visits from our professional team, we have the green cleaning options to make sure that your Montreal home or business is doing its part without sacrificing cleanliness as a result. All of our standard janitorial services are available with green cleaning options.</p>
                <p>To deliver eco-friendly janitorial solutions, First Class Cleaning has established partnerships with several vendors that offer a wide range of cleaning supplies. In addition, each member of our team understands both the importance of green cleaning and the reasons why our clients demand a socially responsible answer to their cleaning needs. We're local to Montreal and want only the best for our neighbors and community.</p>
                <p>For green cleaning solutions that go the extra mile, call First Class Cleaning at 800-890-9432 to learn more about our environmentally friendly products and techniques.</p>


            </div>
      </div>



				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="demo1">
				   <p>If you’ve hired Montreal housekeeping businesses in the past only to be disappointed, then First Class Cleaning is the change you’re looking for. Specialized in top quality cleaning that goes above and beyond your average housekeeper, we’re a full service solution for both one-time visits and programmed cleaning schedules that keep your home looking immaculate.</p>
            <p>Ranging from standard sweeping and mopping to deep cleaning tasks such as baseboard washing, the First Class Cleaning team is capable of completing nearly any cleaning work your home might need. For other residential cleaning clients in Montreal, we've customized unique workflows that emphasize home sanitation and we're happy to do the same for you.</p>
             <p>Part of what makes us the best option for janitorial work in Montreal is our experienced cleaning team, every member of which is armed with a long service history as well as finely honed cleaning skills. To keep your home safe, secure, and clean, all of our employees have gone through a rigorous screening and training process that includes background checks and detailed cleaning technique instruction.</p>
             <p>With affordable prices and unmatched janitorial quality in Montreal, call 800-890-9432 to set up your next First Class Cleaning residential cleaning visit.</p>
				  </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo2">
				    <p>Whether you're running a small Montreal office or managing a large-scale industrial operation, the simple truth is that your business needs to be clean. It's no secret that a boost in the level of cleanliness can improve productivity, enhance employee morale, and even grow sales in retail environments. At First Class Cleaning , we specialize in delivering the kind of clean that helps your business succeed.</p>
            <p>For most of our commercial janitorial clients in Montreal, having a partner that is flexible with scheduling is of extreme importance. As such, our cleaning teams can mobilize on short notice and can also be scheduled to come during off-hours when the work we do won't interfere with your day to day business.</p>
             <p>At the heart of the First Class Cleaning commercial janitorial service is the simple understanding that there are no two Montreal businesses that have the same cleaning needs. For that reason, each of our clients receives personalized attention and a customized plan that attends to the specifics rather than a one-size-fits-all approach.</p>
             <p>When you contract First Class Cleaning for your commercial janitorial work, you're getting a professional company with exquisite services that deliver every time. Call us today at 800-890-9432.</p>

				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo3">
				   <p>Some Montreal contractors are notorious for the mess they leave after a construction project, but First Class Cleaning offers a perfect remedy for the disarray – professional janitorial services that are well-equipped to deal with construction sites ranging from new home builds to renovations and all points in between.</p>
            <p>The key to any successful post-construction cleanup in Montreal is being thorough and meticulous to remove all dirt and debris before the space is used again. At First Class Cleaning , we know that to truly achieve a clean state, your property will need tile scrubbing, deep vacuuming, light fixture dusting, and other tasks that get even the hardest to reach areas perfectly clean.</p>
             <p>Instead of trying to do it yourself, it's a better idea to call in the pros at First Class Cleaning . With experience that encompasses all types of construction projects, we'll know exactly what your location needs to start fresh with a completely clean slate.</p>
             <p>If you don't want to find drywall dust and wood shavings for months to come, choose First Class Cleaning as your Montreal post-construction cleanup provider. Call 800-890-9432 to speak to a member of our team.</p>
				   </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo4">
				    <h3 class="panel-title"><?php echo $service4; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo4">
				  	 <p>No matter how well you clean your Montreal home or business, dusty air ducts and vents can have you feeling like it's never enough. At First Class Cleaning , we're well aware of the fact that air quality inside local buildings can not only be worse than outside air but also a threat to your health. As a standalone service or part of a full janitorial solution, our air duct service will ensure optimal ventilation and cleanliness.</p>
            <p>More than just for health reasons, many of our janitorial customers in Montreal also find that a professional First Class Cleaning duct and vent cleaning job can have other benefits as well, with lowered monthly utility bills being a pleasant side effect for many. Because dust and debris can affect the efficiency of your heating or air conditioning, our cleaning service could actually save you money.</p>
             <p>To be the best air duct cleaning service provider in Montreal, we've invested heavily in having excellent staff and equipment. Whether it's a small condo or large office building, we'll use advanced cleaning techniques to remove as much of the dust as possible.</p>
             <p>Call First Class Cleaning at 800-890-9432 to learn more about our air duct cleaning services.</p>
				    </div>
				</div>

        <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?php echo $service5; ?></h3>
				  </div>
           <div class="panel-body" data-acc-content="demo5">
				    <p>In this day and age, there's no excuse for using products and techniques that can be damaging to the local Montreal community. At First Class Cleaning , we're committed to green cleaning and are perfectly capable of delivering not only a property that shines but also one that minimizes the environmental impact of the cleaning process.</p>
            <p>Regardless of whether you need regular janitorial service or sporadic visits from our professional team, we have the green cleaning options to make sure that your Montreal home or business is doing its part without sacrificing cleanliness as a result. All of our standard janitorial services are available with green cleaning options.</p>
             <p>To deliver eco-friendly janitorial solutions, First Class Cleaning has established partnerships with several vendors that offer a wide range of cleaning supplies. In addition, each member of our team understands both the importance of green cleaning and the reasons why our clients demand a socially responsible answer to their cleaning needs. We're local to Montreal and want only the best for our neighbors and community.</p>
             <p>For green cleaning solutions that go the extra mile, call First Class Cleaning at 800-890-9432 to learn more about our environmentally friendly products and techniques.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="Bed Tanning" data-alt="Bed Tanning" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Bed Tanning</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="Stand Tanning" data-alt="Stand Tanning" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Stand Tanning</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="Sunless Tanning" data-alt="Sunless Tanning" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Sunless Tanning</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Outdoor Tanning" data-alt="Outdoor Tanning" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">AIR Outdoor Tanning</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Bed Tanning" data-alt="Bed Tanning" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Bed Tanning </span> </div>
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
        <p class="cta-desc">our Gift Certificates,Loyalty Rates,Referral Discounts  promotional advantages
      and we will get back to you at our earliest convenience.
        </p>
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

        <!-- <h3>We Accept</h3>

        <ul id="paymentsMethods">
          <li class="cash"> <img src="assets/img/paym_logo_1_cash.svg"> </li>
          <li class="cheque"> <img src="assets/img/paym_logo_11_cheque.svg"> </li>
          <li class="visa"> <img src="assets/img/paym_logo_2_visa.svg"> </li>
          <li class="mastercard"> <img src="assets/img/paym_logo_3_mastercard.svg"> </li>
          <li class="paypal"> <img src="assets/img/paym_logo_4_paypal.svg"> </li>
          <li class="discover"> <img src="assets/img/paym_logo_5_discover.svg"> </li>
          <li class="amexp"> <img src="assets/img/paym_logo_10_amexpress.svg"> </li>
        </ul> -->

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
