<!DOCTYPE html>
<html>
<head>	
	<title>Super Administrator Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css files -->
	<?php include "includes/css.php" ?>				
</head>

<body style="margin: 0px;border: 0px;padding:0px;">

	<!-- header -->
	<?php include "includes/s_header.php" ?>

	<!-- footer -->
	<div style="height:600px;width:100%;background-color: black;">

		<!-- span 01 -->
		<?php include "includes/s_navbar.php" ?>

		<!-- span 02 -->
		<span style="width:55%;height:100%;background-color: #ffffff;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">				
		    <div id="map" style="height:100%;width:100%;"></div>

		    <script>
		      function initMap() {
		        var a=(6.934351);
		        var b=(79.842824);
		        var i=1;
		        var uluru = {lat: a, lng: b};
		        var map = new google.maps.Map(document.getElementById('map'), {zoom: 7,center: uluru});        

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
		</span>

		<!-- span 03 -->
		<span style="width:30%;height:100%;background-color: #F0F0F0;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">
			
		</span>

	</div>
	<!-- footer -->
	<?php include "includes/s_footer.php" ?>
		
</body>

</html>