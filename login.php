<?php
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

 <body class="bg-primary">

     <div class="container-fluid position-relative d-flex p-0">
         <!-- Sign In Start -->
         <div class="container-fluid">
             <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                 <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                     <form action="#" method="POST">
                         <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                             <div class="d-flex align-items-center justify-content-between mb-3">
                                 <a href="index.html" class="">
                                     <h3 class="text-primary text-center"><i class="fa fa-user-edit me-2"></i>Let's Learn The Quran Online</h3>
                                     <h3 class="text-center">Sign In</h3>
                                 </a>
                             </div>
                             <div class="form-floating mb-3">
                                 <label for="floatingInput">Email address</label>
                                 <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                             </div>
                             <div class="form-floating mb-4">
                                 <label for="floatingPassword">Password</label>
                                 <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                             </div>
                             <div class="d-flex align-items-center justify-content-between mb-4">
                                 <?php
                                     if(isset($_GET["invalid"]))
                                       {
                                     ?>
                                     <a href="" class="text-danger">Invalid Email or password</a>                                    
                                     <?php
                                      }
                                 ?>                   
                             </div>
                             <button type="submit" name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                             <p class="text-center mb-0">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                         </div>         
                     </form>     
                 </div>
             </div>
         </div>
         <!-- Sign In End -->
     </div>

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
     $conn = mysqli_connect("localhost","root","","quran-academy");
     
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     $query = "SELECT * FROM `student` WHERE `Email` = '$email' AND `Pass` = '$password'";
     $result = mysqli_query($conn,$query);
     
     if (mysqli_num_rows($result))
       {
         while($row = mysqli_fetch_array($result))
           {
             if($row[10] == 1)
               {
                   $_SESSION["username"] = $row["1"];
                   $row["1"]=  $_SESSION["username"];

                 $_SESSION["email"] = $row["2"];
                 $_SESSION["password"] = $row["3"];
                 $_SESSION["role"] = $row["10"];
                 ?>
                 <script>
                     window.location.assign("admi.php");
                 </script>
                 <?php
                }
            }
        }
     else
       {
         ?>
         <script>
             window.location.assign("login.php?invalid");        
         </script>
         <?php
        }                    
    }
?>