<?php
	$sql = "SELECT * FROM notice_board WHERE 1 ORDER BY id DESC";
	$query = mysqli_query($conn, $sql);
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
					while($row = mysqli_fetch_object($query)){
				?>
				<tr>
					<td class="text-center" style="letter-spacing: 1px; cursor: default;">
						<?=$row->date?>
					</td>
					<td style="padding-left: 2.5%;">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" target="blank"><?=$row->title?></a>
					</td>
					<td style="text-align: center;"  class="d-none d-md-block">
						<a href="<?=$base_url?>/asset/pdf/<?=$row->description?>" download="<?=$row->title?>">Download</a>
					</td>
				</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
</div>
