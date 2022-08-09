<?php
	$sql = "SELECT * FROM event WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
?>
<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Events</h3>
	</div>
	<div class="card-body" style="padding: 15px">
		<div class="row" style="margin: 0">
			<?php while($row = mysqli_fetch_object($query)){?>
			<div class="col-xl-4 col-md-6 col-12 event-all general-text">
				<div class="card">
					<div class="card-header">
						<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid">
					</div>
					<div class="card-body">
						<a href="<?=$base_url?>/event-open/<?=$row->id?>">
							<h5><?=$row->title?></h5>
							<p>
								<?php 
								for ($i=0; $i < 400; $i++) { 
									echo $row->description[$i];
								} 
								echo "............";
								?>
							</p>
						</a>
					</div>	
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</div>