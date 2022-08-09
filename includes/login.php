<?php
  if(!empty($_SESSION['is_admin']) && $_SESSION['is_admin']==1){
    echo("<script>location.href = '$base_url/admin';</script>");
  }elseif(!empty($_SESSION['is_admin'])){
    echo("<script>location.href = '$base_url';</script>");
  }
  else{
    if(isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $query=mysqli_query($conn,$sql);// Query
        $is_member=mysqli_num_rows($query);// Numbers of rows
        $member_data=mysqli_fetch_object($query);// Get data 
        if($is_member==0){
          echo("<script>location.href = '$base_url/login;</script>");
        }else{  
          $_SESSION['name']=$member_data->name;
          $_SESSION['email']=$member_data->email;
          $_SESSION['img_path']=$member_data->img_path;
          $_SESSION['is_admin']=$member_data->is_admin;
          echo("<script>location.href = '$base_url/admin';</script>");
        }
      }

  }
?>
<div class="card col-md-7 m-auto" style="border-radius: 0;">
  <div class="card-header custom-card-header">
    <h3 class="text-center">Login</h3>
  </div>
  <div class="card-body general-text" style="padding: 15px">
    <div class="col-7 m-auto">
      <form action="" method="post">
        <div class="form-outline mb-2">
          <label class="form-label" for="form1Example1">Email address</label>
          <input type="email" name="email" class="form-control" />
        </div>

        <div class="form-outline mb-2">
          <label class="form-label" for="form1Example2">Password</label>
          <input type="password" name="password" class="form-control" />
        </div>

        <div class="row mb-3">
        <div class="col text-right">
            <a href="<?=$base_url?>/signup">Create an account</a>
          </div>
        </div>

        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</div>