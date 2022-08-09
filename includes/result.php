<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Result</h3>
	</div>
	<div class="card-body" style="padding: 10px">
<?php
	if(isset($_POST['submit'])){
		$count = 0;
		$department = $_POST['department'];
		$semester = $_POST['semester'];
		$roll = $_POST['roll'];
		$sql = "SELECT * FROM student_info WHERE roll='$roll' and semester='$semester' and department='$department'";
		$query = mysqli_query($conn, $sql);
		$student_data = mysqli_fetch_object($query);
		$sql = "SELECT * FROM result WHERE roll='$roll' and semester='$semester'";
		$query = mysqli_query($conn, $sql);
		$gpa = mysqli_fetch_object($query);
		$sql = "SELECT * FROM subject WHERE department='$department' and semester='$semester'";
		$query = mysqli_query($conn, $sql);
		if(empty($gpa) || empty($student_data)){?>
			<h4 class="text-center">Sorry, No result found</h4>
		<?php }else{$grades = explode("/", $gpa->grade)?>
		<div class="result">
			<div class="result-header">
				<div class="result-logo">
					<img src="<?=$base_url?>/asset/images/fci.png" class="d-block img-fluid">
				</div>
				<p style="margin-bottom: 5px">Ministry of Education</p>
				<div class="result-line"></div>
				<p style="margin-bottom: 5px">Feni Computer Institute</p>
			</div>
			<div class="result-mid">
				<h5><?=$semester?> Semester Final Exam Result</h5>
				<table class="table table-striped table-bordered result-table">
					<tr>
						<td>Roll No:</td>
						<td><?=$student_data->roll?></td>
						<td>Name:</td>
						<td><?=$student_data->name?></td>
					</tr>
					<tr>
						<td>Department:</td>
						<td><?=$student_data->department?></td>
						<td>Father's name:</td>
						<td><?=$student_data->father_name?></td>
					</tr>
					<tr>
						<td>Semester:</td>
						<td><?=$student_data->semester?></td>
						<td>Mother's Name:</td>
						<td><?=$student_data->mother_name?></td>
					</tr>
					<tr>
						<td>Shift:</td>
						<td><?=$student_data->shift?></td>
						<td>Institute:</td>
						<td>Feni Govt. Computer Institute</td>
					</tr>
					<tr>
						<td>Result:</td>
						<?php
						if($gpa->result=="Passed"){?>
						 	<td class="text-success" style="font-weight: bold"><?=$gpa->result?></td>
						<?php } else{?>
						 	<td class="text-danger" style="font-weight: bold"><?=$gpa->result?></td>
						<?php }
						?>
						<td>GPA:</td>
						<td><?=$gpa->gpa?></td>
					</tr>
				</table>
			</div>
			<div class="result-bottom">
				<h5>Grade Sheet</h5>
				<table class="table table-striped table-bordered result-table">
					<tr>
						<th>Code</th>
						<th>Subject</th>
						<th>Grade</th>
					</tr>
					<?php 
					while($subject = mysqli_fetch_object($query)){?>
					<tr>
						<td><?=$subject->code?></td>
						<td><?=$subject->name?></td>
						<td><?=$grades[$count]?></td>
					</tr>
					<?php $count++; }?>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="col-12 text-center my-3	">
	<a href="<?=$base_url?>/result" class="btn btn-custom m-auto">Search again</a>
</div>
<?php }}else{?>
		<div class="card selection-form">
			<div class="card-body">
				<form class="form-horizontal" action="" method="post">
					<div class="row">
						<div class="form-group col-lg-5">
							<label class="form-label">Department :</label>
							<select class="form-control" name="department">
								<option>Computer Science Technology</option>
								<option>Telecommunication Technology</option>
							</select>	
						</div>
						<div class="form-group col-lg-3">
							<label class="form-label">Semester :</label>
							<select class="form-control" name="semester">
								<option>First</option>
								<option>Second</option>
								<option>Third</option>
							</select>	
						</div>
						<div class="form-group col-lg-4">
							<label class="form-label">Roll :</label>
							<input type="text" name="roll" class="form-control" required>
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