<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ECOURSES - Online Courses HTML Template</title>
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
    <!-- Topbar Start -->
    <?php
	include("header.php");
    ?>
	<!-- Topbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Register</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href=""></a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
                        

    <!-- Contact Start -->
   
			<?php 
					
					if(isset($_POST['btn']))
					{
						$name=$_POST['name'];
						$email=$_POST['email'];
						$contact=$_POST['contact'];
						$pass=$_POST['pass'];
						$cpass=$_POST['cpass'];
						$cname=$_POST['cname'];
						$gender=$_POST['gender'];
						
						$filename=$_FILES['image']['name'];
						$filesize=$_FILES['image']['size'];
						$filetemnm=$_FILES['image']['tmp_name'];
						$filetype=$_FILES['image']['type'];
						$filestore="pic/".$filename;
						
						$to=$_POST['email'];
						$subject="Login successfully";
						$from="Krishnaveni Khande";
						$msg="Thank You for registration.Welcome to Gayatri Infotech";
						$header="From:$from";
						
						if(move_uploaded_file($filetemnm,$filestore))
						{
							$sql="insert into register(name,email,contact,pass,cpass,cname,gender,image)values('$name','$email','$contact','$pass','$cpass','$cname','$gender','$filename')";
						  if(mysqli_query($con,$sql))
						  {
							  mail($to,$subject,$msg,$header);
							 echo "Data inserted";
						  }
						  else
						   {
							 echo "Not inserted".mysqli_error($con);
						   }
					}
						}	
					?>
					 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Registration Form</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form  method="post" enctype="multipart/form-data">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Your Name" name="name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Your Email" name="email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="subject" placeholder="contact number" name="contact" required="required" data-validation-required-message="Please enter contact" />
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="password" required="required" name="pass" data-validation-required-message="Please enter your pass" />
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="confirm password" required="required" name="cpass" data-validation-required-message="Please enter your cpass" />
                                <p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Qualification"  name="cname" />
                                <p class="help-block text-danger"></p>
                            </div>
							
							<div class="control-group">
							    <input type="" class="form-control border-0 p-4"  id="message" placeholder="Select Gender"  name="gender"></textarea>
                                &nbsp; &nbsp;<input type="radio" id="name" name="gender" value="Male" required="required" data-validation-required-message="Please enter your name" />&nbsp;&nbsp;Male<br><br>
                                &nbsp; &nbsp;<input type="radio" id="name" name="gender" value="Female" required="required" data-validation-required-message="Please enter your name" />&nbsp;&nbsp;Female
								<p class="help-block text-danger"></p>
                            </div>
							 <div class="control-group">
                                <input type="file" class="form-control border-0 p-4"  name="image" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <!--<div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>-->
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit"  name="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>9/4, Shri Markendaya Yantramag Dharak Society, Near New WIT College, Next to Upahar Bakery lane, Solapur - 413006.</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@gayatriinfotech.in</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <!--<h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Rebum labore lorem dolores kasd est, et ipsum amet et at kasd, ipsum sea tempor magna tempor. Accu kasd sed ea duo ipsum. Dolor duo eirmod sea justo no lorem est diam</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Domain Name</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


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