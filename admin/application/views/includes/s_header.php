<div class="container">	
	<div style="height:50px;width:100%;background-color: red;margin-bottom:1px;">
		<!-- span 01 -->
		<span class="navblock" style="background-color: #000000;width:15%">			
			<img src="<?php echo base_url()?>designs/icon/emr.png" style="width: 30px;height: 30px;margin: 0px 5px 0px 20px;">
			<span style="font-size: 20px;color: #ffffff;">EMR</span>
		</span>

		<!-- span 02 -->
		<span class="navblock" style="background-color: #000000;width:55%">			
			
		</span>
		
		<!-- span 03 -->
		<span class="navblock" style="background-color: #000000;width:20%">			
			<img src="<?php echo base_url()?>designs/icon/myaccount.png" style="width: 20px;height: 20px;margin: 0px 5px 0px 20px;">
			<span style="font-size: 15px;color: white;"><?php echo $this->session->userData('loggername')?></span>	
		</span>
		
		<!-- span 04 -->
		<form method="post" action="<?php echo base_url()?>index.php/Super/logout"> 
			<span class="navblock" style="background-color: #000000;width:10%">			
				<img src="<?php echo base_url()?>designs/icon/power.png" style="width: 20px;height: 20px;margin: 0px 5px 0px 20px;">			
				<!-- <span style="font-size: 15px;color: #14EA1A;"></span> -->
				<button type="submit" name="" style="font-size:15px;color:#14EA1A;background-color:#000000;padding:0px 2px;" class="button button1">Logout</button>
			</span>
		</form>				
	</div>
</div>
	