<!DOCTYPE html>
<html>
<head>	
	<title>Super Administrator Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "includes/css.php" ?>	<!-- css files -->		
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
			<div class="topic" style="margin: 8% 0% 0% 13%;">
				<span>
					<u>Home</u>
				</span>						
			</div>

			<form method="post" action="customer.php">
				<div style="margin: 4% 0px 0px 10%;">
					<a href="<?php echo base_url()?>index.php/Super/loadHome" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/home.png" class="imghome"></span></a>
					<a href="<?php echo base_url()?>index.php/Super/loadSuperAdmin" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/myaccount.png" class="imghome"></span></a>
					<a href="<?php echo base_url()?>index.php/Super/loadSuperAdmin" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/super.png" class="imghome"></span></a>
					<a href="<?php echo base_url()?>index.php/Super/loadAreaAdmin" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/area.png" class="imghome"></span></a>			
				</div>

				<div style="margin: 0px 0px 0px 10%;">
					<a href="#" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/rates.png" class="imghome"></span></a>
					<a href="#" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/analytics.png" class="imghome"></span></a>
					<a href="#" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/notifications.png" class="imghome"></span></a>
					<a href="#" class="white_link"><span><img src="<?php echo base_url()?>/designs/icon/settings.png" class="imghome"></span></a>			
				</div>
			</form>				
		</span>

		<!-- span 03 -->
		<span style="width:30%;height:100%;background-color: #F0F0F0;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">
			
		</span>

	</div>
	<!-- footer -->
	<?php include "includes/s_footer.php" ?>
		
</body>

</html>