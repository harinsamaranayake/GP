 	<?php include "includes/sheader.php" ?>
 	<?php include "includes/snavbar.php" ?>
 	
		<span class="right">			
			<div class="window_container">
				<!-- main content -->
				<!-- ......................................................................... -->
				<div class="topic">
					<span><u>New Account</u></span>						
				</div>

				<form method="post" action="customer.php">
					<table  class="form_table ">
						<tr class="form_table_row">
							<td class="form_table_row_description">Account Number</td>
							<td><input disabled type="text" name="nic" placeholder="account number" size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Customer NIC</td>
							<td><input type="text" name="lname" placeholder="nic"  size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Application Date</td>
							<td><input type="date" name="fname" placeholder="" size="40" class="form_table_row_input"></td>
						</tr>				

						<tr class="form_table_row">
							<td class="form_table_row_description">Contact Address</td>
							<td><input type="text" name="address_one" placeholder="address line one" size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description"></td>
							<td><input type="text" name="address_two" placeholder="address line two" size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description"></td>
							<td><input type="text" name="address_three" placeholder="address line three" size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Coordinates</td>
							<td>
								<input type="text" name="tp" placeholder="longitude" size="40" class="form_table_row_input" style="width: 23%;">
								<input type="text" name="tp" placeholder="lattitude" size="40" class="form_table_row_input" style="width: 23%;">						
							</td>
						</tr>			

						<tr class="form_table_row" >
							<td class="form_table_row_description">Telephone</td>
							<td><input type="text" name="residential_tp" placeholder="telephone" size="40" class="form_table_row_input"></td>
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Occupant Type</td>
							<td>
								<select class="form_table_row_dropdown" style="margin-left: 10px;width: auto;">
									<option>Owner</option>
									<option>Leaser</option>
								</select>
							</td>
						</tr>
						
						<tr class="form_table_row">
							<td class="form_table_row_description">Connectionn</td>
							<td>
								<input type="text" name="epf" placeholder="tarrif" size="40" class="form_table_row_input">
							</td>					
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description"></td>
							<td>
								<select class="form_table_row_dropdown" style="margin-left: 10px;">
									<option value="" disabled selected hidden>Phase</option>
									<option>1</option>
									<option>3</option>
								</select>

								<select class="form_table_row_dropdown" style="margin-left: 0px;">
									<option value="" disabled selected hidden>Amphere</option>
									<option>3A</option>
									<option>5A</option>
								</select>

								<select class="form_table_row_dropdown" style="margin-left: 0px;">
									<option value="" disabled selected hidden>Type</option>
									<option>E1</option>
									<option>E2</option>
								</select>
							</td>					
						</tr>

						<tr class="form_table_row">
							<td class="form_table_row_description">Created By</td>
							<td>
								<input disabled type="text" name="tp" placeholder="area administrator" size="20" class="form_table_row_input">
								<select class="form_table_row_dropdown" style="width: auto;">
									<option value="" disabled selected hidden>Area</option>
									<option>Biyagama</option>
									<option>Kottawa</option>
									<option>Awissawella</option>
								</select>
							</td>
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
