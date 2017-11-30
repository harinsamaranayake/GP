<span style="width:30.00%;height:100%;background-color: #ffffff;display:inline-block;float: left;margin: 0px;border: 0px;padding: 0px;">	
	<div class="topic" style="margin: 20px;">
		<span style="color: #000000">
			<label class="radio-inline"><input type="radio" name="optradio"><h6 style="display: inline-block;">NIC</h6></label>
			<label class="radio-inline"><input type="radio" name="optradio"><h6 style="display: inline-block;">Mobile</h6></label>
			<label class="radio-inline"><input type="radio" name="optradio"><h6 style="display: inline-block;">Email</h6></label>
			<input type="text" name="" size="10" display="inline-block" class="form-control">
			<button type="button" display="inline-block" class="btn btn-primary">search</button>
		</span>						
	</div>

	<div class="table-responsive">
		<form method="post" action="customer.php">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Mobile</th>
						<th>Email</th>
					</tr>												
				</thead>
				<tbody>
				
				<?php 
					$count =1;
					foreach ($tableData as $row) {
				?>				
			
					<!-- <tr data-id=<?php echo $row->superAdminId;?> onclick="myFunction(this)"> -->
					<tr data-id=<?php echo $row->superAdminId;?> data-toggle="modal" data-target="#myModal"> 
						<td><?php echo $row->superAdminId;?></td>						
						<td><?php echo $row->mobile;?></td>
						<td><?php echo $row->email;?></td>											
					</tr>

				<?php
					$count+=1;
					} 
				?>

				<script type="text/javascript">
					function myFunction(x){
						var modal = document.getElementById('myModal');
						modal.style.display="block";
					}
				</script>

				</tbody>															
			</table>
		</form>
	</div>
</span>