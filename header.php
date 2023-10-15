<!--header start-->
<header>
 <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="" class="text-decoration-none">

                 <img class="img-fluid" src="img/logo.jpg" style='height:40px;width:40px;'>&nbsp;<h3 class="m-0"><span class="text-primary">Gayatri</span>Info</h3>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>9/4,Near New WIT College, Solapur</small>
						<small></small>
                    </div>
                </div>
            </div>
			
			 
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        
						<?php
						if(isset($_SESSION['email'])&&$_SESSION['email']==true)
						{
							$user=true;
						}
						else
						{
							$user=false;
						}
						if(!$user)
						{
						?>
						<small>gayatriinfotech.in</small>
						<?php
						}
						else
						{
							?>
							<small><?php echo $_SESSION['email'];?></small>
							<?php
						}
						?>
						
						
						
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+012 345 6789</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">E</span>COURSES</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link ">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="course.php" class="nav-item nav-link">Courses</a>
							
					
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
						    <a href="join.php" class="nav-item nav-link">Register</a>
							</div>
							<div>
                            <?php
							if(isset($_SESSION['email'])&& $_SESSION['email']==true)
							{
								$user=true;
							}
							else
							{
								$user=false;
							}
							  if(!$user)
							  {
							?>    
                            <div class="nav-item dropdown">
                                <a href="#" class="btn btn-primary py-1 px-2 ml-auto d-none d-lg-block" data-toggle="dropdown">Log In</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="login.php" class="dropdown-item">Log In</a>
                                   <!-- <a href="backend/index1.php" class="dropdown-item">User Dashboard</a>-->
                                </div>
                            </div>
							<?php
							}
							else
							{
							?>
							<div class="nav-item dropdown">
                                <a href="#" class="btn btn-primary py-1 px-2 ml-auto d-none d-lg-block" data-toggle="dropdown">Log Out</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="logout.php" class="dropdown-item">Log Out</a>
                                    <a href="backend/index1.php" class="dropdown-item">User Dashboard</a>
                                </div>
                            </div>
							<?php
							}
							?>
							
						</div>		

                    </div>
					
                </nav>
            </div>
        </div>
    </div>
</header>

<!--header end-->