<?php
	$sql = "SELECT * FROM office_staff WHERE 1";
	$query = mysqli_query($conn, $sql);

?>
<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">About Office Staffs</h3>
	</div>
	<div class="card-body general-text office-staff" style="padding: 15px">
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
</div>