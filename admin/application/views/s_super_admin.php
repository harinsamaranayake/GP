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

	<!-- body -->
	<div style="height:600px;width:100%;background-color: black;">

		<!-- span 01 -->
		<?php include "includes/s_navbar.php" ?>

		<!-- span 02 -->
		<span style="width:55.00%;height:100%;background-color: #ffffff;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">
			<form method="POST" action="<?php echo base_url()?>index.php/Super/superAdmin">
				<div class="topic">
					<span><u>Register Super Admin Account</u></span>						
				</div>

				<table  class="form_table ">
					<tr class="form_table_row">
						<td class="form_table_row_description">New Admin ID</td>
						<td>
							<input type="text" name="id" placeholder="super admin id" size="40" class="form_table_row_input" maxlength="10"  value="<?php echo $max+1; ?>">							
						</td>
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description">NIC</td>
						<td><input type="text"  name="nic" placeholder="nic" size="40" class="form_table_row_input"  maxlength="10" required="" pattern="[0-9]{9}[V]{1}" title="enter the nic"></td>
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description">Telehone</td>
						<td><input type="text" name="telephone" placeholder="telephone" size="40" class="form_table_row_input" maxlength="20" required="" pattern="[0-9]{5,}" title="enter the telephone number"></td>
					</tr>				

					<tr class="form_table_row">
						<td class="form_table_row_description">Mobile</td>
						<td><input type="text" name="mobile" placeholder="mobile" size="40" class="form_table_row_input" maxlength="20" required="" pattern="[0-9]{5,}" title="enter the mobile number"></td>
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description">Email</td>
						<td><input type="email" name="email" placeholder="email" size="40" class="form_table_row_input" maxlength="50" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="enter the email"></td>
					</tr>					

					<tr class="form_table_row">
						<td class="form_table_row_description">Password</td>
						<td><input type="password" name="password" placeholder="password" size="40" class="form_table_row_input" maxlength="20" required="" pattern="{5,}"></td>
					</tr>	

					<tr class="form_table_row" >
						<td class="form_table_row_description">Pin</td>
						<td><input type="password" name="pin" placeholder="security code" size="40" class="form_table_row_input" maxlength="10" required="" pattern="[0-9]{4}"></td>
					</tr>
							
					<tr class="form_table_row">
						<td class="form_table_row_description">Created By</td>
						<td><input type="text" name="createdBy" placeholder="created by" size="40" class="form_table_row_input" required="" disabled value="<?php echo $this->session->userData('loggerId') ?>"></td>	
					</tr>

					<tr class="form_table_row">
						<td class="form_table_row_description"></td>
						<td>
							<button type="submit" name="formSubmitButton" class="button button1" style="margin-left: 10px;" value="1">Register</button>
							<button type="submit" name="formSubmitButton" class="button button1" style="margin-left: 10px;" value="2">Update</button>
							<button type="submit" name="formSubmitButton" class="button button1" style="margin-left: 10px;" value="3">Delete</button>		
						</td>
					</tr>						
				</table>
			</form>
		</span>

		<!-- span 03 -->
		<?php include "includes/s_table.php" ?>

	</div>

	<!-- footer -->
	<?php include "includes/s_footer.php" ?>

	<!-- modal -->
	<?php include "includes/s_modal.php" ?>

</body>

</html>