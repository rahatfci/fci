<?php
	if(isset($_POST['remove'])){
		$sql="DELETE FROM notice_board WHERE id=$_POST[remove]";
		mysqli_query($conn,$sql);
		unlink("../asset/images/notice/$_POST[file_name]");
	}
	$sql = "SELECT * FROM notice_board WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Notice Board</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$base_url?>/admin">Home</a></li>
          <li class="breadcrumb-item active">Notice</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="card" style="border-radius: 0; margin-left: 20; margin-right: 20;">
	<div class="card-body" style="padding: 15px;">
		<form action="" method="post">
			<div style="padding-top: 8px; padding-bottom: 1.25rem;">
				<a href="<?=$base_url?>/admin/notice-add" class="btn btn-custom"><span class="fa fa-plus"></span>  Add Notice</a>	
			</div>
			<table class="table table-bordered table-striped notice" style="margin: 0;">
				<thead class="text-center">
					<tr>
						<th>Date</th>
						<th>Notice</th>
						<th class="d-none d-md-block">Option</th>
					</tr>
				</thead>
				<tbody>
					<?php	while($row=mysqli_fetch_object($query)){?>
					<tr>
						<td class="text-center" style="letter-spacing: 1px; cursor: default;">
							<?=$row->date?>
						</td>
						<td style="padding-left: 2.5%;">
							<a href="<?=$base_url?>/asset/images/notice/<?=$row->description?>" target="blank"><?=$row->title?></a>
						</td>
						<td style="text-align: center;" class="d-none d-md-block">
							<a href="<?=$base_url?>/asset/images/notice/<?=$row->description?>" download="<?=$row->title?>">Download</a>
							<input type="hidden" name="file_name" value="<?=$row->description?>">
							<button name="remove" value="<?=$row->id?>" class="btn btn-danger" style="padding: 2 12;">Delete</button>
						</td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</form>
	</div>
</div>










