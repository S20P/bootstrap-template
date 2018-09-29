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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_Flooring_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
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
          <h1 class="wow fadeInLeftBig"> <strong>High-end Styles. </strong>Top level Installations.</h1>
          <div class="description wow fadeInLeftBig">
            <p>From laminate to marble and vinyl to hardwood, flooring is an integral part of any property in Montreal. Pick Elite Floor for all your flooring needs and experience the unique blend of technical ability, customer service, and affordable prices that make us a winning choice.</p>
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
         <h3 class="about-subheader">Proudly providing flooring services that improve your property.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">To stay at the top of Montreal's fast-moving flooring industry, Elite Floor is an agile business that embraces classic materials like hardwood and marble while also keeping up with new emerging trends to provide a full-featured flooring solution for our local customers.</p>
        <p class="about-us">At Elite Floor, our commitment is on quality and we're happy to show off previously completed projects in Montreal, ranging from one-room residential hardwood installs to full design-build solutions for commercial flooring projects.</p>
        <p class="about-us">Big and small, we've got what it takes to turn your Montreal flooring into a success. Call Elite Floor at 800-890-9432 today!</p>
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
        <h3 class="service-subheader"> <strong>Comprehensive Range  </strong>of Services</h3>
        <p>Floors come in all different types and needs. At Elite Floor, we can handle them all. Check out our flooring service areas by clicking to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="services ">


      <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
              <div id="service1" class="collapse panel-body">
                <p>In an ideal world, nobody will ever notice the installation of your flooring. Quietly blending into the background, the details of a perfect floor installation are meant to be hidden, whether it's carpet, hardwood, tiles, or another material. At Elite Floor, we're proud to be the area's best at providing immaculate installations whose details are never seen..</p>
                 <p>Regardless of if you prefer vinyl or parquet, Elite Floor will approach each job with the same level of care that leads to a great install. During the planning phase, we'll take accurate measurements and give you an accurate quote for the costs to avoid unpleasant surprises like running out of material or hidden charges at the end of the job.</p>
                  <p>What you'll quickly see with a flooring installation by Elite Floor is the customer service we bring to the table. Like you, we're local to Montreal and doing a poor job is simply not an option. Our reputation for quality flooring installation is what keeps us in business and why we strive to be the best every time we lay down laminate, wooden planks, or any other flooring type.</p>
                  <p>To discuss the different types of flooring installations available in Montreal, dial 800-890-9432 to speak to a Elite Floor expert.</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
              <div id="service2" class="collapse panel-body">
                <p>Always classic and always stylish, there's just something special about a Montreal property with marble floors. However, what you might not know is that while marble is a highly durable material and a striking choice for appearance, it comes with its own set of maintenance and cleaning problems.</p>
                <p>The most common issue with marble is that it often fades over time without a professional cleaning and polish. At Elite Floor, we have a variety of services specifically designed to prevent this from happening and we can customize our polishing technique to include a matte, semi-gloss, or gloss finish depending on your personal preferences.</p>
                 <p>Routine cleanings and polish jobs will keep your marble, granite or travertine looking great, but Elite Floor also has a solution for when damage like chips or broken blocks occur. Not only do we have access to a large inventory of marble and stone that could make a match possible, but we're also experienced in restoration and can often bring a seemingly lost piece of marble back from the brink.</p>
                 <p>Call Elite Floor for exquisite marble services at 800-890-9432 and draw a crowd with your attractive floors.</p>

             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
              <div id="service3" class="collapse panel-body">
                <p>If you've ever seen a hardwood floor installation in a Montreal home, then you know the huge difference it can make in terms of appearance. At the same time, heat, humidity, and even the normal settling of a property can wreak havoc on hardwood floors, causing warps, unlevel surfaces, and even cracks and splits. For all these problems, Elite Floor is here.</p>
                 <p>Designed to be the absolute best hardwood specialists in Montreal, Elite Floor hires only the most experienced and talented cleaners, polishers, and repairman. Whether it's a simple annoying squeak that needs to disappear or full sanding and polishing job, we're here to make it happen and bring your hardwood floors up to their true potential.</p>
                  <p>When taken care of, hardwood flooring in a Montreal property can easily last for many decades. With our wide range of services, you have a close ally that's available for any type of hardwood work and our partnership will ensure that your hardwoods look great throughout the years.</p>
                  <p>Give your hardwood floors in Montreal a new life. Call Elite Floor at 800-890-9432 for all your cleaning, polishing, and repairing needs.</p>
             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
              <div id="service4" class="collapse panel-body">
                <p>At the same time integral to making a room look good and seemingly impossible to clean, carpets in Montreal run the gamut from shiny and beautiful to downright ugly. At Elite Floor, we love all types of carpets and enjoy working with our local customers to transform their interior spaces with new carpets or refreshing older ones.</p>
               <p>While Elite Floor deals primarily with new carpet sales and installations, we're also happy to provide a wide range of supplementary services as well. In addition to standard repairs and stain guard application, we also perform deep cleans that help to eradicate tough-to-remove stains and odors from pets or other sources.</p>
                <p>Because carpets and flooring are literally our business, we've made it a point to be THE carpet specialist in Montreal. When you're looking to upgrade your flooring to a high quality carpet, a friendly Elite Floor representative will help you select the right materials, cuts, and patterns to perfectly fit your space.</p>
                <p>Step up to the next level of carpet services in Montreal by giving Elite Floor a call at 800-890-9432.</p>

             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
              <div id="service5" class="collapse panel-body">
                <p>When it was first installed, the flooring in your Montreal property probably looked great. However, time can get the best of even the best floors and general wear and tear can add up over the years. With the help of Elite Floor, a leading flooring repair firm, you'll be able to seamlessly fix all those nagging problems and bring back the original look of your floors.</p>
                 <p>While other Montreal flooring repair companies may just look to patch a broken tile or hardwood piece, Elite Floor takes things a step further. Instead of a quick swap, we'll investigate to see why the piece broke and fix and underlying problems to prevent the same cracking or splitting from happening again.</p>
                  <p>In the end, what separates Elite Floor flooring repair with that of other companies is the simple fact that we care. We're not out to make a quick buck and would rather provide a high quality repair that lasts for years so you'll feel comfortable recommending us to others in the Montreal area.</p>
                  <p>With the right knowledge and the best quality materials, Elite Floor has the Montreal flooring repair you want. Call us today at 800-890-9432.</p>

             </div>
       </div>






<!-- 
				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo1">  <h3 class="panel-title"> <?php echo $service1; ?> </h3></div>
				  <div class="panel-body" data-acc-content="demo1">
				   <p>In an ideal world, nobody will ever notice the installation of your flooring. Quietly blending into the background, the details of a perfect floor installation are meant to be hidden, whether it's carpet, hardwood, tiles, or another material. At Elite Floor, we're proud to be the area's best at providing immaculate installations whose details are never seen..</p>
            <p>Regardless of if you prefer vinyl or parquet, Elite Floor will approach each job with the same level of care that leads to a great install. During the planning phase, we'll take accurate measurements and give you an accurate quote for the costs to avoid unpleasant surprises like running out of material or hidden charges at the end of the job.</p>
             <p>What you'll quickly see with a flooring installation by Elite Floor is the customer service we bring to the table. Like you, we're local to Montreal and doing a poor job is simply not an option. Our reputation for quality flooring installation is what keeps us in business and why we strive to be the best every time we lay down laminate, wooden planks, or any other flooring type.</p>
             <p>To discuss the different types of flooring installations available in Montreal, dial 800-890-9432 to speak to a Elite Floor expert.</p>
				  </div>

				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo2"> <h3 class="panel-title"><?php echo $service2; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo2">
				    <p>Always classic and always stylish, there's just something special about a Montreal property with marble floors. However, what you might not know is that while marble is a highly durable material and a striking choice for appearance, it comes with its own set of maintenance and cleaning problems.</p>
            <p>The most common issue with marble is that it often fades over time without a professional cleaning and polish. At Elite Floor, we have a variety of services specifically designed to prevent this from happening and we can customize our polishing technique to include a matte, semi-gloss, or gloss finish depending on your personal preferences.</p>
             <p>Routine cleanings and polish jobs will keep your marble, granite or travertine looking great, but Elite Floor also has a solution for when damage like chips or broken blocks occur. Not only do we have access to a large inventory of marble and stone that could make a match possible, but we're also experienced in restoration and can often bring a seemingly lost piece of marble back from the brink.</p>
             <p>Call Elite Floor for exquisite marble services at 800-890-9432 and draw a crowd with your attractive floors.</p>

				  </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo3"> <h3 class="panel-title"> <?php echo $service3; ?></h3></div>
				  <div class="panel-body" data-acc-content="demo3">
				   <p>If you've ever seen a hardwood floor installation in a Montreal home, then you know the huge difference it can make in terms of appearance. At the same time, heat, humidity, and even the normal settling of a property can wreak havoc on hardwood floors, causing warps, unlevel surfaces, and even cracks and splits. For all these problems, Elite Floor is here.</p>
            <p>Designed to be the absolute best hardwood specialists in Montreal, Elite Floor hires only the most experienced and talented cleaners, polishers, and repairman. Whether it's a simple annoying squeak that needs to disappear or full sanding and polishing job, we're here to make it happen and bring your hardwood floors up to their true potential.</p>
             <p>When taken care of, hardwood flooring in a Montreal property can easily last for many decades. With our wide range of services, you have a close ally that's available for any type of hardwood work and our partnership will ensure that your hardwoods look great throughout the years.</p>
             <p>Give your hardwood floors in Montreal a new life. Call Elite Floor at 800-890-9432 for all your cleaning, polishing, and repairing needs.</p>
				   </div>
				</div>

				<div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo4">
				    <h3 class="panel-title"><?php echo $service4; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo4">
				  	 <p>At the same time integral to making a room look good and seemingly impossible to clean, carpets in Montreal run the gamut from shiny and beautiful to downright ugly. At Elite Floor, we love all types of carpets and enjoy working with our local customers to transform their interior spaces with new carpets or refreshing older ones.</p>
            <p>While Elite Floor deals primarily with new carpet sales and installations, we're also happy to provide a wide range of supplementary services as well. In addition to standard repairs and stain guard application, we also perform deep cleans that help to eradicate tough-to-remove stains and odors from pets or other sources.</p>
             <p>Because carpets and flooring are literally our business, we've made it a point to be THE carpet specialist in Montreal. When you're looking to upgrade your flooring to a high quality carpet, a friendly Elite Floor representative will help you select the right materials, cuts, and patterns to perfectly fit your space.</p>
             <p>Step up to the next level of carpet services in Montreal by giving Elite Floor a call at 800-890-9432.</p>
				    </div>
				</div>

               <div class="panel panel-primary">
				  <div class="panel-heading" data-acc-link="demo5">
				    <h3 class="panel-title"><?php echo $service5; ?></h3>
				  </div>
				  <div class="panel-body" data-acc-content="demo5">
				   <p>When it was first installed, the flooring in your Montreal property probably looked great. However, time can get the best of even the best floors and general wear and tear can add up over the years. With the help of Elite Floor, a leading flooring repair firm, you'll be able to seamlessly fix all those nagging problems and bring back the original look of your floors.</p>
            <p>While other Montreal flooring repair companies may just look to patch a broken tile or hardwood piece, Elite Floor takes things a step further. Instead of a quick swap, we'll investigate to see why the piece broke and fix and underlying problems to prevent the same cracking or splitting from happening again.</p>
             <p>In the end, what separates Elite Floor flooring repair with that of other companies is the simple fact that we care. We're not out to make a quick buck and would rather provide a high quality repair that lasts for years so you'll feel comfortable recommending us to others in the Montreal area.</p>
             <p>With the right knowledge and the best quality materials, Elite Floor has the Montreal flooring repair you want. Call us today at 800-890-9432.</p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="FLOORING INSTALLATION " data-alt="FLOORING INSTALLATION " data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">FLOORING INSTALLATION </span> </div>
          </div>
          </a>



           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="MARBLE FLOORING" data-alt="MARBLE FLOORING" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">MARBLE FLOORING</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="HARDWOOD FLOORING" data-alt="HARDWOOD FLOORING" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">HARDWOOD FLOORING</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="CARPET FLOORING" data-alt="CARPET FLOORING" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">CARPET FLOORING</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="FLOORING REPAIRS " data-alt="FLOORING REPAIRS" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> FLOORING REPAIRS </span> </div>
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
        <p class="cta-desc">Located in Montreal and serving the surrounding area, Elite Floor is proud to be your contractor of choice for all flooring projects.</p>
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
