<?php include "includes/sheader.php" ?>
 	<?php include "includes/snavbar.php" ?>
		<span class="right">			
			<div class="window_container">
				<!-- main content -->
				<!-- ......................................................................... -->
				<!-- <form method="post" action="customer.php"> -->
				<?php if($this->session->flashdata('msg')){
					echo $this->session->flashdata('msg');
				}?>

				<?php echo form_open('Dashboard/sregister')?>
					<div class="topic">
						<span><u>Super Admin Account</u></span>						
					</div>

					<table  class="form_table ">
						<tr class="form_table_row">
							<td class="form_table_row_description">Super Admin ID</td>
							<td><input type="text" name="id" placeholder="super admin id" size="40" class="form_table_row_input" maxlength="10" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">NIC</td>
							<td><input type="text" name="nic" placeholder="nic"  size="40" class="form_table_row_input"  maxlength="10" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Telehone</td>
							<td><input type="text" name="telephone" placeholder="telephone" size="40" class="form_table_row_input" required=""></td>
						</tr>				

						<tr class="form_table_row">
							<td class="form_table_row_description">Mobile</td>
							<td><input type="text" name="mobile" placeholder="mobile" size="40" class="form_table_row_input" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Email</td>
							<td><input type="text" name="email" placeholder="email" size="40" class="form_table_row_input" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Username</td>
							<td><input type="text" name="username" placeholder="username" size="40" class="form_table_row_input" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Password</td>
							<td><input type="text" name="password" placeholder="password" size="40" class="form_table_row_input" maxlength="20" required=""></td>
						</tr>	

						<tr class="form_table_row" >
							<td class="form_table_row_description">Security Code</td>
							<td><input type="text" name="securityCode" placeholder="security code" size="40" class="form_table_row_input" maxlength="10" required=""></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Reset Code</td>
							<td><input type="text" name="resetCode" placeholder="reset code" size="40" class="form_table_row_input" maxlength="10" required=""></td>
						</tr>
						
						<tr class="form_table_row">
							<td class="form_table_row_description">Created By</td>
							<td><input type="text" name="creator" placeholder="created by" size="40" class="form_table_row_input" required=""></td>	
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description"></td>
							<td>
								<button type="submit" name="register" class="button button1" style="margin-left: 10px;">Register</button>					
							</td>
						</tr>						
					</table>
				</form>
				<!-- ......................................................................... -->
			</div>
		</span>	

	</div>

	<?php include "includes/sfooter.php" ?>

</div>

</body>
</html>