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
			<form method="POST" action="<?php echo base_url()?>index.php/Super/addSuperAdmin">
				<div class="topic">
					<span><u>Super Admin Account</u></span>						
				</div>

				<table  class="form_table ">
					<tr class="form_table_row">
						<td class="form_table_row_description">Super Admin ID</td>
						<td><input type="text" name="id" placeholder="super admin id" size="40" class="form_table_row_input" maxlength="10" disabled="true"></td>
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
						<td class="form_table_row_description">Password</td>
						<td><input type="text" name="password" placeholder="password" size="40" class="form_table_row_input" maxlength="20" required=""></td>
					</tr>	

					<tr class="form_table_row" >
						<td class="form_table_row_description">Pin</td>
						<td><input type="text" name="pin" placeholder="security code" size="40" class="form_table_row_input" maxlength="10" required=""></td>
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description">Reset Code</td>
						<td><input type="text" name="resetCode" placeholder="reset code" size="40" class="form_table_row_input" maxlength="10" required=""></td>
					</tr>
					
					<tr class="form_table_row">
						<td class="form_table_row_description">Created By</td>
						<td><input type="text" name="createdBy" placeholder="created by" size="40" class="form_table_row_input" required="" disabled ></td>	
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description"></td>
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;">Register</button>					
						</td>
					</tr>						
				</table>
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