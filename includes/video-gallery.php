<?php
	$sql = "SELECT * FROM video_gallery ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
	$count=0;
?>

<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Video Gallery</h3>
	</div>
	<div class="card-body" style="padding: 15px 4px">
		<div class="row" style="margin: 0">
	<?php	while ($count<3) {
			$count++; 
			$row = mysqli_fetch_object($query); ?>
			<div class="col-lg-4 col-sm-6" id="<?php echo'item'.$count;?>" style="padding:5px 6px">
				<div style="border-bottom: 25px solid #fdfdfd;box-shadow: 0 0 3px .3px #2991F6; border-radius: 5px;">
					<div class="photo-gallery">
						<iframe width="100%" height="210" src="https://www.youtube.com/embed/<?=$row->video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
	<?php }?>
		</div>
		<div class="text-center" style="padding-top: 10px;">
			<a href="<?=$base_url?>/video-all" class="btn btn-custom">All Videos</a>	
		</div>		
	</div>
</div>
