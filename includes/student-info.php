<div class="card col-md-8 m-auto" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Student Info</h3>
	</div>
	<div class="card-body office-staff" style="padding: 15px;">
<?php
	if(isset($_POST['submit'])){
		$department = $_POST['department'];
		$semester = $_POST['semester'];
		$sql = "SELECT * FROM student_info WHERE department='$department' and semester='$semester'";
		$query = mysqli_query($conn,$sql);?>
		<div class="row">
		<?php while($row = mysqli_fetch_object($query)){?>
		<div class="col-md-6 col-12 general-text mb-3">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-4 col-5">
							<img src="<?=$base_url?>/asset/images/<?=$row->img?>">	
						</div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-7 info">
							<span><b>Name: </b><?=$row->name?></span>
							<span><b>Roll: </b><?=$row->roll?></span>
							<span><b>Session: </b><?=$row->session?></span>
							<div id="more-info">
								<a href="<?=$base_url?>/student-info-open/<?=$row->id?>">More info</a>
							</div>
						</div>	
					</div>
				</div>	
			</div>
		</div>
		<?php }?>
	</div>
</div>
<div class="col-12 text-center my-3	">
	<a href="<?=$base_url?>/student-info" class="btn btn-custom m-auto">Search again</a>
</div>
<?php }else{?>
		<div class="card selection-form">
			<div class="card-body">
				<h6>Select department and semester</h6>
				<form class="form-horizontal" action="" method="post">
					<div class="row" style="margin: 0">
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