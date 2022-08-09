<?php
	$sql = "SELECT * FROM notice_board WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
	$total = mysqli_num_rows($query);
?>
<div class="card" style="border-radius: 0">
	<div class="card-header custom-card-header">
		<h3 class="text-center">Notice Board</h3>
	</div>
	<div class="card-body" style="padding: 15px;">
		<table class="table table-bordered table-striped notice" style="margin: 0;">
			<thead class="text-center">
				<tr>
					<th>Date</th>
					<th>Notice</th>
					<th class="d-none d-md-block">Option</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if($total>=4){
						while($total>0){
							$total--;
							$row = mysqli_fetch_object($query);?>
							<tr>
					<td class="text-center" style="letter-spacing: 1px; cursor: default;">
						<?=$row->date?>
					</td>
					<td style="padding-left: 2.5%;">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" target="blank"><?=$row->title?></a>
					</td>
					<td style="text-align: center;" class="d-none d-md-block">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" download="<?=$row->title?>">Download</a>
					</td>
				</tr>
						<?php }
					}else{
						while($total>0){
							$total--;
							$row = mysqli_fetch_object($query);?>
							<tr>
					<td class="text-center" style="letter-spacing: 1px; cursor: default;">
						<?=$row->date?>
					</td>
					<td style="padding-left: 2.5%;">
						<a href="<?=$base_url?>/asset/images/notice/<?=$row->description?>" target="blank"><?=$row->title?></a>
					</td>
					<td style="text-align: center;" class="d-none d-md-block">
						<a href="<?=$base_url?>/asset/images/notice/<?=$row->description?>" download="<?=$row->title?>">Download</a>
					</td>
				</tr>
						<?php }
					}
				?>
			</tbody>
		</table>
		<div class="text-center" style="padding-top: 8px; padding-bottom: 1.25rem;">
			<a href="<?=$base_url?>/notice-all" class="btn btn-custom">All Notice</a>	
		</div>
	</div>
</div>
