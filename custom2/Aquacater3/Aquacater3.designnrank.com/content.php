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
              <li><span class="top-label"> <i class="fa fa-phone" aria-hidden="true"></i> </span> <a href="tel:{phone}"><?php echo $phone; ?></a></li>
              <li class="top-bar-email"><span class="top-label "> <i class="fa fa-envelope " aria-hidden="true"></i> </span> <a href="mailto:{companyEmail}"><?php echo $companyEmail;?></a></li>
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
      <div class="navbar-header"> <a class="navbar-brand" href="./"> <img src="assets/img/logo.svg" class="logo" alt="logo"> </a> <a href="./" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> Your Event.<strong> Our Food.</strong> A Perfect Experience</h1>
          <div class="description wow fadeInLeftBig">
            <p>Welcome to {companyName}! Serving up the best in local {city} catering and providing the kind of meals that make memories, we're the right choice for everything from luxury weddings to boardroom meetings to birthday parties for your children. Whatever the occasion, we have the food to fit.</p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="About">Learn more</a> </div>
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
         <h3 class="about-subheader"> A Superior Choice </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">Born out of a combined passion for tantalizing food and exquisite service, {companyName} has made dishing up amazing meals our business and we're proud to count a growing number of people in the {city} area as our valued customers.</p>
        <p class="about-us">To meet the discerning tastes of our local clients, we meld contemporary and classic cooking to create innovative dishes that are full of flavor and fashionable. When you choose {companyName}, you'll rest assured knowing that quality is never in question.</p>
        <p class="about-us">For your next event, call {phone} to wow your guests with an incredible {companyName} catering experience.</p>
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
        <h3 class="service-subheader"> Our<strong> Signature</strong> Services </h3>
        <p>{companyName} is a full-service catering provider designed to be a one-stop solution for every need. Learn more about what we do by clicking the service areas to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
             <div id="service1" class="collapse panel-body">
               <p> Whether it's a special breakfast, a cost-effective lunch solution for your employees, or an elegant in-house dinner, {companyName} has the catering services your {city} business needs. Featuring high quality ingredients and health-conscious options, our tasty meals are the right choice for grand openings, meetings, conferences, and much more.</p>
                <p>For many of our local {city} clients, {companyName} corporate catering has become an integral part of their day-to-day or special event operations. What these customers have found is that quality food always makes a difference, whether it's rewarding productive employees or simply providing mid-afternoon snacks.</p>
                 <p>{companyName} is a full-service catering company, complete with pick-up and delivery options to corporate locations. In addition, we can also customize individual packages that include a number of ancillary services, such as waitstaff for special events, linen and chafer rental, and professional cleaning after meals. Flexible and service-oriented, our {city} corporate catering is designed to scale with your firm's needs.</p>
                 <p>Don't settle for bland, flavorless food – call {companyName} at {phone} and get the gourmet dishes you and your business deserve.</p>
            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
             <div id="service2" class="collapse panel-body">
               <p>{city} weddings are tough enough without worrying about reception food, so call in {companyName} and we'll do all the heavy lifting to ensure your menu is perfect and everything goes off without a hitch. Proudly providing wedding catering to {city} and the surrounding area for years, we're happy to be part of the celebration.</p>
               <p>{companyName} is the perfect marriage of impressive culinary creations and unrivaled service. We'll start with a consultation to develop a menu uniquely suited to you and your guests, whether it be an outdoor barbecue complete with a roasted pig or a home wedding with more vegetarian options. When the important day arrives, our waitstaff will deliver a flawless service to keep your focus on the festivities at hand.           </p>
                <p>Being a full-service wedding caterer in {city} is obviously about the quality of our food, but it's also about being able to provide a complete solution. Our wedding packages are all done on a case-by-case basis and can be customized to include bar service, full dessert stations, and whatever else your heart desires.</p>
                <p>The elegance of an amazing {city} wedding doesn't stop with the dress. Call {phone} and {companyName} will make sure your meal matches the importance of the occasion.</p>


            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
             <div id="service3" class="collapse panel-body">
               <p>Whether it's a gala sweet sixteen or a dinner party at your {city} home, {companyName} is well-known in the local area as the premier catering provider for parties and events of all shapes and sizes. With an experienced and talented staff, we can adapt our tasty and contemporary creations to fit your party's theme or simply serve up the classics to keep your guests happy.</p>
                <p>For us at {companyName}, catering a party or event is an amazing way to be involved in the lives of our clients and we relish the opportunity and responsibility of heightening the experience with a delicious meal. Our cooking range is vast and we offer full tastings in advance to help you discover which of our dishes you'll enjoy the most.</p>
                 <p>Our {city} party catering service is focused on details and we'll go the extra mile to make sure everything is picture perfect. From wine pairings and professional waitstaff to furniture and serving equipment rental, we've got everything you need to ensure the food and drinks at your party exceed every expectation.</p>
                 <p>Call {companyName} at {phone} for more information about our party catering and to start developing your custom menu today.</p>


            </div>
      </div>


   <!--   <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php  $service4; ?> </h3>
             <div id="service4" class="collapse panel-body">
               <p>No matter how well you clean your {city} home or business, dusty air ducts and vents can have you feeling like it's never enough. At First Class Cleaning , we're well aware of the fact that air quality inside local buildings can not only be worse than outside air but also a threat to your health. As a standalone service or part of a full janitorial solution, our air duct service will ensure optimal ventilation and cleanliness.</p>
              <p>More than just for health reasons, many of our janitorial customers in {city} also find that a professional First Class Cleaning duct and vent cleaning job can have other benefits as well, with lowered monthly utility bills being a pleasant side effect for many. Because dust and debris can affect the efficiency of your heating or air conditioning, our cleaning service could actually save you money.</p>
               <p>To be the best air duct cleaning service provider in {city}, we've invested heavily in having excellent staff and equipment. Whether it's a small condo or large office building, we'll use advanced cleaning techniques to remove as much of the dust as possible.</p>
               <p>Call First Class Cleaning at {phone} to learn more about our air duct cleaning services.</p>


            </div>
      </div>
      <div class="panel panel-primary">
         <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
             <div id="service5" class="collapse panel-body">
               <p>In this day and age, there's no excuse for using products and techniques that can be damaging to the local {city} community. At First Class Cleaning , we're committed to green cleaning and are perfectly capable of delivering not only a property that shines but also one that minimizes the environmental impact of the cleaning process.</p>
               <p>Regardless of whether you need regular janitorial service or sporadic visits from our professional team, we have the green cleaning options to make sure that your {city} home or business is doing its part without sacrificing cleanliness as a result. All of our standard janitorial services are available with green cleaning options.</p>
                <p>To deliver eco-friendly janitorial solutions, First Class Cleaning has established partnerships with several vendors that offer a wide range of cleaning supplies. In addition, each member of our team understands both the importance of green cleaning and the reasons why our clients demand a socially responsible answer to their cleaning needs. We're local to {city} and want only the best for our neighbors and community.</p>
                <p>For green cleaning solutions that go the extra mile, call First Class Cleaning at {phone} to learn more about our environmentally friendly products and techniques.</p>


            </div>
      </div>



				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="demo1">
				   <p>If you’ve hired {city} housekeeping businesses in the past only to be disappointed, then First Class Cleaning is the change you’re looking for. Specialized in top quality cleaning that goes above and beyond your average housekeeper, we’re a full service solution for both one-time visits and programmed cleaning schedules that keep your home looking immaculate.</p>
            <p>Ranging from standard sweeping and mopping to deep cleaning tasks such as baseboard washing, the First Class Cleaning team is capable of completing nearly any cleaning work your home might need. For other residential cleaning clients in {city}, we've customized unique workflows that emphasize home sanitation and we're happy to do the same for you.</p>
             <p>Part of what makes us the best option for janitorial work in {city} is our experienced cleaning team, every member of which is armed with a long service history as well as finely honed cleaning skills. To keep your home safe, secure, and clean, all of our employees have gone through a rigorous screening and training process that includes background checks and detailed cleaning technique instruction.</p>
             <p>With affordable prices and unmatched janitorial quality in {city}, call {phone} to set up your next First Class Cleaning residential cleaning visit.</p>
				  </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo2">
				    <p>Whether you're running a small {city} office or managing a large-scale industrial operation, the simple truth is that your business needs to be clean. It's no secret that a boost in the level of cleanliness can improve productivity, enhance employee morale, and even grow sales in retail environments. At First Class Cleaning , we specialize in delivering the kind of clean that helps your business succeed.</p>
            <p>For most of our commercial janitorial clients in {city}, having a partner that is flexible with scheduling is of extreme importance. As such, our cleaning teams can mobilize on short notice and can also be scheduled to come during off-hours when the work we do won't interfere with your day to day business.</p>
             <p>At the heart of the First Class Cleaning commercial janitorial service is the simple understanding that there are no two {city} businesses that have the same cleaning needs. For that reason, each of our clients receives personalized attention and a customized plan that attends to the specifics rather than a one-size-fits-all approach.</p>
             <p>When you contract First Class Cleaning for your commercial janitorial work, you're getting a professional company with exquisite services that deliver every time. Call us today at {phone}.</p>

				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo3">
				   <p>Some {city} contractors are notorious for the mess they leave after a construction project, but First Class Cleaning offers a perfect remedy for the disarray – professional janitorial services that are well-equipped to deal with construction sites ranging from new home builds to renovations and all points in between.</p>
            <p>The key to any successful post-construction cleanup in {city} is being thorough and meticulous to remove all dirt and debris before the space is used again. At First Class Cleaning , we know that to truly achieve a clean state, your property will need tile scrubbing, deep vacuuming, light fixture dusting, and other tasks that get even the hardest to reach areas perfectly clean.</p>
             <p>Instead of trying to do it yourself, it's a better idea to call in the pros at First Class Cleaning . With experience that encompasses all types of construction projects, we'll know exactly what your location needs to start fresh with a completely clean slate.</p>
             <p>If you don't want to find drywall dust and wood shavings for months to come, choose First Class Cleaning as your {city} post-construction cleanup provider. Call {phone} to speak to a member of our team.</p>
				   </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo4">
				    <h3 class="panel-title"><?php echo $service4; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo4">
				  	 <p>No matter how well you clean your {city} home or business, dusty air ducts and vents can have you feeling like it's never enough. At First Class Cleaning , we're well aware of the fact that air quality inside local buildings can not only be worse than outside air but also a threat to your health. As a standalone service or part of a full janitorial solution, our air duct service will ensure optimal ventilation and cleanliness.</p>
            <p>More than just for health reasons, many of our janitorial customers in {city} also find that a professional First Class Cleaning duct and vent cleaning job can have other benefits as well, with lowered monthly utility bills being a pleasant side effect for many. Because dust and debris can affect the efficiency of your heating or air conditioning, our cleaning service could actually save you money.</p>
             <p>To be the best air duct cleaning service provider in {city}, we've invested heavily in having excellent staff and equipment. Whether it's a small condo or large office building, we'll use advanced cleaning techniques to remove as much of the dust as possible.</p>
             <p>Call First Class Cleaning at {phone} to learn more about our air duct cleaning services.</p>
				    </div>
				</div>

        <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?php echo $service5; ?></h3>
				  </div>
           <div class="panel-body" data-acc-content="demo5">
				    <p>In this day and age, there's no excuse for using products and techniques that can be damaging to the local {city} community. At First Class Cleaning , we're committed to green cleaning and are perfectly capable of delivering not only a property that shines but also one that minimizes the environmental impact of the cleaning process.</p>
            <p>Regardless of whether you need regular janitorial service or sporadic visits from our professional team, we have the green cleaning options to make sure that your {city} home or business is doing its part without sacrificing cleanliness as a result. All of our standard janitorial services are available with green cleaning options.</p>
             <p>To deliver eco-friendly janitorial solutions, First Class Cleaning has established partnerships with several vendors that offer a wide range of cleaning supplies. In addition, each member of our team understands both the importance of green cleaning and the reasons why our clients demand a socially responsible answer to their cleaning needs. We're local to {city} and want only the best for our neighbors and community.</p>
             <p>For green cleaning solutions that go the extra mile, call First Class Cleaning at {phone} to learn more about our environmentally friendly products and techniques.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services1.jpg" data-title="Corporate Catering" data-alt="Corporate Catering" data-desc="">
          <div> <img src="assets/img/gallery/services1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">

            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Corporate Catering</span> </div>
          </div>
          </a>


           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services2.jpg" data-title="Weddings" data-alt="Weddings" data-desc="">
          <div> <img src="assets/img/gallery/services2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Weddings</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/services3.jpg" data-title="Parties" data-alt="Parties" data-desc="">
          <div> <img src="assets/img/gallery/services3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Parties</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/faq.jpg" data-title="Wedding " data-alt="Receptions" data-desc="">
          <div> <img src="assets/img/gallery/faq_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Wedding</span> </div>
          </div>
          </a>

         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/contact.jpg" data-title="Parties " data-alt="Parties" data-desc="">
          <div> <img src="assets/img/gallery/contact_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Parties </span> </div>
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
        <p class="cta-desc">{companyName} is located in {city} and has provided corporate, wedding, and party catering for countless satisfied customers.</p>
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
