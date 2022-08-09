<?php 
	$success='';
	$image_error='';
	if(isset($_POST["submit"])) {
      $target_dir = "../asset/images/notice/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        $uploadOk = 1;
      } else {
        $uploadOk = 0;
      }
      if (file_exists($target_file)) {
        $uploadOk = 0;
      }
  
      if ($uploadOk == 0) {
        $msg = "Something went wrong while  uploading image";
        echo("<script>location.href = '$base_url/admin/notice-add';</script>");
      } else {
       
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          $title = $_POST['title'];
          $description = basename( $_FILES["fileToUpload"]["name"]); 
          $sql="INSERT INTO notice_board (title, description) VALUES ('$title','$description')";
          mysqli_query($conn,$sql);
          echo("<script>location.href = '$base_url/admin/notice';</script>");
        } else {
          $msg = "Something went wrong while  uploading image";
          echo("<script>location.href = '$base_url/admin/notice-add';</script>");
        }
        }
      
	}
?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Add Notice</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?=$base_url?>/admin">Home</a></li>
          <li class="breadcrumb-item active">Add Notice</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<div class="card col-xl-10 offset-xl-1">
	<div class="card-body">
		<p class="success_title"><?=$success;?></p>
		<form  action="" method="post" class="form-horizontal" enctype="multipart/form-data">
			<div class="form-group">
				<div class="row">
					<label class="form-label col-xl-2">Title</label>
					<input class="form-control col-xl-10" type="text" name="title" required>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<label class="form-label col-xl-2">File</label>
					<input type="file" class="form-control col-xl-10" name="fileToUpload" id="fileToUpload" required/>
					<p class="error_title offset-xl-2"><?=$image_error;?></p>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<button type="submit" class="offset-xl-5 btn btn-custom" name="submit"><span class="fa fa-plus"></span> Add Notice</button>
				</div>
			</div>
		</form>
	</div>
</div>