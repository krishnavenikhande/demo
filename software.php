<?php
session_start();
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
    
    <div class="carousel-inner">
        <div class="carousel-item active">
		  <img class="position-relative w-100" src="img/h20.png" style="min-height: 100px; object-fit: cover;">
            <div class="d-flex flex-column justify-content-center" style="min-height: 200px">
                <h3 class="display-4 text-white text-uppercase"></h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href=""></a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase"></p>
                </div>
            </div>
        </div>
    </div>
	
	
	
        <!--<div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Introduction To Web Development</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Single</p>
                </div>
            </div>
        </div>-->
  
    <!-- Header End -->

    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3"></h6>
                        <h1 class="mb-5"></h1>
                        <img class="img-fluid rounded mb-4" src="img/h19.jpg" style='width:600px;' alt="Image">
                        <p>Software testing is the process of checking the quality, functionality, and performance of a software 
						product before launching. To do software testing, testers either interact with the software manually or 
						execute test scripts to find bugs and errors, ensuring that the software works as expected. Software testing 
						is also done to see if business logic is fulfilled, or if there are any missing gaps in requirements that need 
						immediate tackles. Software testing is a crucial part of the software development life cycle. Without it, 
						app-breaking bugs that can negatively impact the bottom-line may go undetected. Over time, as applications get
						more complex, software testing activities have also evolved, with many new techniques and approaches introduced.
                         Software testing is the process of evaluating and verifying that a software product or application does what it
						 is supposed to do. The benefits of testing include preventing bugs, reducing development costs and improving performance.   						
</p>
                      
                    </div>

                    <!-- Comment List -->
                   <!-- <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">3 Comments</h3>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at.
                                    Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam
                                    consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="img/user.jpg" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum
                                            et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                            Gubergren clita aliquyam consetetur, at tempor amet ipsum diam tempor at
                                            sit.</p>
                                        <button class="btn btn-sm btn-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->

                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5" style='text-align:center;'>
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Languages For Web Designing</h3>
						<div class="mb-5" >
						<?php
						$con=mysqli_connect("localhost","root","","project");
						$sql="select * from course where id in(9)";
						$res=mysqli_query($con,$sql);
						while($rw=mysqli_fetch_row($res))
						{
							?>
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;"></h3>
                        <ul class="list-group list-group-flush" style='text-align:center;'>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="course.php?id=<?php echo $rw[0];?>" class="text-decoration-none h6 m-0">HTML</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li><br>
							
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="course.php?id=<?php echo $rw[0];?>" class="text-decoration-none h6 m-0">CSS</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li><br>
							<?php
						     }
						     ?>
							 <?php
						$con=mysqli_connect("localhost","root","","project");
						$sql="select * from course where id in(15)";
						$res=mysqli_query($con,$sql);
						while($rw=mysqli_fetch_row($res))
						{
							?>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="course.php?id=<?php echo $rw[0];?>" class="text-decoration-none h6 m-0" >JAVA Script</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li><br>
							<?php
						     }
						     ?>
						 <?php
						$con=mysqli_connect("localhost","root","","project");
						$sql="select * from course where id in(17)";
						$res=mysqli_query($con,$sql);
						while($rw=mysqli_fetch_row($res))
						{
							?>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="course.php?id=<?php echo $rw[0];?>" class="text-decoration-none h6 m-0">Bootstrap</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li><br>
							<?php
						     }
						     ?>
							  <?php
						$con=mysqli_connect("localhost","root","","project");
						$sql="select * from course where id in(12)";
						$res=mysqli_query($con,$sql);
						while($rw=mysqli_fetch_row($res))
						{
							?>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="course.php?id=<?php echo $rw[0];?>" class="text-decoration-none h6 m-0">JQuery</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
							<?php
						     }
						     ?>
                        </ul>
                    </div>
						
						
						
						
                        <!--<table>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control border-0" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control border-0" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control border-0" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                            </div>
                        </table>-->
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->
                    <!--<div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                        <img src="img/user.jpg" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                        <h3 class="text-primary mb-3">John Doe</h3>
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit
                            no ut est ipsum erat kasd amet elitr</p>
                    </div>-->

                    <!-- Search Form -->
                    <div class="mb-5">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary"><i
                                            class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Category List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">HTML</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">CSS</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">JAVA Script</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Keyword Research</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="" class="text-decoration-none h6 m-0">Email Marketing</a>
                                <span class="badge badge-primary badge-pill"></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                            <img class="img-fluid rounded" src="img/blog-80x80.jpg" alt="">
                            <div class="pl-3">
                                <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    </div>

                    <!-- Tag Cloud -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">Design</a>
                            <a href="" class="btn btn-outline-primary m-1">Development</a>
                            <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                            <a href="" class="btn btn-outline-primary m-1">SEO</a>
                            <a href="" class="btn btn-outline-primary m-1">Writing</a>
                            <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Footer Start -->
     <?php
   include("footer.php");
     ?>
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