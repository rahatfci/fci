<?php
	$sql = "SELECT * FROM event WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
?>

<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Events</h3>
	</div>
	<div class="card-body" style="padding: 15px">
		<div class="col-md-8 float-left" id="event-focus" style="overflow: hidden; padding: 0">
			<?php $row = mysqli_fetch_object($query);?>
			<a href="<?=$base_url?>/event-open/<?=$row->id?>">
				<div class="event">
					<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid">
					<span><?=$row->title?></span>
				</div>
			</a>
		</div>
		<div class="col-md-4 float-right" id="event-ex" style="margin-bottom: 1.69%; overflow: hidden; padding-left: 1.7%; padding-right: 0">
			<?php $row = mysqli_fetch_object($query);?>
			<a href="<?=$base_url?>/event-open/<?=$row->id?>">
				<div class="event">
					<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid">
					<span><?=$row->title?></span>	
				</div>
			</a>
		</div>
		<div class="col-md-4 float-right" id="event-ex" style="overflow: hidden; padding-left: 1.7%; padding-right: 0">
			<?php $row = mysqli_fetch_object($query);?>
			<a href="<?=$base_url?>/event-open/<?=$row->id?>">
				<div class="event">
					<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid">
					<span><?=$row->title?></span>	
				</div>				
			</a>
		</div>
		<div style="clear: both;"></div>
		<div class="text-center" style="padding-top: 8px;">
			<a href="<?=$base_url?>/event-all" class="btn btn-custom">All Events</a>	
		</div>
	</div>
</div>