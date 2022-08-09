<?php
	$sql = "SELECT * FROM photo_gallery WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
	$count=0;
?>

<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Photo Gallery</h3>
	</div>
	<div class="card-body" style="padding: 15px 4px">
		<div class="row" style="margin: 0">
	<?php	while ($row = mysqli_fetch_object($query)) {?>
			<div class="col-md-4 col-sm-6" style="padding:5px 6px">
				<div style="border-bottom: 25px solid #fdfdfd;box-shadow: 0 0 3px .3px #2991F6; border-radius: 5px;">
					<div class="photo-gallery">
						<img src="<?=$base_url?>/asset/images/<?=$row->image?>">
						<a href="<?=$base_url?>/asset/images/<?=$row->image?>" target="blank" class="view-photo">
							<i class="fa fa-search"></i>
							<span>View</span>
						</a>
					</div>
				</div>
				
			</div>
	<?php }?>
		</div>	
	</div>
</div>