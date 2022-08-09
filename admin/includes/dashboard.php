<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $sql = "SELECT COUNT(id) as total FROM teacher";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_object($query);
                ?>
                <h3><?=$row->total?></h3>

                <p>Total Teachers</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $sql = "SELECT COUNT(id) as total FROM student_info";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_object($query);
                ?>
                <h3><?=$row->total?></h3>

                <p>Total Students</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $sql = "SELECT COUNT(id) as total FROM office_staff";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_object($query);
                ?>
                <h3 style="color: white"><?=$row->total?></h3>

                <p style="color: white">Total Stuffs</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="#" class="small-box-footer" style="color: white !important" >More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>10</h3>

                <p>Total Lab Assistants</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>