
<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 footer-social">
      <a href="<?php echo $facebook;?>"><span class="typcn typcn-social-facebook"></span></a>
       <a href="<?php echo $twitter;?>"><span class="typcn typcn-social-twitter"></span></a>
        <a href="<?php echo $googleplus;?>"><span class="typcn typcn-social-google-plus"></span></a>

    </div>
    <div class="row">
      <div class="col-sm-12 footer-copyright"><a href="https://designnrank.com/"><img src="assets/img/drlogo.png" alt="Designed by Design N Rank"> </a>  &copy;  2017 All rights reserved. </div>
    </div>
  </div>
</footer>





<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/advanced-read-more.min.js"></script>
<script src="assets/js/lightboxgallery-min.js"></script>
<script src="assets/js/jquery.accordion.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
 <script>
      var map;
	  function initMap() {
        var uluru = { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
  </script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmvTZLBXbbmfkVxsxhIJ2VuVaTlPT_Olc&callback=initMap"
    async defer>

    </script>
<script type="text/javascript">
	  jQuery(function($) {
		$(document).on('click', '.lightboxgallery-gallery-item', function(event) {
		  event.preventDefault();
		  $(this).lightboxgallery({
			showCounter: true,
			showTitle: true,
			showDescription: true
		  });
		});
	  });


/* Set Backgourd Color
$('.form-inner-box').css("background", '<?php echo $backgroud_color; ?>');
*/
 $('.form-inner-box').css("background-image", '<?php echo $backgroud_color; ?>');
 $('.divider-1 span').css("background-image", '<?php echo $backgroud_color; ?>');
 $('.btn-link-2').css("background-image", '<?php echo $backgroud_color; ?>');
 $('.services .panel-primary > .panel-heading').css("background-image", '<?php echo $backgroud_color; ?>');







  </script>


  <!-- From Validation -->

  <script>
  $('#slider-form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#contact-email').val());

    // Check if empty of not
    if (name === '') {
        $('#contact-email').after('<em>Requied*</em>');
        return false;
    }


});


 $('#footer-form').submit(function () {

    // Get the Login Name value and trim it
    var name = $.trim($('#contact-bottom-email').val());

    // Check if empty of not
    if (name === '') {
        $('#log').after('<em>Requied*</em>');
        return false;
    }
});

// $(function() {
// 			$('.services').accordion({ multiOpen: false });
// 		});


$(function () {
       var active = true;
       $('.services').on('show.bs.collapse', function () {
           if (active) $('.services .in').collapse('hide');
       });
   });

  </script>

<!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
