<?php
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url_segment = explode('/', $url);
	$id = $url_segment[3];
	$sql = "SELECT * FROM student_info WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_object($query);
?>
<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Student's Info</h3>
	</div>
	<div class="card-body" style="padding: 15px;">
		<div class="row">
			<div class="col-3 m-auto" style="padding: 0">
				<img src="<?=$base_url?>/asset/images/<?=$row->img?>" class="img-fluid" style="background: #f7f7f7; padding: 6px">
			</div>
			<div class="col-8 my-3" style="padding-left: 0">
				<table class="table table-bordered table-striped" style="margin: 0; font-family: sans-serif;">				
				</div>
				<tr>
					<th>Name</th>
					<td><?=$row->name?></td>
				</tr>
				<tr>
					<th>Roll</th>
					<td><?=$row->roll?></td>
				</tr>
				<tr>
					<th>Rgestration</th>
					<td><?=$row->registration?></td>
				</tr>
				<tr>
					<th>Session</th>
					<td><?=$row->session?></td>
				</tr>
				<tr>
					<th>Shift</th>
					<td><?=$row->shift?></td>
				</tr>
				<tr>
					<th>Date of Birth</th>
					<td><?=$row->date_of_birth?></td>
				</tr>
				<tr>
					<th>Father's Name</th>
					<td><?=$row->father_name?></td>
				</tr>
				<tr>
					<th>Mother's Name</th>
					<td><?=$row->mother_name?></td>
				</tr>
				<tr>
					<th>Blood Group</th>
					<td><?=$row->blood_group?></td>
				</tr>
			</table>
			</div>	
		</div>
	</div>
</div>