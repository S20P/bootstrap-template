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
          <h1 class="wow fadeInLeftBig"> <strong>Compassionate </strong>Care.</h1>
          <div class="description wow fadeInLeftBig">
            <p>Taking your pet to the vet is almost never pleasant, but Kitty & Co Veterinary works hard to create the type of positive environment where regular check-ups and health treatments are completed efficiently, effectively, and with care. Join us today and experience a different level of veterinary skill.</p>
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
<div class="features-container section-container about-container" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">Relaxing and Pleasant Experiences. </h3>
          <p class="about-us">At Kitty & Co Veterinary, we have a very simple aim – to provide the best possible care for your pets at an affordable cost for Montreal owners. With an all-encompassing range of services and understanding of pets that goes past medicine, we're proud to say we're reaching that goal every day.</p>
          <p class="about-us">Whether it's solving a skin rash, dealing with a heartworm infection, or any other veterinary issue, we promise to deliver the type of compassion that we would want our own pets to receive. A gentle hand, true veterinary talent, and superior customer relationships is how we serve the Montreal community.</p>
          <p class="about-us">To learn more about what we do or schedule an appointment, contact Kitty & Co Veterinary in Montreal at 800-890-9432 .</p>
      </div>
      <div class="col-sm-6 about_image">
          <img src="assets/img/backgrounds/3.jpg" alt="">
      </div>
    </div>
    </div>
</div>
<!--<div class="features-container section-container about-container" id="about">
  <div class="about_image"><img src="assets/img/backgrounds/3.jpg" alt=""></div>
  <div class="container subcont">
    <div class="row">
      <div class="col-sm-12 about section-description wow fadeIn">
        <h2>About Us</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
         <h3 class="about-subheader">Relaxing and Pleasant Experiences. </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       <p class="about-us">At Kitty & Co Veterinary, we have a very simple aim – to provide the best possible care for your pets at an affordable cost for Montreal owners. With an all-encompassing range of services and understanding of pets that goes past medicine, we're proud to say we're reaching that goal every day.</p>
        <p class="about-us">Whether it's solving a skin rash, dealing with a heartworm infection, or any other veterinary issue, we promise to deliver the type of compassion that we would want our own pets to receive. A gentle hand, true veterinary talent, and superior customer relationships is how we serve the Montreal community.</p>
        <p class="about-us">To learn more about what we do or schedule an appointment, contact Kitty & Co Veterinary in Montreal at 800-890-9432 .</p>
      </div>
    </div>
  </div>
</div>-->
<!-- Service -->
<div class="service-container section-container section-container-gray-bg" id="service">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 more-features section-description wow fadeIn">
        <h2>Our Services</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> <strong>Full Suite  </strong>of Pet Services</h3>
        <p>From spaying and neutering to surgeries and vaccines, Kitty & Co Veterinary is a complete veterinary service provider. We provide reliable emergency and regular check-up services that are customized to your animal requirements and needs.</p>
      </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
    <div class="services ">

      <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
              <div id="service1" class="collapse panel-body">
                <p>With the obvious language barrier, it's difficult for pets in Montreal to let their owners know what's wrong. However, with pet x-rays from Kitty & Co Veterinary, we can help decode the mystery and find the right solution for a number of pet health issues. Having completed tons of x-rays, we know what we're doing and will be quick, caring, and professional.</p>
                <p class="service-subtitle">Not just about Bones </p>
                <p>While most people think of x-rays as being primarily about bones, they are also quite useful for examining pet organs as well. At the Kitty & Co Veterinary facility in Montreal, our pet x-rays have been used to identify enlarged hearts caused by disease, bladder stones, cancer, and much more.</p>
                <p>Pet x-rays are a completely safe and painless procedure, especially when completed by the professional team at Kitty & Co Veterinary. Using a gentle touch and pet x-ray knowledge unrivaled in Montreal, we'll provide the intimate care that you expect from the area's leading veterinary office.</p>
                <p>To schedule an advance or last minute appointment for a pet x-ray, simply dial 800-890-9432 for the Montreal Kitty & Co Veterinary location.</p>


             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
              <div id="service2" class="collapse panel-body">

                <p>If you have pets in Montreal, then there's a good chance you already know just how annoying fleas and ticks can be. However, annoyance is just the start and the problems caused by these pests can even extend to disease transmission for humans. At Kitty & Co Veterinary, we have both preventative and reactive treatment plans to lower the risk of flea and tick issues.</p>
                <p>Fleas can quickly invade a Montreal home, going from a single female to two thousand eggs in only a month's time, with the population getting harder and harder to control. Your pet's comfort (as well as your own) can be greatly improved by taking the flea control measures advised by Kitty & Co Veterinary.</p>
                <p class="service-subtitle">Instruction available  </p>
                <p>In addition to treating existing flea and tick problems and preventive maintenance, Kitty & Co Veterinary is also happy to instruct pet owners how to check for these pests on a regular basis. With each animal we free from fleas and ticks, we're able to make the Montreal area a safer place to live.</p>
                <p>For quick and speedy resolution of a flea or tick problem in Montreal, call Kitty & Co Veterinary at 800-890-9432 .</p>

             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
              <div id="service3" class="collapse panel-body">
                <p>For pet owners in Montreal, spaying or neutering your cat or dog can be a scary proposition, but Kitty & Co Veterinary has performed countless operations successfully and knows how to treat both your pet and you with care. Our veterinary clinic can complete all types of spay and neuter services.</p>
                <p class="service-subtitle">Reduced risk of infections </p>
                <p>Spaying and neutering in Montreal comes with a whole host of benefits, not least of which is eliminating the possibility of pregnancy. In addition, there are many health benefits, ranging from reducing the risk of uterine infections to avoiding common behavioral issues that are caused by hormones.</p>
                <p>For every spay and neutering need that your pet might have, Kitty & Co Veterinary is here for you. Our talented and experienced team is well-versed in all procedures and our professional ability will lead to a speedy recovery for your furry friend.</p>
                <p>Contact Kitty & Co Veterinary for top level spay and neutering services in Montreal that reduce your and your pet's stress as much as possible. Call us at 800-890-9432.</p>


             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
              <div id="service4" class="collapse panel-body">
                <p>Nothing is scarier than seeing your loved pet go under the knife for a surgery. At the same time, you can rest assured with Kitty & Co Veterinary in Montreal as our surgeons have years of experience and the ability to complete even a difficult operation without complications. Our pet surgery services is complete and we'll work hard to give your pet the best possible care.</p>
                <p class="service-subtitle">Pain management solutions </p>
                <p>In all pet surgeries, the team has a very specific combined goal: a successful operation with effective pain management and flawless patient safety. Before the surgery happens, we'll give you a full rundown of what we'll be doing, including the type of anesthesia we'll use as well as what steps will be needed for recovery after the operation.</p>
                <p>We know that any pet surgery in Montreal is a trying time and we endeavor to turn this period of stress and tension into a distant memory as quickly and effectively as possible. Kitty & Co Veterinary prides itself on compassionate care and the ability we exhibit on all surgical procedures.</p>
                <p>Call Kitty & Co Veterinary at 800-890-9432 for pet surgery consultation and operation in Montreal.</p>


             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
              <div id="service5" class="collapse panel-body">
                <p>From the first few weeks and extending through the next approximately four months, nothing can do as much good for your pet's health as strict adherence to a vaccination schedule. In Montreal, Kitty & Co Veterinary is one of the leading vaccination providers and we've worked with many owners to give their pets the best chance for survival and a healthy life.</p>
                <p class="service-subtitle">Layers of protection </p>
                <p>Most vaccinations for puppies and kittens will start within six weeks of birth and will need repeat visits to our Montreal clinic on a three week to one month basis. This preventive health care will give a layer of protection against specific diseases that can potentially be fatal and/or debilitating. After this initial period, some cats and dogs may need annual vaccination.</p>
                <p>Vaccinations are a regular part of the day-to-day business at Kitty & Co Veterinary. Recognizing vaccinations as extremely important, we're happy to explain vaccine procedure to any interested owners and we invite owners to be present during the process.</p>
                <p>For professional vaccination services, call Kitty & Co Veterinary in Montreal at 800-890-9432 to learn more about our scheduled plan of treatments.</p>


             </div>
       </div>
       <div class="panel panel-primary">
          <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
              <div id="service6" class="collapse panel-body">
                <p>Often overlooked, the truth is that your pet's dental care does matter. Unlike most humans who brush on a regular basis, your dog or cat's mouth can quickly become a breeding ground for bacteria and lead to a number of health complications. At Kitty & Co Veterinary in Montreal, we have pet dentistry experts ready and waiting to give your pet excellent treatment.</p>
                <p class="service-subtitle">Affordable Regular check-up </p>
                <p>The big danger with failing to perform dental care on your pet is periodontal disease, but the bacteria is also capable of causing more serious problems, such as liver and heart disease. The Kitty & Co Veterinary solution for dental care is a strict home care program punctuated by annual check-ups and professional cleaning.</p>
                <p>In addition to standard check-ups and cleaning, our Montreal facility is also outfitted for dental x-rays and ultrasonic cleaning as needed. By investing in advanced technology and continual training to stay on the cutting edge of pet dentistry, Kitty & Co Veterinary is committed to your pet's health.</p>
                <p>Schedule your pet's next dentist appointment in Montreal with a single call. Contact Kitty & Co Veterinary at 800-890-9432 .</p>
             </div>
       </div>

      </div>
    </div>
        <div class="col-sm-6">
        <div class="services ">



          <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?> </h3>
                        <div id="service7" class="collapse panel-body">
                          <p>For many veterinary offices in Montreal, making a diagnosis involves sending away lab samples and waiting weeks for results. On the other hand, Kitty & Co Veterinary has in-house laboratory services, which means we can get the necessary data and start treating your pet much faster, thus leading to a speedy recovery.</p>
                          <p class="service-subtitle">Quick Diagnosis </p>
                          <p>Kitty & Co Veterinary laboratory services include urine and blood analysis as well as parasite evaluations and cytology. With these standard tests, our team can quickly diagnose the problem and advise the correct treatment. In cases where more detailed analysis is needed, we have partnerships with more advanced labs in the area.</p>
                          <p>The benefit of in-house laboratory services is not only in the speed of receiving results but also in the lowered possibility of contamination or samples lost in transport. In this manner, Kitty & Co Veterinary is able to increase the level of care we're able to provide to Montreal pets.</p>
                          <p>When your pet's health is on the line, choose the Montreal veterinarian with the best laboratory services. Call Kitty & Co Veterinary at 800-890-9432.</p>


                       </div>
                 </div>
                 <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service8" id="panel_open_close"> <?php echo $service8; ?> </h3>
                        <div id="service8" class="collapse panel-body">
                          <p>Pet owners in Montreal may have lots of choices when it comes to pet food, but the truth is that not all of these options are created equally. It's been shown that proper nutrition can have a direct effect on your pet's health and Kitty & Co Veterinary is here to help you identify the best possible diet for your pet as well as give access to quality products.</p>
                          <p>Without a proper diet, a pet can have lots of different health issues, ranging from kidney and liver disease to full-blown diabetes. Food quality and feeding frequency are extremely important and all Montreal pet owners should have the basic knowledge to choose pet food products in an informed manner.</p>
                          <p class="service-subtitle">Custom-designed Nutrition plans</p>
                          <p>At Kitty & Co Veterinary, we have studied pet nutrition extensively and are able to advise a feeding plan custom-designed to meet your pet's needs. In addition, we can test for food allergies as well as diseases and other health conditions caused by a poor diet.</p>
                          <p>To discuss your pet's nutrition with an Kitty & Co Veterinary expert, it's best to call our Montreal location at 800-890-9432.</p>


                       </div>
                 </div>
                 <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service9" id="panel_open_close"> <?php echo $service9; ?> </h3>
                        <div id="service9" class="collapse panel-body">
                          <p class="service-subtitle">early Detectiion of potential problems </p>
                          <p>Maintaining your pet's health in Montreal can be difficult, especially if records are not kept organized and passed on as you change veterinarians. At Kitty & Co Veterinary, we believe in establishing a lifelong connection with pets and their owners, which includes detailed records and pet monitoring to notice potential problems before they happen.</p>
                          <p>As part of the Kitty & Co Veterinary pet monitoring strategy, we'll track weight gain in relation to age and other key metrics that can serve as an indicator to your pet's health. From birth onwards, each visit to our Montreal office is carefully recorded and added to your pet's file. Should any metrics not match established standards, we'll be able to investigate why with a detailed pet health history.</p>
                          <p>During a surgical procedure at Kitty & Co Veterinary, we also use pet cardiac monitoring as a way of keeping your pet safe. Using state-of-the-art equipment, we're able to take readings every five minutes and will notice almost immediately to quickly identify any anesthetic problems. In this manner, we're able to ensure that all pet surgeries go smoothly.</p>
                          <p>Choose a veterinarian in Montreal that values pet monitoring. Contact Kitty & Co Veterinary by email or by calling 800-890-9432.</p>


                       </div>
                 </div>
                 <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service10" id="panel_open_close"> <?php echo $service10; ?> </h3>
                        <div id="service10" class="collapse panel-body">
                          <p>One of the most dangerous problems that can happen to cats and dogs in Montreal is parasites. Fortunately, invaders like worms and ticks can be dealt with effectively, but early detection makes the process much easier. At Kitty & Co Veterinary, we have created parasite control and treatment plans that will have your pet back to health as quickly as possible.</p>
                          <p>The most common parasitic infection for pets in Montreal is clearly worms. Passed during the birth process or acquired later in life from mosquito bites, these worms can live in a pet's heart, lungs, or other areas of the body. Treated with a specialized pet medicine, recovery can be a long process and requires forced rest.</p>
                          <p class="service-subtitle">Schedule a Testing </p>
                          <p>The best way to find out if your pet has been infected with worms or other parasites is to schedule a testing visit at Kitty & Co Veterinary. We'll complete the necessary tests and advise an exact treatment plan. During routine annual check-ups, we'll also take stool and/or urine samples to be tested for parasites.</p>
                          <p>Preventing a parasitic infection early is easy with Kitty & Co Veterinary. Call 800-890-9432 to program an appointment at our Montreal clinic.</p>


                       </div>
                 </div>
                 <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service11" id="panel_open_close"> <?php echo $service11; ?> </h3>
                        <div id="service11" class="collapse panel-body">
                          <p>Pet dermatology in Montreal can be tricky, with many pet owners not knowing where to go do deal with a persistent rash or skin condition. At Kitty & Co Veterinary, we have a wealth of history dealing with pet dermatology problems and have successfully treated many pets in the local area.</p>
                          <p class="service-subtitle">Multidisciplinary Expertise </p>
                          <p>Unlike humans that have separate specialists for allergies, dermatology, and other concerns, a pet dermatologist in Montreal is an expert at multiple disciplines and must use combined information to make an accurate diagnosis. Fortunately, the pet dermatologists at Kitty & Co Veterinary are true professionals.</p>
                          <p>Whether it's an itchy ear, foot pad problems, or loss of hair, Kitty & Co Veterinary will be able to get down to the root of the problem and create a treatment plan to rid your pet of the issue. In many cases, dermatology issues are related to food and a change in diet can help remedy the situation.</p>
                          <p>If you haven't found a pet dermatologist in Montreal you trust, it's time to dial 800-890-9432 and speak to a member of the Kitty & Co Veterinary team.</p>


                       </div>
                 </div>
                 <div class="panel panel-primary">
                    <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service12" id="panel_open_close"> <?php echo $service12; ?> </h3>
                        <div id="service12" class="collapse panel-body">
                          <p>The cardiologists at Kitty & Co Veterinary are capable of everything from standard examinations to detailed echocardiography ultrasounds that use the latest equipment to give accurate imaging and pinpoint-accurate diagnosis for a wide range of heart conditions. With heart disease being a common problem for pets both young and old, having a trusted pet cardiology expert in Montreal is of paramount importance.</p>
                          <p>In any heart-related surgical operation at Kitty & Co Veterinary, we'll use advanced monitoring to keep a constant track of your pet's current condition and heart situation. This monitoring technology gives your pet the best possible chance of a successful surgery and immediate notification in the case of a problem with anesthesia.</p>
                          <p class="service-subtitle">High-end equipment </p>
                          <p>Unlike other veterinary offices that refer their cardiology work to other locations, we're fully equipped to handle heart condition treatment at the Kitty & Co Veterinary facility. In combination with our other pet services, we're proud to say we're the most qualified veterinarians in the greater Montreal area.</p>
                          <p>To learn more about Kitty & Co Veterinary cardiology services, call our Montreal office at 800-890-9432.</p>


                       </div>
                 </div>
      </div>
      </div>
	</div>
    </div>

    </div>
  </div>
</div>

<!-- Gallery Section -->
<!-- <div class="always-beautiful-container section-container gallery-container" id="gallery">

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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="<?php /*echo $service1; ?>" data-alt="<?php echo $service1; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
          </div>
          </a>

          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="<?php echo $service1; ?>" data-alt="<?php echo $service1; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="<?php echo $service1; ?>" alt="<?php echo $service1; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service1; ?></span> </div>
          </div>
          </a>

           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="<?php echo $service2; ?>" data-alt="<?php echo $service2; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="<?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service2; ?></span> </div>
          </div>
          </a>


        <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="<?php echo $service2; ?> " data-alt="<?php echo $service2; ?>" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" <?php echo $service2; ?>" alt="<?php echo $service2; ?>">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"> <?php echo $service2; ?> </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="<?php echo $service3; ?>" data-alt="<?php echo $service3; ?>" data-desc="">
         <div> <img src="assets/img/gallery/service3_thumb.jpg" title="<?php echo $service3; ?>" alt="<?php echo $service3; ?>">
           <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title"><?php echo $service3; */?></span> </div>
         </div>
         </a>
          </div>
      </div>
    </div>

  </div>
</div> -->

<!-- CTA section -->
<div class="call-to-action-container section-container section-container-image-bg" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
        <h2 class="wow fadeInUp cta">Call us on</h2>
        <div class="divider-2 fadeInUp cta "><span></span></div>

        <div class="cta-content">
        <p><a href="tel:<?php echo $phone; ?>" class="cta-number"><?php echo $phone; ?></a></p>
        <p class="cta-desc"> The Kitty & Co Veterinary pet services facility is located in Montreal where we offer the best in pet grooming, pet boarding, and pet spa options.</p>
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
    </div>  -->

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
