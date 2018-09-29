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
              <li> <span class="top-label"> <i class="fa fa-clock-o " aria-hidden="true"></i>Our Hours : </span><?php echo $workingHours;?></li>
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
          <h1 class="wow fadeInLeftBig"> <strong>Modern and Spacious </strong> Dance Studio</h1>
          <div class="description wow fadeInLeftBig">
            <p>Our facility is built to be the apex of {city} dancing and provide the best possible atmosphere. Our staff have a long history with ballet, jazz, Latino, hip hop, and many other dance forms.</p>
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
         <h3 class="about-subheader">World Class Dance Instruction in {city}.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
         <p class="about-us">{companyName} is proud to be {city}'s leader when it comes to comprehensive dance instruction by experienced and talented professionals. Staffed by dancers active in the local area and beyond, we want to increase awareness and participation in the world of dance.</p>
          <p class="about-us">Offering an attractive blend of competitive prices and top level instruction, {companyName} has been turning those with two left feet into proficient dancers for years and our advanced classes and solo teaching have helped elevate our students to impressive performances and competitive victories. Our {city} location is the perfect place to improve your dancing ability.
          </p>
          <p class="about-us">Don't start your dance instruction in {city} on the wrong foot. Learn from the team at {companyName} and dance like a pro.
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
        <h2>Our Classes</h2>
        <div class="divider-1 wow fadeInUp"><span></span></div>
        <h3 class="service-subheader"> <strong>Expert Dancers </strong>with Years of Experience  </h3>
        <p>Many of our dancers have learned from us for years. See for yourself why dance fans of all levels choose {companyName}. Join our community today.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="services ">
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service1" id="panel_open_close"> <?php echo $service1; ?> </h3>
                 <div id="service1" class="collapse panel-body">
                    <p>
                     From theater plays to televised commercials, many people see {companyName}'s choreographic creations without realizing the thought and direction that goes into every performance. With our team as your {city} partner, your choreography will always be on point.
                     </p>
                     <p>
                    Good choreography may not be easy to define, but you'll certainly know bad choreography when you see it. At {companyName}, all of our choreographic creations in {city} will display consistent quality, have an exciting edge, and draw in viewers. In addition, you can rest assured that any choreography designed by us will truly be unique – we prefer to invent rather than simply retooling old routines to fit new purposes.
                    </p>
                    <p>
                     At the heart of our choreography is a dance team that has both classical and contemporary training. With one foot in each world, we're able to construct complex routines that feel simultaneously modern and timeless. In this manner, your project will truly stand out from the crowd.
                    </p>
                      <p>
                    To speak with a {companyName} expert about choreographic creation in {city}, dial {phone}.
                    </p>

                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service2" id="panel_open_close"> <?php echo $service2; ?> </h3>
                 <div id="service2" class="collapse panel-body">
                   <p>
                      More modern than ballet and evolving as one of the fastest growing disciplines on the planet, jazz dancing focuses on flexibility, rhythm, and fun. At the {companyName} studio in {city}, you'll find a full selection of different jazz styles to choose from.
                   </p>
                    <p>
                   While most people in {city} think of jazz primarily as being rhythmic, the truth is that jazz dancing actually can take many different forms. Standard classes at {companyName} may be the most popular, but we also offer group and solo contemporary instruction that uses similar ballet roots and allows more freedom for expression.
                  </p>
                  <p>
                  Whatever jazz dancing style you prefer, the {companyName} studio is the perfect place to train and learn.Professional instructors and a state-of-the-art space are the perfect combination for your dance knowledge and experience to grow rapidly.        </p>
                   <p>
                  The best way to get started with jazz dancing in {city} is to see what we do for yourself. Drop by the {companyName} facility or call {phone} for a complete tour.
                  </p>
                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service3" id="panel_open_close"> <?php echo $service3; ?> </h3>
                 <div id="service3" class="collapse panel-body">
                   <p>
                    In recent years, the phenomenon of Latino Dance has taken the world by storm, including {city}. To meet the growing demand for local Latino Dance instruction, {companyName} has a full suite of classes that include tango, salsa, samba, and many more styles.
                   </p>
                   <p>
                   From the grace of tango to the rapid energy of salsa, there's a reason why Latino Dance is a hit in {city}.Not only are they fun to learn, Latino Dance styles have seemingly infinite room to increase your abilities and collection of moves. At {companyName}'s dance studio, we'll provide the expert guidance and space to learn and practice to your heart's content.
                  </p>
                  <p>
                 Whether you're learning Latino Dance styles like Bolero or Bachata for pleasure or for competition, {companyName} instruction will be at exactly the right pace. We offer individual training as well as group sessions that allow you to interact with other dancers at the same skill and experience level.
                  </p>
                  <p>
                  Starting Latino Dance has never been closer or more inviting in {city}. Call {phone} and join the many who've learned how to dance at {companyName}.
                  </p>
                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service4" id="panel_open_close"> <?php echo $service4; ?> </h3>
                 <div id="service4" class="collapse panel-body">
                   <p>
                    Ballet is often considered the most graceful representation of dance and its study can be a lifelong affair. With {companyName} by your side and regular training at our state-of-the-art {city} facility, your ballet knowledge will grow by leaps and bounds.
                  </p>
                  <p>
                  At {companyName}, our ballet instruction runs the breadth of the discipline, from the traditional Cecchetti method and Russian ballet to more modern implementations like RAD and Power Barre. Whether you're learning ballet for performance or simply as a way to stay in shape and master control of your own body, we'll adapt our individual or group dance sessions in {city} to fit your exact needs.
                  </p>
                  <p>
                 Ballet is the basis of all modern dance and starting here is an excellent idea for anyone looking to explore the wide world of dance. The correct posture, increased endurance, and improved muscle tone achieved from ballet create a strong foundation from which to take on any dance endeavor.        </p>
                  <p>
                 Start learning ballet today by signing up for your first lesson in {city} - call {companyName} at {phone}!
                  </p>
                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service5" id="panel_open_close"> <?php echo $service5; ?> </h3>
                 <div id="service5" class="collapse panel-body">
                   <p>
                    The language of dance is universal and a child that starts early will carry the rhythm, expression, and appreciation of dance throughout their lives. {companyName} classes strive to impart the importance of dance, from its multi-cultural origins to the physical composure it provides.
                  </p>
                  <p>
                   As a child in {city}, dance may seem to be an afterthought when compared to other activities. However, when you look closer at {companyName}'s dance offerings, you'll quickly see the value we bring to the table. Our classes will not only help your child develop mastery of their body but will also encourage social skills in group settings, cultural awareness, and an ability to be proud of.
                 </p>
                 <p>
                  At {companyName}, all of our dance classes for children start with the basics and progress to more advanced dance steps.  In just a short time, your children will be able to grasp rhythmic and movement concepts that even many adults struggle to understand.      </p>
                 <p>
                 Call {phone} to learn more about {companyName} dance programs for children in {city} and our affordable pricing.
                </p>
                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service6" id="panel_open_close"> <?php echo $service6; ?> </h3>
                 <div id="service6" class="collapse panel-body">
                   <p>
                    Hip hop dance and breakdancing may have started as a counter-culture, but it's safe to say that they've now entered the mainstream in a big way. From impromptu street battles in {city} to the organized training at {companyName}, street dance is more than a fad – it's here to stay.
                     </p>
                     <p>
                       While hip hop music is obviously at the base of breakdancing, it's popularity comes primarily from the excitement it brings to any performance.. However, the quick popping, locking, and spinning that are the hallmarks of hip hop dance are not as easy as they appear. At the {companyName} facilities, you'll learn how to keep track of the beat and mastery of hip hop moves.
                    </p>
                     <p>
                    Another reason why hip hop dance in {city} has drawn such a large audience has to do with the role of improvisation. Unlike more rigid dance forms, breakdancing calls upon dancers to be creative in their performance and part of the joy in hip hop dance comes from its spontaneity.
                    </p>
                     <p>
                  Breakdancing in {city} is easy with {companyName}. Contact us by phone at {phone} or by email to start your hip hop dance journey.
                    </p>
                </div>
          </div>
          <div class="panel panel-primary">
             <h3 class="panel-heading panel-title collapsed"  data-toggle="collapse"  data-target="#service7" id="panel_open_close"> <?php echo $service7; ?> </h3>
                 <div id="service7" class="collapse panel-body">
                   <p>
                   Acrobatics may not be as popular as ballet, but the truth is that the physical skills it teaches are just as important. For top level acrobatics instruction in {city}, {companyName} is the clear leader. Our modern dance space and friendly staff are your acrobatics starting point.
                   </p>
                   <p>
                   When most people think about acrobatics, they imagine only tumbling and falling. However, acrobatics instruction in {city} incorporates much more into the process and provides a strong foundation of physical mastery that can be used for further dance study or training.  Our acrobat team has learned from the best and is ready to pass our knowledge on to you..
                  </p>
                   <p>
                   Our acrobatics classes in {city} are available for both adults and for children. In the case of the latter, {companyName} takes the already present desire to play and gives it form and structure to ensure that your child's somersaults and cartwheels are as safe as possible.
                  </p>
                   <p>
                  Your {city} acrobatics instruction is just a phone call away. Dial {phone} to reach {companyName} and set up your first session.
                  </p>
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


         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service1.jpg" data-title="Choreographic Creation" data-alt="Choreographic Creation" data-desc="">
          <div> <img src="assets/img/gallery/service1_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Choreographic Creation</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service2.jpg" data-title="Jazz and Contemporary Dance" data-alt="Jazz and Contemporary Dance" data-desc="">
          <div> <img src="assets/img/gallery/service2_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Jazz and Contemporary Dance</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service3.jpg" data-title="Latino Dance" data-alt="Latino Dance" data-desc="">
          <div> <img src="assets/img/gallery/service3_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Latino Dance</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service4.jpg" data-title="Ballet Dance" data-alt="Ballet Dance" data-desc="">
          <div> <img src="assets/img/gallery/service4_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Ballet Dance</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service5.jpg" data-title="Children Dance " data-alt="Children Dance" data-desc="">
          <div> <img src="assets/img/gallery/service5_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Children Dance </span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service6.jpg" data-title="Hip Hop and Break Dance" data-alt="Hip Hop and Break Dance" data-desc="">
          <div> <img src="assets/img/gallery/service6_thumb.jpg" title="Drywall Installation" alt="Drywall Installation">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Hip Hop and Break Dance</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service7.jpg" data-title="Acrobatics" data-alt="Acrobatics" data-desc="">
          <div> <img src="assets/img/gallery/service7_thumb.jpg" title="DRYWALL REPAIRS" alt="DRYWALL REPAIRS">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Acrobatics</span> </div>
          </div>
          </a>
           <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service8.jpg" data-title="Ballet Dance" data-alt="Ballet Dance" data-desc="">
          <div> <img src="assets/img/gallery/service8_thumb.jpg" title="DRYWALL INSULATION" alt="DRYWALL INSULATION">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Ballet Dance</span> </div>
          </div>
          </a>
          <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service9.jpg" data-title="Choreographic Creation" data-alt="Choreographic Creation" data-desc="">
          <div> <img src="assets/img/gallery/service9_thumb.jpg" title="PLASTER AND STUCCO" alt="PLASTER AND STUCCO">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Choreographic Creation</span> </div>
          </div>
          </a>
         <a class="lightboxgallery-gallery-item" target="_blank" href="assets/img/gallery/service10.jpg" data-title="Jazz and Contemporary Dance " data-alt="Jazz and Contemporary Dance" data-desc="">
          <div> <img src="assets/img/gallery/service10_thumb.jpg" title=" Trim and Molding" alt="Trim and Molding">
            <div class="lightboxgallery-gallery-item-content"> <span class="lightboxgallery-gallery-item-title">Jazz and Contemporary Dance </span> </div>
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
                 <h4 class="its-col-heading">HIP HOP</h4>
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">CHILDREN CLASSES</h4>
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
             <h4 class="its-col-heading">LATINO</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>19h30-20h30</h5>
             <h4 class="its-col-heading">ACROBATICS</h4>
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
             <h4 class="its-col-heading">LATINO</h4>
             </li>
             <li class="list-group-item its-col its-col-details">
             <h5>19h30-20h30</h5>
             <h4 class="its-col-heading">ACROBATICS</h4>
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
               <h4 class="its-col-heading">HIP HOP</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>18h30-19h30</h5>
               <h4 class="its-col-heading">CHILDREN CLASSES</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>19h30-20h30</h5>
               <h4 class="its-col-heading">BALLET</h4>
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
               <h4 class="its-col-heading">LATINO</h4>
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
               <h4 class="its-col-heading">HIP HOP</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <h5>11h00-12h00</h5>
               <h4 class="its-col-heading">LATINO</h4>
               </li>
               <li class="list-group-item its-col its-col-details">
               <div>
               <h5>12h00-13h00</h5>
               <h4 class="its-col-heading">CHILDREN CLASSES</h4>
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
                 <h4 class="its-col-heading">HIP HOP</h4>
           </li>
           <li class="list-group-item its-col its-col-details">
                 <h5>18h30 – 19h30</h5>
                 <h4 class="its-col-heading">CHILDREN CLASSES</h4>
                 <div>
                 <h5>19h30 – 20h30</h5>
                 <h4 class="its-col-heading">BALLET</h4>
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
        <!-- <p class="cta-desc">Pure and simple, we want you to dance with us. Contact us to find out how our superior classes can fit well within your budget.</p> -->
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
              Unlimited classes per month.
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
              Unlimited classes per month.
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
          <h3> Our Hours </h3>
          </div>
          <div class="wh-desc">
            <h5>{workingHours}</h5>
            <!-- <h5> SAT-SUN By Appointment </h5> -->

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
        <div class="form-footer-box wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">

        </div>
      </div>
    </div>
  </div>
</div>
