<?php
 $conn = mysqli_connect("localhost","root","","quran-academy");
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Let's Learn the Quran</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta content="Free HTML Templates" name="keywords">
     <meta content="Free HTML Templates" name="description">

     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">

     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
 </head>

 <body>
     <!-- Navbar -->
     <?php 
	     include_once("nav.php");
	    ?>

     <!-- Carousel Start -->
     <div class="container-fluid p-0 pb-5 mb-5">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
             <ol class="carousel-indicators">
                 <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                 <li data-target="#header-carousel" data-slide-to="1"></li>
                 <li data-target="#header-carousel" data-slide-to="2"></li>
             </ol>
             <div class="carousel-inner">
                 <!-- 01 -->
                 <div class="carousel-item active" style="min-height: 300px;">
                     <img class="position-relative w-100" src="img/slider-1.png" style="object-fit: cover;">
                     <div class="carousel-caption d-flex align-items-center justify-content-center">
                         <div class="p-5" style="width: 100%; max-width: 900px;">
                             <h5 class="text-white text-uppercase mb-md-3">Let's Learn The Quran</h5>
                             <h1 class="display-3 text-white mb-md-4">Quran Education From Your Home</h1>
                             <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <!-- 02 -->
                 <div class="carousel-item" style="min-height: 300px;">
                     <img class="position-relative w-100" src="img/slider-2.jpg" style="min-height: 300px; object-fit: cover;">
                     <div class="carousel-caption d-flex align-items-center justify-content-center">
                         <div class="p-5" style="width: 100%; max-width: 900px;">
                             <h5 class="text-white text-uppercase mb-md-3">Let's Learn The Quran</h5>
                             <h1 class="display-3 text-white mb-md-4">Online Learning Platform</h1>
                             <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <!-- 03 -->
                 <div class="carousel-item" style="min-height: 300px;">
                     <img class="position-relative w-100" src="img/slider-3.jpg" style="min-height: 300px; object-fit: cover;">
                     <div class="carousel-caption d-flex align-items-center justify-content-center">
                         <div class="p-5" style="width: 100%; max-width: 900px;">
                             <h5 class="text-white text-uppercase mb-md-3">Let's Learn The Quran</h5>
                             <h1 class="display-3 text-white mb-md-4">New Way To Learn From Home</h1>
                             <a href="about.php" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Carousel End -->

     <!-- Courses Start -->
     <div class="container-fluid py-5">
         <div class="container py-5">
             <div class="text-center mb-5">
                 <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
                 <h1>Our Popular Courses</h1>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="rounded overflow-hidden mb-2">
                         <img class="img-fluid" src="img/course-1.jpg" alt="">
                         <div class="bg-secondary p-4">
                             <div class="d-flex justify-content-between mb-3">
                                 <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>30m</small>
                             </div>
                             <a class="h5" href="">Quran Course For Kids</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="rounded overflow-hidden mb-2">
                         <img class="img-fluid" src="img/course-2.jpg" alt="">
                         <div class="bg-secondary p-4">
                             <div class="d-flex justify-content-between mb-3">
                                 <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>30m</small>
                             </div>
                             <a class="h5" href="">Quran Course For Women</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="rounded overflow-hidden mb-2">
                         <img class="img-fluid" src="img/course-3.jpg" alt="">
                         <div class="bg-secondary p-4">
                             <div class="d-flex justify-content-between mb-3">
                                 <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>30m</small>
                             </div>
                             <a class="h5" href="">Shariah Issue of Islam</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-md-6 mb-4">
                     <div class="rounded overflow-hidden mb-2">
                         <img class="img-fluid" src="img/course-4.jpg" alt="">
                         <div class="bg-secondary p-4">
                             <div class="d-flex justify-content-between mb-3">
                                 <small class="m-0"><i class="far fa-clock text-primary mr-2"></i>30m</small>
                             </div>
                             <a class="h5" href="">Different Courses</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Courses End -->

     <!-- Calender Start -->
     <div class="container-fluid bg-event py-5" style="margin: 90px 0;">
         <div class="container py-5">
             <div class="row align-items-center">
                 <div class="section-title text-center">
                     <h3>Islamic Events Calender</h3>
                     <p class="lead">
                         Muslims around the world use the Islamic Calendar (also known as the Hijri calendar) to determine the dates of 
                         religious events and observances. This 2023 Islamic calendar is based on 12 months.
                     </p>
                 </div><!-- end title -->
                 <table class="table table-bordered table-hover table-dark">
                     <thead>
                         <tr>
                             <th scope="col">Date</th>
                             <th scope="col">Day</th>
                             <th scope="col">Event</th>
                             <th scope="col">Detail</th>
                         </tr>
                     </thead>
                     <tbody>
                         <!-- <?php
                             $query = "SELECT * FROM `calender`";
                             $result = mysqli_query($conn,$query);
                             if(mysqli_num_rows($result))
                               {
                                 while($row = mysqli_fetch_array($result)){                                              
                         ?>   -->
                         <tr>
                             <th scope="row"><?php echo $row[1];?></th>
                             <td><?php echo $row[2];?></td>
                             <td><?php echo $row[3];?></td>
                             <td><?php echo $row[4];?></td>
                         </tr>
                         <!-- <?php
                             }
                             }
                         ?> -->
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <!-- Registration End -->

      <!-- Footer -->
      <?php 
	     include_once("footer.php");
	 ?>

     <!-- Back to Top -->
     <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>

     <!-- Contact Javascript File -->
     <script src="mail/jqBootstrapValidation.min.js"></script>
     <script src="mail/contact.js"></script>

     <!-- Template Javascript -->
     <script src="js/main.js"></script>
 </body>

</html>