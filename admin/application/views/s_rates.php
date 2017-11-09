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
			<div class="topic">
				<span><u>Super Admin Account</u></span>						
			</div>

			<form method="post" action="customer.php">
				<table  class="form_table ">
					<tr class="form_table_row" style="height: 60px;">
						<td class="form_table_row_description" style="width: 200px;">Phase</td>
						<td><input type="text" name="nic" placeholder="id" size="10" class="form_table_row_input" disabled></td>
						<td><input type="text" name="nic" placeholder="phase" size="10" class="form_table_row_input"></td>
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
						</td>
					</tr>

					<tr class="form_table_row" style="height: 60px;">
						<td class="form_table_row_description" style="width: 200px;">Amphere</td>
						<td><input type="text" name="nic" placeholder="id" size="10" class="form_table_row_input" disabled></td>
						<td><input type="text" name="nic" placeholder="amphere" size="10" class="form_table_row_input"></td>
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
						</td>
					</tr>

					<tr class="form_table_row" style="height: 60px;">
						<td class="form_table_row_description" style="width: 200px;">Occupant Type</td>
						<td><input type="text" name="nic" placeholder="id" size="10" class="form_table_row_input" disabled></td>
						<td><input type="text" name="nic" placeholder="occupant" size="10" class="form_table_row_input"></td>
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
						</td>
					</tr>

					<tr class="form_table_row" style="height: 60px;">
						<td class="form_table_row_description" style="width: 200px;">Connection Type</td>
						<td><input type="text" name="nic" placeholder="id" size="10" class="form_table_row_input" disabled></td>
						<td><input type="text" name="nic" placeholder="connection" size="10" class="form_table_row_input"></td>
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
						</td>
					</tr>				

					<tr class="form_table_row" style="height: 60px;">
						<td class="form_table_row_description" style="width: 200px;">Area</td>
						<td><input type="text" name="nic" placeholder="id" size="10" class="form_table_row_input" disabled></td>
						<td>
							<select class="form_table_row_select" style="margin-left: 10px;width: 125px;">
								<option value="" disabled selected hidden>Province</option>
								<option>Western</option>
								<option>Sothern</option>
								<option>Nothern</option>
							</select>
						</td>
						<td>
							<select class="form_table_row_select" style="margin-left: 10px;width: 125px;">
								<option value="" disabled selected hidden>District</option>
								<option>Colombo</option>
								<option>Gampaha</option>
								<option>Kaluthara</option>
							</select>
						</td>
						<td><input type="text" name="nic" placeholder="area" size="10" class="form_table_row_input"></td>				
						<td>
							<button type="submit" name="register" class="button button1" style="margin-left: 10px;padding: 2px 10px;">Add</button>						
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