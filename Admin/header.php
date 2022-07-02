<!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><p>Tra Cứu Phòng</p></a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
              <p>Tra Cứu Phòng</p>
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="https://scontent.fdad1-2.fna.fbcdn.net/v/t1.6435-9/51679979_1165178986979131_2802567753796419584_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=TtBWTGyrAewAX-na4xW&_nc_ht=scontent.fdad1-2.fna&oh=00_AT-1n2EEuAtOa3gnVvdMGvaZqGzlMt-tLYFm9H8bpoXMig&oe=62D96304" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"> Xin chào, 
                        <?php 
                            if(session_id() === ''){
                                session_start(); 
                            }
                            echo $_SESSION['TenTaiKhoan'];
                        ?>
                  </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../login.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Đăng xuất </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>