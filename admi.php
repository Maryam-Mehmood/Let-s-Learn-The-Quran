<?php
 $conn = mysqli_connect("localhost","root","","quran-academy");
 session_start();
?>
<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="utf-8">
     <title>Let's Learn The Quran</title>
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
                 <h3 class="display-4 text-white text-uppercase">Admission</h3>
                 <div class="d-inline-flex text-white">
                     <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                     <i class="fa fa-angle-double-right pt-1 px-3"></i>
                     <p class="m-0 text-uppercase">Admission</p>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header End -->
    
     <?php
         if (isset($_SESSION["username"]) == null) {
         ?>
         <div class="jumbotron">
             <div class="container">
                 <h1>Hello, User!</h1>
                 <h4>Please Sign in to get admission.</h4>
                 <p><a class="btn btn-primary btn-lg" href="login.php" role="button">Sign in</a></p>
             </div>
         </div>
         <?php
         }
         else {
     ?>

     <!-- Form Start -->
     <div class="container-fluid py-5">
         <div class="container py-5">
             <div class="text-center mb-5">
                 <a class="btn btn-primary py-4 px-4 ml-auto d-none d-lg-block" style="width: 10%; padding: right 100px;" href="logout.php">Log Out</a>
                 <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Admission</h1>
                 <h4>Let us give you more details about the admission you want us. Please fill out the form below.</h4>
             </div>
             <div class="row justify-content-center">
                 <div class="col-lg-8">
                     <div class="contact-form bg-secondary rounded p-5">
                         <div id="success"></div>
                         <!-- Message -->
                         <?php
                             if(isset($_GET["sucess"])){
                             ?>
                             <div style="width:630px; height:50px; padding:10px; border: 5px solid gray; background-color:gray;">
                                 <h4 class="text-center">Your Form has been submit succesfully</h4>
                             </div>
                             <?php
                             }
                         ?> 
                         <br>
                         <form name="sentMessage" method="post" action= "#">
                             <div class="control-group">
                                 <input type="text" class="form-control border-0 p-4" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="email" class="form-control border-0 p-4"  name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="text" class="form-control border-0 p-4"  name="phone" id="phone" placeholder="Phone No." required="required" data-validation-required-message="Please enter a phone no." />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="text" class="form-control border-0 p-4"  name="con" id="country" placeholder="Country" required="required" data-validation-required-message="Please enter a country" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="text" class="form-control border-0 p-4"  name="city" id="city" placeholder="City" required="required" data-validation-required-message="Please enter a city" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <select  id="course" name ="course" class="form-control">
                                     <option>Select Course</option>
                                     <?php
                                         $query = "SELECT * FROM `course`";
                                         $result = mysqli_query($conn,$query);
                                         if(mysqli_num_rows($result))
                                           {
                                             $i = 0;
                                             while($row = mysqli_fetch_array($result)) {
                                              $i++;
                                             ?>                        
                                             <option>
                                                 <?php echo $row[1]; ?>                                                                               
                                             </option>                                                
                                             <?php
                                             }
                                             }
                                         ?>
                                 </select>
                                 <!-- <input type="text" class="form-control border-0 p-4"  name="course" id="course" placeholder="Course Name" required="required" data-validation-required-message="Please enter a course name" />
                                 <p class="help-block text-danger"></p> -->
                             </div>
                             <br>
                             <div class="control-group">
                                 <select  id="days" name ="days" class="form-control">
                                     <option>Select Course Days</option>
                                     <?php
                                         $query = "SELECT * FROM `days`";
                                         $result = mysqli_query($conn,$query);
                                         if(mysqli_num_rows($result))
                                           {
                                             $i = 0;
                                             while($row = mysqli_fetch_array($result)) {
                                              $i++;
                                         ?>                        
                                         <option>
                                             <?php echo $row[1]; ?>                                                                               
                                         </option>                                                
                                         <?php
                                             }
                                             }
                                     ?>
                                 </select>
                                 <!-- <input type="text" class="form-control border-0 p-4"  name="day" id="day" placeholder="Course day" required="required" data-validation-required-message="Please enter a course days" />
                                 <p class="help-block text-danger"></p> -->
                             </div>
                             <br>
                             <div class="control-group">
                                 <textarea class="form-control border-0 py-3 px-4"  name="msg" rows="5" id="message" placeholder="More Information(If Any)" data-validation-required-message="Please enter your message"></textarea>
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="text-center">
                                 <input type="submit" name="submit" class="btn btn-primary py-4 px-5" value="Send Admission Form">
                                 <!-- <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Admission Form</button> -->
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Form End -->
     
     <?php
         }
     ?>

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

<?php
 if(isset($_POST["submit"]))
   {
     $Name = $_POST["name"];
     $Email = $_POST["email"];
     $Phone = $_POST["phone"];
     $Country = $_POST["con"];
     $City = $_POST["city"];
     $Course = $_POST["course"];
     $Day = $_POST["days"];
     $Message = $_POST["msg"];
                             
     $query = "INSERT INTO `student`(`Username`, `Email`, `Phone`, `Country`, `City`, `Course_Name`, `Course_Days`, `Details`) VALUES ('$Name','$Email','$Phone','$Country','$City','$Course','$Day','$Message')";
     $result = mysqli_query($conn,$query);
     ?>
     <Script>
         window.location.assign("admi.php?sucess");
     </Script>
     <?php
    }
?>