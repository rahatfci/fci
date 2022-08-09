<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Class Routine</h3>
	</div>
	<div class="card-body" style="padding: 15px;">
<?php
	if(isset($_POST['submit'])){
		$department = $_POST['department'];
		$semester = $_POST['semester'];
		$sql = "SELECT * FROM routine WHERE department='$department' and semester='$semester' ORDER BY id DESC";
		$query = mysqli_query($conn,$sql);?>
		<table class="table table-bordered table-striped notice" style="margin: 0;">
			<thead class="text-center">
				<tr>
					<th>Session</th>
					<th>Routine</th>
					<th class="d-none d-md-block">Option</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while($row = mysqli_fetch_object($query)){
				?>
				<tr>
					<td class="text-center" style="letter-spacing: 1px; cursor: default;">
						<?=$row->session?>
					</td>
					<td style="padding-left: 2.5%; text-align: center;">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" target="blank"><?=$row->title?></a>
					</td>
					<td style="text-align: center;" class="d-none d-md-block">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" download>Download</a>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-12 text-center my-3	">
	<a href="<?=$base_url?>/routine" class="btn btn-custom m-auto">Search again</a>
</div>
<?php }else{?>
		<div class="card selection-form">
			<div class="card-body">
				<h6>Select your department and semester</h6>
				<form class="form-horizontal" action="" method="post">
					<div class="row">
						<div class="form-group col-lg-6">
							<label class="form-label">Department :</label>
							<select class="form-control" name="department">
								<option>Computer Science Technology</option>
								<option>Telecommunication Technology</option>
							</select>	
						</div>
						<div class="form-group col-lg-6">
							<label class="form-label">Semester :</label>
							<select class="form-control" name="semester">
								<option>First</option>
								<option>Second</option>
								<option>Third</option>
								<option>Fourth</option>
								<option>Fifth</option>
								<option>Sixth</option>
								<option>Seventh</option>
							</select>	
						</div>
					</div>
					<div class="row" style="margin-top: 3%">
						<div class="col-12 text-center">
							<input type="submit" class="btn btn-custom" name="submit" value="Search">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php }
?>