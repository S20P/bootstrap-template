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
      <div class="navbar-header"> <a class="navbar-brand" href="index.php"> <img src="assets/img/logo_Accounting_Generic.svg" class="logo" alt="logo"> </a> <a href="index.php" class="logo-text">
        <h2 class="company-name"><?php echo $companyName; ?></h2>
        </a> </div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="top-navbar-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" href="#about">About Us</a></li>
          <li><a class="scroll-link" href="#service">Services</a></li>
          <!--<li><a class="scroll-link" href="#gallery">Gallery</a></li>-->
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
          <h1 class="wow fadeInLeftBig"> <strong>Your Partner </strong>for Flawless Accounting.</h1>
          <div class="description wow fadeInLeftBig">
            <p>From corporate business accounting to personal tax services, Fiducial Data Experts has been providing professional solutions designed to meet both your budget as well as your exact needs. </p>
          </div>
          <div class="top-big-link wow fadeInUp"> <a class="btn btn-link-2 scroll-link" href="#features">Learn more</a> </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 form-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
          <div class="form-inner-box">
            <div class="form-top">
              <div class="form-top-center">
                <h3>Make An Appointment</h3>
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
<!--<div class="features-container section-container about-container" id="about">
    <div class="container">
        <div class="about_image"><img src="assets/img/about-image.jpg" alt=""></div>
  <div class="container subcont">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">World Class Accounting and Customer Service in Montreal. </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us"> Fiducial Data Experts is the area's clear leader when it comes to full-featured accounting and tax services. Staffed by accountants, bookkeepers, and tax experts with years of experience, our service range is extensive and we're ready to meet you or your business's challenge.</p>
      <p class="about-us">Blending knowledge and customer service into an inimitable package, we've helped individuals and local companies with everything from simple tax planning to custom-built accounting systems for growing corporate clients.</p>
      </div>
    </div>
  </div>
    </div>

</div>-->

<div class="features-container section-container about-container" id="about">
    <div class="container">
    <div class="row">
      <div class="col-sm-6 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">World Class Accounting and Customer Service in Montreal. </h3>
           <p class="about-us"> Fiducial Data Experts is the area's clear leader when it comes to full-featured accounting and tax services. Staffed by accountants, bookkeepers, and tax experts with years of experience, our service range is extensive and we're ready to meet you or your business's challenge.</p>
      <p class="about-us">Blending knowledge and customer service into an inimitable package, we've helped individuals and local companies with everything from simple tax planning to custom-built accounting systems for growing corporate clients.</p>

      </div>
        <div class="col-sm-6 about_image">
          <img src="assets/img/about-image.jpg" alt="">
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
        <h3 class="service-subheader"> <strong>Comprehensive </strong>Accounting Options</h3>
        <p>As a firm specializing in tax accounting, we are well-positioned to assist you in all your operations.From Taxation to financial statements we provide full-featured and exceptional in all accounting areas. Fiducial Data Experts can do it all. Read more about our primary service areas by clicking to the below.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="services ">


         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                <div id="service1" class="collapse panel-body">
                      <p>It's no secret that taxation in Montreal can be a veritable rabbit hole, complete with twists and turns best left to true professionals. At Fiducial Data Experts, our taxation services are designed to take all the guesswork out of your taxes and find advantages that you or your previous accountants may have overlooked. We believe that our clients should pay the exact amount of tax owed and not a penny more.</p>
            <p>In addition to filing personal and corporate tax returns for our Montreal clients, we also offer a full suite of taxation services, including complete audit representation to lessen the troubles generally associated with being audited. No matter whether you're a multinational firm or an individual, the Fiducial Data Experts team will scale to your needs and offer taxation services that excel in every way.</p>
            <p>For all taxation services accounts in Montreal, we assign a singular point of contact that will keep you up-to-date with your current tax situation and responsibilities. Your point of contact will stay the same for as long as you desire.</p>
            <p>To get started with a Montreal taxation services firm that understands what you need, give Fiducial Data Experts a call at 800-890-9432.</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                <div id="service2" class="collapse panel-body">

                     <p>If you’re one of the many growing business’s in the Montreal area, then you may have already discovered how difficult it can be to keep track of both your incoming and outgoing payments.</p>
            <p>Accounting services from Fiducial Data Experts include accounts payable and accounts receivable, delivered in an easy-to-read format on a weekly or monthly basis as needed. This data will give you clear access to your debits and credits and be a valuable source of information to inform business decisions. By providing accurate accounting services, we'll make sure that no bill or invoice is left unpaid.</p>
            <p>Some Montreal companies attempt to do their own accounting, but almost all realize quickly how much of a mistake this can be. Without organized accounting, not only will payments slip through the cracks but you'll also be unable to correctly determine your business's bottom line. Our services are competitively-priced and the numerous advantages make hiring an easy choice.</p>
            <p>To find out what Fiducial Data Experts's accounting services can do for your firm in Montreal, just dial 800-890-9432 to speak to a member of our team.</p>

               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                <div id="service3" class="collapse panel-body">

                    <p>In an ideal world, bookkeeping is done automatically, without having to worry whether your financial information is correct or not. Unfortunately, that's not the case in Montreal and even the smallest businesses can have accounting nightmares. Fiducial Data Experts is a full-featured accounting firm that's ready to take on bookkeeping services of all shapes and sizes.</p>
             <p>At Fiducial Data Experts, we pride ourselves on our bookkeeping system knowledge. Whether you're using QuickBooks, Excel spreadsheets, or a proprietary solution, we'll be able to integrate seamlessly into your existing system to make accessing your financial data easier than ever before and deliver a new level of bookkeeping efficiency.</p>
             <p>Like many local businesses in Montreal, you probably want a bookkeeping system that simply works without hassle. Fiducial Data Experts is exactly that system. Not only do we help with a wide variety of tasks, including tax remittance calculations, budget preparation, and more, but we also work directly with our clients to arrange easy document transfers online and in-person. With us, you'll stop spending hours every week to keep your accounts in order.</p>
             <p>Get rid of your bookkeeping pain by calling Fiducial Data Experts in Montreal today at 800-890-9432.</p>

               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
                <div id="service4" class="collapse panel-body">
                      <p>While Fiducial Data Experts is primarily an accounting firm in Montreal, our knowledge is not limited to bookkeeping and we're experts at payroll services as well. By partnering with us, you'll gain a detail-oriented solution that is not only well-versed in the human resources world but also has the superior customer service that has made us the choice for many local businesses just like yours.</p>
            <p>Our payroll packages in Montreal start with standard payroll management, but also include a number of related services, such as vacation and other other employee benefits, tax deductions, and worker's compensation form assistance. Fiducial Data Experts was built to be the best possible payroll services solution and we've continued to advance our human resources knowledge.</p>
            <p>When contracted for your Montreal company's payroll services, we'll create a customized workflow that can scale to any size of business. Adapting to your exact needs is the Fiducial Data Experts way and what has made us a success for many years in Montreal and the surrounding area.</p>
            <p>One call to Fiducial Data Experts will set up a meeting with one of our Montreal payroll services experts. Contact us by email or at 800-890-9432.</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
                <div id="service5" class="collapse panel-body">

                      <p>While other Montreal accounting service providers may have standard report formats that they use for all their clients, Fiducial Data Experts takes a different approach. Our balance sheets, cash flow statements, and other documents (both paper and digital) will be developed with your needs in mind. Giving you quick access to the data you need makes understanding your financial statements a snap.</p>
            <p>At Fiducial Data Experts, we work with both established businesses as well as new startup firms. With the former, we'll integrate into your existing system and deliver financial statements that conform to your standards. For new Montreal area companies, we can also provide personalized accounting system creation to go along with our financial statements service.</p>
            <p>Fiducial Data Experts financial statements can be created on a daily, weekly, monthly, yearly, or any other basis that suits your needs. In addition to standard income and P&L financial statements, we can also use existing data to create projections, budget analysis reports, and several other financial statements on demand.</p>
            <p>For personalized financial statements in Montreal, Fiducial Data Experts is the clear winner. Call us at 800-890-9432 to learn more.</p>

               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
                <div id="service6" class="collapse panel-body">
                      <p>When it comes to corporate taxes in Montreal, there's simply no excuse to use a less-than-excellent service provider. Wrong numbers could do more than affect your company's bottom line – they could generate costly audits and fines that drag on for months. With Fiducial Data Experts, you'll have a qualified team of local corporate tax professionals that will make sure all your tax paperwork is completely in order.</p>
             <p>Experienced and knowledgeable about both local and federal tax regulations, Fiducial Data Experts has helped many businesses in Montreal reduce their tax bills and get rid of the worry of an audit triggered by an accounting mistake. If your business is audited, Fiducial Data Experts we're happy to be your official representative and will work to generate a speedy resolution.</p>
             <p>Corporate tax in Montreal and nearly everywhere else is notoriously tricky – that's why it pays to have a professional team on your side. With rates that are competitive and an ability that few can match, Fiducial Data Experts strives to be the local leader for both big and small businesses.</p>
             <p>To speak to a Fiducial Data Experts expert about our corporate tax solutions in Montreal, dial 800-890-9432.</p>


               </div>
         </div>
         <div class="panel panel-primary">
            <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?> </h3>
                <div id="service7" class="collapse panel-body">
                    <p>Most people in Montreal only think about their personal taxes once a year, but Fiducial Data Experts is available year-round to make short work of taxes, whether it's advance planning, filing, representation, inheritance issues, or anything else. Our capable tax experts have provided services to countless clients and have developed an intimate knowledge of local and national tax regulations.</p>
             <p>In terms of personal tax services in Montreal, the vast majority of business that Fiducial Data Experts completes has to do with tax preparation and filing. Rather than seeing this as a one-time service, we offer our preparation clients the ability to learn more about tax structure and how to strategically employ accounting practices that ensure you're not paying more than is owed.</p>
             <p>If you've used another service or completed your tax paperwork yourself and are now facing an audit or other tax issues, Fiducial Data Experts is also available to serve as your personal representative. In these situations, a member of our team will deal with all your tax responsibilities, including meeting with tax officials and all paperwork.</p>
             <p>Get on the right side of taxes with Fiducial Data Experts's personal tax services in Montreal. Contact us at 800-890-9432.</p>

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
        <h2 class="wow fadeInUp cta">Call us on</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <p class="cta-desc">Based in Montreal, Fiducial Data Experts is proud to provide top level accounting to clients both near and far.</p>
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


<!-- Our Client section
<div class="our-client-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Our Clients</h2>
        <div class="divider-1 fadeInUp cta "><span></span></div>
        <h3 class="service-subheader">Below is a list of clients we’ve worked with</h3>

        <div class="client_list">
          <div class="client_item"><img src="assets/img/client/c1.png"></div>
          <div class="client_item"><img src="assets/img/client/c2.png"></div>
            <div class="client_item"><img src="assets/img/client/c3.png"></div>
              <div class="client_item"><img src="assets/img/client/c4.png"></div>
                <div class="client_item"><img src="assets/img/client/c5.png"></div>
               </div>
        </div>

        </div>
      </div>
    </div>

</div>  -->

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
