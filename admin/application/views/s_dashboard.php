<!DOCTYPE html>
<html>
<head>	
	<title>Super Administrator Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css files -->
	<?php include "includes/css.php" ?>	
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 80%;
		    margin-left: 50px;
		    margin-top: 20px;
		    border: 1px solid #CAEAFF;		    
		}

		th {
		    border: 1px solid #CAEAFF;
		    text-align: left;
		    padding: 8px;
		    background-color: #3498DB;
		    color: #ffffff;
		}

		td {
		    border: 1px solid #CAEAFF;
		    text-align: left;
		    padding: 2px;		    
		}

		tr:nth-child(even){
			background-color: #EDF7FD;
		}		

		tr:hover{
			background-color: #A7E9F9;
		}
	</style>		
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
			
		</span>

		<!-- span 03 -->
		<span style="width:30%;height:100%;background-color: #F0F0F0;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">
			
				<div class="header" style="padding: 20px 50px;">
					<span><u>Customers</u></span>						
				</div>

				<form method="post" action="customer.php">
					<table>
						<tr>
							<th class="form_table_row_description">ID</th>
							<th class="form_table_row_description">NIC</th>
							<th class="form_table_row_description">Name</th>
												
						</tr>
						
					<?php foreach ($superAdminData as $row) {?>				
						<tr>
							<td class="form_table_row_description"><?php echo $row->superAdminId;?></td>						
							<td class="form_table_row_description"><?php echo $row->nic;?></td>
							<td class="form_table_row_description"><?php echo $row->telephone;?></td>													
						</tr>
					<?php } ?>																	
					</table>
				</form>
			
		</span>

	</div>
	<!-- footer -->
	<?php include "includes/s_footer.php" ?>
		
</body>

</html>