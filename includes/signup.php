<?php
if(!empty($_SESSION['is_admin']) && $_SESSION['is_admin']==1){
    echo("<script>location.href = '$base_url/admin';</script>");
  }elseif(!empty($_SESSION['is_admin'])){
    echo("<script>location.href = '$base_url';</script>");
  }
  else{
    if(isset($_POST["submit"])) {
      $target_dir = "asset/images/users/";
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
  
      if ($_FILES["fileToUpload"]["size"] > 500000) {
        $uploadOk = 0;
      }
  
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
        $uploadOk = 0;
      }
  
      if ($uploadOk == 0) {
        echo("<script>location.href = '$base_url/signup';</script>");
      } else {
        $sql="SELECT 'email' FROM 'users' WHERE email='$email'";
        $query=mysqli_query($conn,$sql);
        $is_used=mysqli_num_rows($query); 
        if($is_used>0){
          echo("<script>location.href = '$base_url/signup;</script>");
        }else{
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $img_path = basename( $_FILES["fileToUpload"]["name"]); 
          $sql="INSERT INTO users (name, email, password, img_path) VALUES ('$name','$email','$password', '$img_path')";
          mysqli_query($conn,$sql);
          $_SESSION['name']=$name;
          $_SESSION['email']=$email;
          $_SESSION['img_path']=$img_path;
          $_SESSION['is_admin']=0;
          echo("<script>location.href = '$base_url/admin';</script>");
        } else {
          echo("<script>location.href = '$base_url/signup;</script>");
        }
        }
      
      }
    }}
?>

<div class="card col-md-7 m-auto" style="border-radius: 0;">
  <div class="card-header custom-card-header">
    <h3 class="text-center">Sign Up</h3>
  </div>
  <div class="card-body general-text" style="padding: 15px">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-7 m-auto">
            <div class="form-outline mb-2">
              <input type="name" class="form-control" name="name" required/>
              <label class="form-label">Name</label>
            </div>
        </div>
        <div class="col-7 m-auto"><div class="form-outline mb-2">
          <input type="email" name="email" class="form-control" required/>
          <label class="form-label" >Email address</label>
        </div>
        </div>

        <div class="col-7 m-auto"><div class="form-outline mb-2">
          <input type="password" name="password" class="form-control" required/>
          <label class="form-label">Password</label>
        </div>
        </div>
        <div class="col-7 m-auto">
        <div class="form-outline mb-2">
          <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" required/>
          <label class="form-label">Image</label>
        </div>
        </div>
        <div class="col-7 m-auto">
        <div class="row mb-3">
          <div class="col text-right">
            <a href="<?=$base_url?>/login">Have an account? Login</a>
          </div>
        </div>
        </div>
        <div class="col-7 m-auto">
        <div>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>
        </div>
    </form>
  </div>
</div>