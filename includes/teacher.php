<div class="card col-md-7 m-auto" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">About Teachers</h3>
	</div>
	<div class="card-body office-staff" style="padding: 15px;">
<?php
	if(isset($_POST['submit'])){
		$department = $_POST['department'];
		$sql = "SELECT * FROM teacher WHERE department='$department'";
		$query = mysqli_query($conn,$sql);?>
		<div class="row">
		<?php while($row = mysqli_fetch_object($query)){?>
		<div class="col-md-6 general-text mb-3">
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-4 col-5">
							<img src="<?=$base_url?>/asset/images/<?=$row->img?>">	
						</div>
						<div class="col-lg-7 col-md-6 col-sm-8 col-7 info">
							<span id="name"><?=$row->name?></span>    
							<span><?=$row->designation?></span>
							<span><?=$row->mobile?></span>
							<div>
								<a href="<?=$row->fb_id?>"><i class="fa fa-facebook"></i></a>
							</div>
						</div>	
					</div>
				</div>	
			</div>
		</div>
		<?php }?>
		</div>
	</div>
<div class="col text-center my-3	">
	<a href="<?=$base_url?>/teacher" class="btn btn-custom m-auto">Search again</a>
</div>
<?php }else{?>
		<div class="card selection-form">
			<div class="card-body">
				<h6>Select department</h6>
				<form class="form-horizontal" action="" method="post">
					<div class="form-group col">
						<label class="form-label">Department :</label>
						<select class="form-control" name="department">
							<option>Computer Science Technology</option>
							<option>Telecommunication Technology</option>
						</select>
					</div>
					<div class="col text-center" style="margin-top: 3%">
						<input type="submit" class="btn btn-custom" name="submit" value="Search">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php }
?>