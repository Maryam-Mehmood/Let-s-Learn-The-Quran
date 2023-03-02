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
     <!-- Header Start -->
     <div class="container-fluid page-header" style="margin-bottom: 90px;">
         <div class="container">
             <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                 <h3 class="display-4 text-white text-uppercase">Calendar</h3>
                 <div class="d-inline-flex text-white">
                     <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                     <i class="fa fa-angle-double-right pt-1 px-3"></i>
                     <p class="m-0 text-uppercase">Calendar</p>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header End -->

     <!-- Islamic Calender Start -->
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
                         <?php
                             $query = "SELECT * FROM `calender`";
                             $result = mysqli_query($conn,$query);
                             if(mysqli_num_rows($result))
                               {
                                 while($row = mysqli_fetch_array($result)){                                              
                         ?> 
                         <tr>
                             <th scope="row"><?php echo $row[1];?></th>
                             <td><?php echo $row[2];?></td>
                             <td><?php echo $row[3];?></td>
                             <td><?php echo $row[4];?></td>
                         </tr>
                         <?php
                             }
                             }
                         ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <!-- Calender End -->

     <!-- Islamic Calender Start -->
     <div class="container-fluid bg-event py-5" style="margin: 90px 0;">
         <div class="container py-5">
             <div class="row align-items-center">
                 <div class="section-title text-center">
                     <h3>Calender</h3>
                     <p class="lead">
                         People around the world use the Calendar to determine the dates of 
                         events and observances. This 2023 calendar is based on 12 months.
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
                         <?php
                             $query = "SELECT * FROM `calender`";
                             $result = mysqli_query($conn,$query);
                             if(mysqli_num_rows($result))
                               {
                                 while($row = mysqli_fetch_array($result)){                                              
                         ?> 
                         <tr>
                             <th scope="row"><?php echo $row[1];?></th>
                             <td><?php echo $row[2];?></td>
                             <td><?php echo $row[3];?></td>
                             <td><?php echo $row[4];?></td>
                         </tr>
                         <?php
                             }
                             }
                         ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>
     <!-- Calender End -->

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