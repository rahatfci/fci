<?php
	$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$url_segment = explode('/', $url);
	$id = $url_segment[4];
	$sql = "SELECT * FROM event WHERE id=$id";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_object($query);
?>
<div class="card event-open general-text" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3><?=$row->title?></h3>
	</div>
	<div class="card-body" style="padding: 15px">
		<div class="col-7 m-auto">
			<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid mb-4 mt-1">
		</div>
		<p><?=$row->description?></p>
	</div>
</div>