<?php
	if(isset($_POST['delete'])){
		if(!empty($_POST['check'])){
			$ids=$_POST['check'];
			$images = $_POST['image'];
			$total=count($ids);
			for($i=0;$i<$total;$i++){
				$sql="DELETE FROM event WHERE id='$ids[$i]'";
				mysqli_query($conn,$sql);
				unlink("../asset/images/event/$images[$i]");
			}
		}
		else{
			$error="Please choose at least one item";
		}
	}
	$sql = "SELECT * FROM event WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Events</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$base_url?>/admin">Home</a></li>
          <li class="breadcrumb-item active">Events</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<div class="card" style="border-radius: 0; margin-left: 20; margin-right: 20;">
	<div class="card-body" style="padding: 15px">
		<form action="" method="post">
			<div style="padding-top: 8px; padding-bottom: 1.25rem;">
				<a href="<?=$base_url?>/admin/event-add" class="btn btn-custom mr-2"><span class="fa fa-plus"></span>  Add Event</a>	

				<button class="btn btn-danger" type="submit" name="delete"><span class="fa fa-trash"></span>  Delete Events</button>	
			</div>
			<div class="row" style="margin: 0">
				<?php while($row = mysqli_fetch_object($query)){?>
				<div class="col-xl-4 col-md-6 col-12 event-all general-text">
					<div class="card">
						<div class="card-header">
							<label class="checkbox-container">
							  <input type="checkbox" name="check[]" value="<?=$row->id?>">
							  <span class="checkmark"></span>
							</label>
							<input type="hidden" name="image[]" value="<?=$row->image?>">
							<img src="<?=$base_url?>/asset/images/event/<?=$row->image?>" class="img-fluid">
						</div>
						<div class="card-body">
							<a href="<?=$base_url?>/admin/event-open/<?=$row->id?>">
								<h5><?=$row->title?></h5>
								<p>
									<?php 
									if (strlen($row->description)<400) {
										echo $row->description;
									}else{
										for ($i=0; $i < 400; $i++) { 
										echo $row->description[$i];
									}
									echo "............"; 
									}
								
									?>
								</p>
							</a>
						</div>	
					</div>
				</div>
				<?php }?>
			</div>
		</form>
	</div>
</div>