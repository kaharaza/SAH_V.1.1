<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAH.CMU</title>

    <!-- favicon -->
    <?php include_once('inc/meta.php')?>

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/cuttom.css">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"rel="stylesheet">
  
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    
    <!-- fortawesme -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    
</head>
    <style>
        
    </style>

<body>

    <!-- Navber -->
    <?php include_once ('inc/navbar.php') ?>
    <!-- Navbar End -->

    <!-- Modal Vet -->
    <?php include_once('inc/modal.php')?>
    <!-- Modal Vet end -->
    
      <!-- popup model -->
      <section class="container-fluid  ">
        <!-- Modal -->
        <div class="modal bg-sky fade" id="popup-modal" role="dialog">
          <div class="modal-dialog modal-xl">
            <!-- Modal content-->
            <div class="modal-content bg-sky">
              <div class="modal-header">
                <h5 class="text-white pt-3">ข่าวประชาสัมพันธ์</h5>
                <button type="button" class="btn btn-primary btn-sm close-btn justify-content-end " data-dismiss="modal">x</button>
              </div>
              <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="assets/images/pr/pet-taxi.png" class="d-block w-100 " alt="/">
                    </div>
                    
                   

                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon text-primary" aria-hidden="true"></span>
                    <span class="visually-hidden text-black">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>    
          </div>
        </div> 
      </section>
      <!-- End popup model -->
      
      <!-- Carousel Start -->
      <div class="container-fluid p-0  wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="ratio ratio-16x9">
              <video playsinline="playsinline" autoplay="autoplay" muted="muted"  loop="loop">
                <source src="assets/vdo/sancmu.mp4" type="video/mp4">
              </video>
            </div>
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      โรงพยาบาลสัตว์เล็ก โรงพยาบาลสัตว์มหาวิทยาลัยเชียงใหม่ 
                    </h1>
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item "></li>
                      <li class="breadcrumb-item fs-5 text-light">
                        คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่
                      </li>
                    </ol>
                    <a href="" class="btn btn-sky text-center" data-bs-toggle="modal" data-bs-target="#vdosah" >
                      <i class="fa-solid fa-play"></i>
                      <span>เล่นวิดีโอเต็ม</span> 
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <!-- Modal VDO -->
    <div class="modal fade blog-sky" id="vdosah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-sky">
          <div class="modal-header border-bottom border-sky">
            <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.youtube.com/embed/87rC3oVa5-o" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- contact -->
    <?php include_once('inc/contact.php')?>
    <!-- contact end -->

    <!-- Donation -->
    <div class="container-fluid client-content">
      <div class="container">
        <div class="row">
          <div class="donation col-lg-4  mx-auto text-center wow fadeInUp" data-wow-delay="0.3s">
            <a href="https://donate.cmu.ac.th/home/project-home-details/14/1" target="_blank" class="btn btn-sky ">
              <img class="img-thumbnail" src="assets/images/logo/logo-new-600x600-transformed.png"  alt="">
              <p class="text-center fw-bold pt-3">ใบเสร็จสามารถลดหย่อนภาษี 2 เท่า</p>
            </a>
          </div>
          <div class="col-lg-8 text-lg-start text-center mt-3 wow fadeInUp" data-wow-delay="0.3s">
            <h3 class="border-bottom mb-3 fw-bold text-light">โครงการบริจาคเงินเพื่อสมทบกองทุนสงเคราะห์สัตว์ในพระอุปถัมภ์ สมเด็จพระเจ้าพี่นางเธอ 
              เจ้าฟ้ากัลยาณิวัฒนา กรมหลวงนราธิวาสราชนครินทร์ คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่</h3>
              <div class="text-light ">
                <small>
                  <label>1. เพื่อสนับสนุนให้บริการรักษาพยาบาลแก่สัตว์ป่วยที่มารักษา ณ โรงพยาบาลสัตว์มหาวิทยาลัยเชียงใหม่ คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่ โดยเฉพาะสัตว์ป่วยทนทุกข์ทรมานที่เจ้าของไม่สามารถรับภาระต่อค่าใช้จ่ายทั้งหมดได้
                          <br>
                          2. เพื่อส่งเสริมและให้การสนับสนุนการศึกษาของบุคลากรเพี่อพัฒนาในการให้บริการที่มีประสิทธิภาพ พร้อมทั้งพัฒนาเทคโนโลยีที่ทันสมัย ตลอดจนการบำรุงรักษาวัสดุอุปกรณ์ต่าง ๆ
                          <br>
                          3. ดำเนินการเพื่อสาธารณประโยชน์หรือร่วมมือกับองค์กรอื่น ๆ เพื่อการกุศล</label>
                </small>
              </div>
              <div class="p-2  ">
                <a href="" class="btn btn-sky"><i class="fa-solid fa-image"></i> อัลบั้ม</a>
                <a href="https://donate.cmu.ac.th/home/project-home-details/14/1" class="btn btn-sky"><i class="fa-solid fa-circle-dollar-to-slot"></i> ร่วมบริจาคกองทุน</a>
                <a href="assets/images/donation/Donation.png" target="_blank" class="btn btn-sky"><i class="fa-solid fa-cloud-arrow-down"></i> Download Qr Code</a>
                <img src="assets/images/donation/Donation.png" alt="">
              
              </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- Donation End -->

    <!-- ตรารางเวลา --> 
    <section class="container-fluid bg-icon">
      <div class="container py-5">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
              <div class="border-start fw-bold   border-end border-5 border-primary text-center">
                <h6 class="blog-sky text-uppercase fw-bold  mb-2">ติดต่อสอบถามเพิ่มเติมได้ที่เบอร์ 053-948031, 053-948112 </h6>
                <h1 class="display-6 mb-0 fw-bold text-sky  ">
                  ตารางเวลาคลินิกเฉพาะทางโรงพยาบาลสัตว์เล็ก
                </h1>
              </div>
            </div>
          </div>
          <!-- คลิเฉพาะทาง -->
         
          <div class="container">
                
              <div class="row row-cols-1 row-cols-lg-5 row-cols-md-2 g-2 g-lg-3 g-4 justify-content-center">
                <!-- vet 1 -->
                <div class="col- wow fadeInUp" data-wow-delay="0.01s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">โรคผิวหนัง</h6>
                      <a href="specialized-1.php" type="button" class="btn btn-sky">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ผิวหนัง.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 1 -->

                <!-- vet 2 -->
                <div class="col wow fadeInUp" data-wow-delay="0.02s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">โรคตา </h6>
                      <a href="specialized-2.php" type="button" class="btn btn-sky" >
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ตา.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 2 -->

                <!-- vet 3  -->
                <div class="col wow fadeInUp" data-wow-delay="0.03s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ช่องปากและทันตกรรม </h6>
                      <a href="specialized-3.php" type="button" class="btn btn-sky">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ช่องปาก.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 3 -->

                <!-- vet 4 -->
                <div class="col wow fadeInUp" data-wow-delay="0.04s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">กระดูกและข้อต่อ </h6>
                      <a href="specialized-4.php" type="button" class="btn btn-sky" >
                        <img src="assets/images/icon คลินิกเฉพาะทาง/กระดูกและข้อ.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 4 -->  

                <!-- vet 5 --> 
                <div class="col wow fadeInUp" data-wow-delay="0.05s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">หัวใจและหลอดเลือด</h6>
                      <a href="specialized-5.php" type="button" class="btn btn-sky">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/หลอดเลือดและหัวใจ.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 5  -->  

                <!-- vet 6  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.06s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ระบบประสาทและสมอง</h6>
                      <a href="specialized-6.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ระบบประสาทและสมอง.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 6 -->

                <!-- vet 7  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.07s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">โรคแมว</h6>
                      <a href="specialized-7.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/แมว.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 7 -->

                <!-- vet 8  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.08s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">โรคเนื้องอก</h6>
                      <a href="specialized-8.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/เนื้องอก.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 8 -->

                <!-- vet 9  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.09s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">กายภาพบำบัด</h6>
                      <a href="specialized-9.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/กายภาพบำบัด.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 9 -->

                <!-- vet 10  --> 
                <div class="col wow fadeInUp" data-wow-delay=".1s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ฮอร์โมนและต่อมไร้ท่อ</h6>
                      <a href="specialized-10.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/คลินิกฮอร์โมนและต่อมไร้ท่อ.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 10 -->

                <!-- vet 11  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.11s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ระบบทางเดินอาหาร</h6>
                      <a href="specialized-11.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ถุงน้ำดี.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 11 -->

                <!-- vet 12  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.12s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">สัตว์เลี้ยงชนิดพิเศษ</h6>
                      <a href="specialized-12.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/exotic.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 12 -->
    
                <!-- vet 13  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.13s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ฝั่งเข็ม</h6>
                      <a href="specialized-13.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ฝังเข็ม.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 13 -->

                <!-- vet 14  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.14s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">โรคไต</h6>
                      <a href="specialized-14.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ไต.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 14 -->
              
                <!-- vet 15  --> 
                <div class="col wow fadeInUp" data-wow-delay="0.15s">
                  <div class="service-item bg-sky overflow-hidden h-100">
                    <div class="service-text position-relative text-center h-100 p-4">
                      <h6 class="mb-3">ศูนย์อัลตร้าซาวน์ </h6>
                      <a href="specialized-15.php" type="button" class="btn btn-sky ">
                        <img src="assets/images/icon คลินิกเฉพาะทาง/ศูนย์อัลตร้าซาวน์.png" alt="/">
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End vet 15 -->

              </div>
            </div>
      </div>
    </section>
    <!-- ตรารางเวลา End -->

     



    <!-- Pr Start -->
    <section class="footer-img">
      <div class=" py-5" id="pr">
          <div class="container">
              <div class="row g-5 align-items-end mb-5">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="border-start border-end border-5 border-primary ">
                    <h1 class="display-6 mb-0 text-center fw-bold blog-sky  shadow text-shadow">
                    <i class="fa-solid fa-clipboard"></i> บอร์ดประชาสัมพันธ์ 
                    </h1>
                  </div>
                </div>

                <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills rounded  d-inline-flex justify-content-center shadow  blog-sky text-uppercase border-inner p-2 mb-5" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link text-white active" id="blog" data-bs-toggle="tab" data-bs-target="#blog-1" type="button" role="tab" aria-controls="blog-1" aria-selected="true"><i class="fa-regular fa-clipboard"></i> ข่าวประชาสัมพันธ์</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link text-white" id="video" data-bs-toggle="tab" data-bs-target="#video-1" type="button" role="tab" aria-controls="video-1" aria-selected="false"><i class="fa-solid fa-video"></i> วิดีโอสาระน่ารู้</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link text-white" id="activity" data-bs-toggle="tab" data-bs-target="#activity-1" type="button" role="tab" aria-controls="activity-1" aria-selected="false"><i class="fa-solid fa-star"></i> กิจกรรมประจำปี 2565</button>
                      </li>
                    </ul>
                </div>
              </div>
          </div>
          
          <!-- blog -->
          <div class="tab-content">
            <!-- บอร์ดประชาสัมพันธ์ -->
            <div class="tab-pane  active" id="blog-1" role="tabpanel" aria-labelledby="blog">
                <div class=" container shadow pb-5">
                    <div class="row row-cols-1 row-cols-lg-3 justify-content-center  g-4">
                      <div class="col portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="assets/images/pr/bloodbank1.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="assets/images/pr/bloodbank1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="col portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="assets/images/pr/lab1-768x768.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="assets/images/pr/lab1-768x768.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                      </div>

                      <div class="col portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="assets/images/pr/lab1-768x768.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="assets/images/pr/lab1-768x768.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                </div> 
            </div>
            
            <!-- video -->
            <div class="tab-pane " id="video-1" role="tabpanel" aria-labelledby="video">
                <div class=" container shadow ">
                    <div class="row row-cols-1 row-cols-lg-3 -4 justify-content-center text-center mx-auto p-4 ">
                      <div class="col" >
                        <div class="ratio ratio-16x9">
                          <iframe class="rounded" src="https://www.youtube.com/embed/I_NtDfop8KQ" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-white text-center m-0">
                          <h5>Ep.1</h5>
                        </div>
                      </div>

                      <div class="col ">
                          <div class="ratio ratio-16x9">
                            <iframe class="rounded" src="https://www.youtube.com/embed/x7EcaEnt8i4?controls=0" title="Ep1" frameborder="0" allowfullscreen></iframe>
                          </div>
                        <div class="card-body text-white text-center m-0">
                          <h5>Ep.2</h5>
                        </div>
                      </div>

                      <div class="col " >
                        <div class="ratio ratio-16x9">
                          <iframe class="rounded" src="https://www.youtube.com/embed/I_NtDfop8KQ" title="Ep1" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-white text-center m-0">
                          <h5>Ep.3</h5>
                        </div>
                      </div>

                      <div class="col" >
                        <div class="ratio ratio-16x9">
                          <iframe class="rounded" src="https://www.youtube.com/embed/I_NtDfop8KQ" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-white text-center ">
                          <h5>Ep.1</h5>
                        </div>
                      </div>

                      <div class="col" >
                        <div class="ratio ratio-16x9">
                          <iframe class="rounded" src="https://www.youtube.com/embed/I_NtDfop8KQ" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-white text-center ">
                          <h5>Ep.1</h5>
                        </div>
                      </div>

                      <div class="col" >
                        <div class="ratio ratio-16x9">
                          <iframe class="rounded" src="https://www.youtube.com/embed/I_NtDfop8KQ" title="YouTube video" allowfullscreen></iframe>
                        </div>
                        <div class="card-body text-white text-center ">
                          <h5>Ep.1</h5>
                        </div>
                      </div>
                    </div>
                </div> 
            </div>

            <!-- กิจกรรม -->
            <div class="tab-pane " id="activity-1" role="tabpanel" aria-labelledby="activity">
                <div class=" container shadow pb-5">
                    <div class="row row-cols-1 row-cols-lg-3 justify-content-center  g-4">
                      <div class="col portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                          <div class="rounded overflow-hidden">
                              <div class="position-relative overflow-hidden">
                                  <img class="img-fluid w-100" src="assets/images/pr/bloodbank1.png" alt="">
                                  <div class="portfolio-overlay">
                                      <a class="btn btn-square btn-outline-light mx-1" href="assets/images/pr/bloodbank1.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                      
                                  </div>
                              </div>
                          </div>
                      </div> 
                    
                    </div>
                </div> 
            </div>
          <!-- blog End -->
          </div>
        </div>
    </section>
    
    <!-- Vendor Start -->
     <?php include_once('inc/owl.php')?>
    <!-- Vendor End -->
      
    <!-- Pr End -->

    <!-- blood Donation -->
    <div class="container-fluid bg-red rounded py-3 ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s" >
              <img src="assets/images/donation/blood-bank.png" class="img-fluid" alt="">
            <div class="bg-red p-2 text-center">
              <a href="https://docs.google.com/forms/d/e/1FAIpQLSdhKfs35jvf2_cDCQoPAY6ElkNLm97CgFAto27ucGrqnY0Wew/viewform" target="_blank" class=" btn btn-danger">ลงทะเบียน</a>
              <a href="blood-bank.php" class="btn btn-danger"> อัลบั้มรูปกิจกรรมบริจาคเลือด</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
    <!-- blood Donation End -->


    <!-- Footer Start -->
    <?php include_once ('inc/footer.php')?>
    <!-- Footer End -->

    <!-- script -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
   
    <!-- lib -->
    <script src="lib/WOW/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- JS -->
    <script src="assets/js/main.js"></script>

    

    <script>
      // popup-modal
    // $(document).ready(function(){
    //     $("#popup-modal").modal("show");
        
    //     $(".close-btn").click(function(){
    //         $("#popup-modal").modal("hide");
    //     });
    // });

    </script>
   
</body>
</html>