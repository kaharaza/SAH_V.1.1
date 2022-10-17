<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>เกี่ยวกับเรา</title>
  
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
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    
    <!-- fortawesme -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    
  </head>
    <style>

      p .text-white > li {
        color: #fff;
      }
        
    </style>

<body>
  
    <!-- Navber -->
    <?php include_once ('inc/navbar.php') ?>
    <!-- Navbar End -->
    
    <!-- Modal Vet -->
    <?php include_once('inc/modal.php')?>
    <!-- Modal Vet end -->
    
    <!-- Page Header Start -->
    <div class="container-fluid page-about py-6 mb-0 wow fadeIn"data-wow-delay="0.1s">
      <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4 fw-bold">เกี่ยวกับเรา</h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item">
              <a class=" d-line-bottom" href="index.php" >หน้าหลัก</a>
            </li>
            <li class="breadcrumb-item  active" aria-current="page">
              เกี่ยวกับเรา
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->
    
    <!-- contact -->
    <?php include_once('inc/contact.php')?>
    <!-- contact end -->
    
    <!-- Features Start -->
    <div class="container-fluid client-content">
      <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 text-white wow fadeInUp" data-wow-delay="0.1s">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class=" text-uppercase mb-2 ">ยินดีต้อนรับ</h6>
                <h1 class="display-6 mb-0  fw-bold">
                  โรงพยาบาลสัตว์เล็ก โรงพยาบาลสัตว์มหาวิทยาลัยเชียงใหม่
                </h1>
              </div>
              <p class="mb-3 ">
                โรงพยาบาลสัตว์เล็ก เป็นหน่วยงานในกำกับของโรงพยาบาลสัตว์มหาวิทยาลัย ภายใต้ความดูแลของ 
                คณะสัตวแพทยศาสตร์ มหาวิทยาลัยเชียงใหม่ ได้รับอนุมัติจากสภามหาวิทยาลัยให้จัดตั้งตามระเบียบ 
                มหาวิทยาลัยเชียงใหม่ ว่าด้วยสถานบริการสุขภาพสัตว์ ณ วันที่ 16 พฤศจิกายน พ.ศ.2542 
                โดยมีจุดประสงค์ในการจัดตั้งเพื่อ
              </p>
              <li>สนับสนุนการเรียนการสอนวิชาคลินิกปฏิบัติและปฏิบัติภาคสนามแก่นักศึกษาคณะสัตวแพทยศาสตร์</li>
              <li>ให้คำแนะนำและเป็นศุนย์ประสานระหว่างบุคลากรและหน่วยงานที่เกี่ยวข้องกับการดูแลสุขภาพสัตว์ในเขตภาคเหนือ 
                ตลอดจนเป็นแหล่ง อ้างอิงสืบค้นข้อมูลด้านการจัดการสุขภาพสัตว์</li>
              <li>สนับสนุนการวิจัยเพื่อแก้ไขปัญหาสุขภาพสัตว์</li>
              
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="position-relative overflow-hidden ps-5 pt-5 h-100"style="min-height: 400px">
                <img class="position-absolute w-100 h-100" src="assets/images/h/h2.jpg" alt="" style="object-fit: cover"/>
                <div class="position-absolute top-0 start-0 bg-sky rounded-circle " style="width: 200px; height: 200px">
                  <div class="d-flex flex-column justify-content-center text-center  h-100 p-2">
                    <img class="img-fluid" src="assets/images/logo/logoSahcmu.png" width="250px" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Features End -->

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