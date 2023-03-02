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
                 <h3 class="display-4 text-white text-uppercase">Contact</h3>
                 <div class="d-inline-flex text-white">
                     <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                     <i class="fa fa-angle-double-right pt-1 px-3"></i>
                     <p class="m-0 text-uppercase">Contact</p>
                 </div>
             </div>
         </div>
     </div>
     <!-- Header End -->

     <!-- Contact Start -->
     <div class="container-fluid py-5">
         <div class="container py-5">
             <div class="text-center mb-5">
                 <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h1>
                 <h4>Let us give you more details about the special website you want from us. Please fill out the form below.</h4>
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
                                 <h4 class="text-center">Your Message has been sent</h4>
                             </div>
                             <?php
                             }
                         ?> 
                         <br>
                         <form name="sentMessage" method="POST" action="#">
                             <div class="control-group">
                                 <input type="text" name = "name" class="form-control border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="email" name = "email" class="form-control border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="text" name = "phone" class="form-control border-0 p-4" id="phone" placeholder="Phone No." required="required" data-validation-required-message="Please enter a phone no." />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <input type="text" name = "sub" class="form-control border-0 p-4" id="subject" placeholder="Subject(Message / Feedback / Complaint)" required="required" data-validation-required-message="Please enter a subject" />
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="control-group">
                                 <textarea name = "msg" class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                 <p class="help-block text-danger"></p>
                             </div>
                             <div class="text-center">
                                 <input type="submit" name="submit" class="btn btn-primary py-4 px-5" value="Send Message">
                                 <!-- <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button> -->
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Contact End -->

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
     $Subject = $_POST["sub"];
     $Message = $_POST["msg"];
                             
     $query = "INSERT INTO `contact`(`Username`, `Email`, `Phone`, `Subject`, `Msg`) VALUES ('$Name','$Email','$Phone','$Subject','$Message')";
     $result = mysqli_query($conn,$query);
     ?>
     <Script>
         window.location.assign("contact.php?sucess");
     </Script>
     <?php
    }
?>