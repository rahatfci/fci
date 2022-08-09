<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="<?=$base_url?>/admin" class="brand-link">
      <img src='<?=$base_url?>/asset/images/fci.png' alt="FGCI Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FGCI Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=$base_url?>/asset/images/users/<?=$_SESSION['img_path']?>" class="elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$_SESSION['name']?></a>
        </div>
                <a class="nav-link" href="<?=$base_url?>/admin/logout" role="button"><i class="fas fa-sign-out-alt"></i></a>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item ">
            <a href="<?=$base_url?>/admin/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$base_url?>/admin/notice" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Notice
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=$base_url?>/admin/events" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Events
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link disabled">
              <i class="nav-icon fas fa-poll"></i>
              <p>
                Result
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>
  </aside>