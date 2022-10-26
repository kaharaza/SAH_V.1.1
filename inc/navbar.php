  <?php   $fire_name = basename($_SERVER['SCRIPT_FILENAME'],".php") ?>
  <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
  <!-- Spinner End -->
    
    <!-- Topbar Start -->
    <div class="container-fluid bg-sky  p-0">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-9 px-5 text-start text-light">
          <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
            <small class="fa fa-phone-alt me-2"></small>
            <small>053-948031, 053-948112</small>
          </div> 
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-envelope-open me-2"></small>
            <small>sah.fvm.cmu@gmail.com</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-clock me-2"></small>
            <small>วันจันทร์ - วันอาทิตย์ : 08.00 - 20.00 น.</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center border-end px-3">
            <small class="far fa-clock me-2"></small>
            <small>ฉุกเฉินเปิดตลอด : 24 ชั่วโมง (053-948032) ติดต่อได้หลังเวลา 20.00 น.</small>
          </div>
        </div>
        <div class="col-lg-3 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center ">
            <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f text-light"></i> 
            </a><a class="btn btn-square border-end" href=""><i class="fab fa-instagram text-light"></i></a>
            <a class="btn btn-square border-end" href=""><i class="fa-brands fa-line text-light"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->
  <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-sky navbar-dark sticky-top px-2 px-lg-5 py-lg-0">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h5 class="m-0 cuttom-iconlogo">
          <img src="assets/images/logo/logoSahcmu.png"  alt="">
        </h5>
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-3 py-lg-0">
            <a  class="nav-item nav-link <?php echo $fire_name == 'index' ? 'active': '' ?>" href="index.php" ><i class="fa-solid fa-house"></i> หน้าหลัก</a>
            <a class="nav-item nav-link <?php echo $fire_name == 'about' ? 'active': '' ?> " href="about.php" ><i class="fa-solid fa-hospital"></i> เกี่ยวกับเรา</a>
            <a class="nav-item nav-link <?php echo $fire_name == 'personnel' ? 'active': '' ?>" href="personnel.php" ><i class="fa-solid fa-user"></i> บุคลากร</a>
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle <?php echo $fire_name == 'specialized-1' 
                                                          || $fire_name == 'specialized-2' 
                                                          || $fire_name == 'specialized-3'
                                                          || $fire_name == 'specialized-4'
                                                          || $fire_name == 'specialized-5'
                                                          || $fire_name == 'specialized-6'
                                                          || $fire_name == 'specialized-7'
                                                          || $fire_name == 'specialized-8'
                                                          || $fire_name == 'specialized-9'
                                                          || $fire_name == 'specialized-10'
                                                          || $fire_name == 'specialized-11'
                                                          || $fire_name == 'specialized-12'
                                                          || $fire_name == 'specialized-13'
                                                          || $fire_name == 'specialized-14'
                                                          || $fire_name == 'specialized-15' 
                                                          || $fire_name == 'med' 
                                                          || $fire_name == 'surgery-1'
                                                          || $fire_name == 'surgery-2'
                                                          || $fire_name == 'surgery-3'
                                                          || $fire_name == 'surgery-4'
                                                          || $fire_name == 'surgery-5'
                                                          || $fire_name == 'xray'
                                                          ? 'active': '' ?>" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-bell-concierge"></i> บริการของเรา</a>
              <div class="dropdown-menu bg-sky m-0">
                <a  class="dropdown-item text-light <?php echo $fire_name == 'med' ? 'active': '' ?>" href="med.php">อายุรกรรมทั่วไป</a>
                <a class="dropdown-item text-light <?php echo $fire_name == 'specialized-1' 
                                                          || $fire_name == 'specialized-2' 
                                                          || $fire_name == 'specialized-3'
                                                          || $fire_name == 'specialized-4'
                                                          || $fire_name == 'specialized-5'
                                                          || $fire_name == 'specialized-6'
                                                          || $fire_name == 'specialized-7'
                                                          || $fire_name == 'specialized-8'
                                                          || $fire_name == 'specialized-9'
                                                          || $fire_name == 'specialized-10'
                                                          || $fire_name == 'specialized-11'
                                                          || $fire_name == 'specialized-12'
                                                          || $fire_name == 'specialized-13'
                                                          || $fire_name == 'specialized-14'
                                                          || $fire_name == 'specialized-15' 
                                                          ? 'active': '' ?>" href="" data-bs-toggle="modal" data-bs-target="#VetModal">คลินิกเฉพาะทาง</a>

                <a  class="dropdown-item text-light <?php echo $fire_name == 'surgery-1' 
                                                          || $fire_name == 'surgery-2' 
                                                          || $fire_name == 'surgery-3'
                                                          || $fire_name == 'surgery-4'
                                                          || $fire_name == 'surgery-5' 
                                                          ? 'active': '' ?>" href="" data-bs-toggle="modal" data-bs-target="#surgery">ศัลยกรรม</a>

                <a href="ward.php" class="dropdown-item text-light <?php echo $fire_name == 'ward' ? 'active': '' ?>">หออภิบาลสัตว์ป่วย</a>
                <a href="emergency.php" class="dropdown-item text-light <?php echo $fire_name == 'emergency' ? 'active': '' ?>">หน่วยฉุกเฉิน</a>
                <a href="lab.php" class="dropdown-item text-light <?php echo $fire_name == 'lab' ? 'active': '' ?>">ห้องปฏิบัติการ</a>
                <a href="xray.php" class="dropdown-item text-light <?php echo $fire_name == 'xray' ? 'active': '' ?> ">ทัศนวินิจฉัย</a>
              </div>
            </div>
            <a href="research.php" class="nav-item nav-link <?php echo $fire_name == 'research' ? 'active': '' ?> "><i class="fa-brands fa-blogger"></i> ผลงานวิจัย</a>
            <a href="contact.php" class="nav-item nav-link"><i class="fa-regular fa-id-badge"></i> ติดต่อเรา</a>
            <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa-solid fa-language"></i> ภาษา</a>
              <div class="dropdown-menu bg-sky m-0">
                <a href="" class="dropdown-item text-light">TH</a>
                <a href="" class="dropdown-item text-light">EN</a>
              </div>
            </div>
          </div>
        </div>
    </nav>
  <!-- Navbar End -->