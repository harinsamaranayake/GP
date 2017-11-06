<?php include "includes/sheader.php" ?>
 	<?php include "includes/snavbar.php" ?>
		<span class="right">			
			<div class="window_container">
				<!-- main content -->
				<!-- ......................................................................... -->
				<h3>My Google Maps Demo</h3>
			    <div id="map" style="height:100px;width:100px;"></div>

			    <script>
			      function initMap() {
			        var a=(-25.363);
			        var b=(131.044);
			        var i=1;
			        var uluru = {lat: a, lng: b};
			        var map = new google.maps.Map(document.getElementById('map'), {zoom: 4,center: uluru});        

			        while(i<10){
			          var marker = new google.maps.Marker({position: uluru,map: map});
			          a=(-25.363)+1;
			          b=(131.044)+1;
			          i++;
			        }
			      }
			    </script>

			    <script async defer
			    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPDkKx4Dcv6RuYE2YGew9HHnr8-I4hKH4&callback=initMap">
			    </script>
				<!-- ......................................................................... -->
			</div>
		</span>	

	</div>

	<?php include "includes/sfooter.php" ?>

</div>

</body>
</html>