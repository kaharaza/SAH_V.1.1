<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คลินิกโรคตา</title>

    <!-- favicon -->
    <?php include_once('inc/meta.php')?>

    <!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"rel="stylesheet">
  
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="assets/css/style.css">
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header2 py-6 mb-5 wow fadeIn"data-wow-delay="0.1s">
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4 fw-bold">คลินิกโรคตา</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class=" d-line-bottom" href="index.php" >หน้าหลัก</a>
            </li>
            <li class="breadcrumb-item">
              <a class=" d-line-bottom" href="#" data-bs-toggle="modal" data-bs-target="#VetModal">คลินิกเฉพาะทาง</a>
            </li>
            <li class="breadcrumb-item  active" aria-current="page">
            คลินิกโรคตา
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- table -->
    <section class="container-fluid py-3">
        <div class="container">
            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s" >
            <img src="assets/images/logo/logoSahcmu.png" alt="">
                <h1 class="text-sky border-bottom border-primary">ตารางเวลาลงตรวจคลินิกเฉพาะทางโรคตา</h1>
            </div>
            <div class="table-responsive"> 
                <table class="table tab table-primary text-center table-bordered  table-striped table-hover table-responsive-sm wow fadeInUp" data-wow-delay="0.3s" >
                    <thead >
                        <tr>
                        <th scope="col">วัน</th>
                        <th scope="col">เวลา</th>
                        <th scope="col">สัตวแพทย์เฉพาะทางที่ลงตรวจ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>จันทร์</td>
                            <td>09.00 - 16.30 น.</td>
                            <td>
                                <a class="d-line-bottom" href="" data-bs-toggle="modal" data-bs-target="#eye1">
                                    น.สพ.ชัชวาล ศรีวิชัย
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>พฤหัสบดี</td>
                            <td>13.00 - 16.30 น.</td>
                            <td>
                                <a class="d-line-bottom" href="" data-bs-toggle="modal" data-bs-target="#eye1">
                                    น.สพ.ชัชวาล ศรีวิชัย
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- table end -->

    <!-- สัตว์แพทย์ประจำคลินิกเฉพาะทาง -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2 text-muted border-bottom">คลินิกโรคตา</h6>
              <h1 class="display-6 mb-0 text-sky">สัตว์แพทย์ประจำคลินิกเฉพาะทางโรคตา</h1>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
            <p class="mb-0 text-muted">
            บริการตรวจวินิจฉัยและรักษาโรคตาในสัตว์เลี้ยง ครอบคลุมทั้งทางด้านอายุรกรรมและศัลยกรรมเพื่อแก้ไขความผิดปกติเกี่ยวกับดวงตา 
            อาทิเช่น ต้อกระจกตา, แผลที่กระจกตา ต้อหิน เป็นต้น 
            ด้วยเครื่องมือและอุปกรณ์ทางการแพทย์ที่ทันสมัยโดยสัตวแพทย์ที่มีความเชี่ยวชาญและประสบการณ์
            </p>
          </div>
        </div>
        <div class="row g-4 mb-5">
            <div class="col-lg-3 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                <a href="" data-bs-toggle="modal" data-bs-target="#eye1">
                    <img class="img-fluid" src="assets/images/สัตวแพทย์ประจำคลินิก/2-โรคตา/1.png" alt="" />
                </a>
                <div class="team-text bg-white p-3">
                    <small>น.สพ.ชัชวาล ศรีวิชัย</small>
                </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- สัตว์แพทย์ประจำคลินิกเฉพาะทาง END -->
    
    <!-- Modal -->

        <!-- ม.Pop -->
        <div class="modal fade" id="eye1" tabindex="-1" aria-labelledby="Labeleye1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="">
                            <button type="button" class="btn-close text-end" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center ">
                                <div class="">
                                    <img src="assets/images/สัตวแพทย์ประจำคลินิก/2-โรคตา/1.png" width="100%" height="100%" alt="/">
                                </div>
                            </div>
                            <div class="col-md-8 ">
                                <div class=" text-center">
                                    <h4 class="text-body text-uppercase mb-2">น.สพ.ชัชวาล ศรีวิชัย</h4>
                                    <h6 class="text-body text-uppercase border-bottom mb-2">คลินิกเฉพาะทางโรคตา</h6>
                                </div>
                                <h5>สาขาวิชาที่เชี่ยวชาญ</h5>
                                    <li>1</li>
                                    <li>2</li>
                                <h5>ประวัติการศึกษา</h5>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li>
                                <h5>ประวัติการทำงาน</h5>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li>    
                                <h5>ประกาศนียบัตร</h5>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li>
                                    <li><small>1</small></li> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Modal End -->


    

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
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- JS -->
    <script src="assets/js/main.js"></script>

</body>
</html>