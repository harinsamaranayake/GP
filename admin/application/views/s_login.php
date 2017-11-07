<!doctype html>

<html>
	<head>
		<title>Login</title>
		<?php include "includes/css.php" ?>		
	</head>

	<body>
		<div align="center"; class="div2"; style="margin-top:10%;"><img src="<?php echo base_url()?>designs/icon/emr.png" alt="icon" width="70px" height="70px"></div>		

		<form method="post" action="<?php echo base_url()?>index.php/Super/login">
			<div align="center"; class="div2"><h4 class="h2-1">Super Admin Login</h4></div>

			<div class="div3" align="center";><input type="text" name="nic" placeholder="NIC"  class="in1"><br/></div>
			<div class="div3" align="center";><input type="password" name="password" placeholder="Password"  class="in1"></div>
			<div class="div3" align="center";><input type="password" name="pin" placeholder="Pin"  class="in1"></div>
					
			<div class="div3" align="center";><button type="submit" name="register" class="button button1" style="width: 15%">Login</button></div>
		</form>
		
		<div class="div3" align="center";><p class="p1">Forgotten password?</p></div>			
	</body>
</html>