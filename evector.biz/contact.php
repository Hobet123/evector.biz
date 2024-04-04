<?php

    $title = "Contact Us";
    $description ="E Vector Networking Inc. is a professional web development firm. We specialize in web development, SEO, QA, Intenet Marketing";
    $keywords = "web developement, web design, Internet Marketing, SEO, automatic web data collection, Quality Assurance, Artificial Intelegence Solutions, Mobile Development";
    
    include('header.php');
?>  
    
          <div class="row space10"></div>
  
  
          <div class="row">
            <div class="span8">
              <h1>Contact Us</h1>
              <div class="row space10"></div>
  
            </div>
            <div class="span4">
              <div class="actual-section">
                <a href="index.php">Home</a> > Contact Us
              </div>  
              <div class="row space10"></div>
              
            </div>
          </div>       
          <div class="row">
              <div class="span2">
                    <div class="row" style="padding-left: 30px;">
                        <h2>Address:</h2>
                          10495 Keele Str.<br>
                          Maple ON. L6A 3Y9<br> 
                          Canada<br>
                    </div>
                    <div class="row space10"></div>
					<div class="row space10"></div>
					<div class="row space10"></div>
					<div class="row space10"></div>
					<div class="row space10"></div>
					<div class="row space10"></div>
					<div class="row space10"></div>
                    <div class="row" style="padding-left: 30px;">
                        <h2>Phone:</h2>
                        <a href="tel:16479453773">1-647-945-3773</a>
                    </div> 
                    <div class="row space10"></div>
                    <div class="row" style="padding-left: 30px;">
                        <h2>Email:</h2>
                        <a href="mailto:info@evector.biz">info@evector.biz</a>
                    </div> 
              </div>
`			<div class="span10" style="align: left;">
				<div id="map"></div>
				<script>
				  function initMap() {
					var uluru = {lat: 43.867, lng: -79.514};
					var map = new google.maps.Map(document.getElementById('map'), {
					  zoom: 12,
					  center: uluru
					});
					
					var image = 'http://www.evector.biz/img/qa.png';
					
					var marker = new google.maps.Marker({
					  position: uluru,
					  map: map,
					  icon: image
					});
				  }
				</script>
				
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDThHJW82eDJvu3mQKUjhXqHvJXByiQ3zE&callback=initMap">
				</script>
			</div>			  
          </div>

  
          <div class="row space50"></div>
<script>
$("#lcontact").addClass("active");
</script>

<?php

    include('footer.php');
    
?>

