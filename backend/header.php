<?php
session_start();
if(!isset($_SESSION['admin'])&&(!isset($_SESSION['email'])))
{
	echo '<script>alert("Please Login")
	window.location.href="../../index.php"
	</script>';
}
?>
<!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
         <h2><a class="navbar-brand brand-logo" href="index.php">
		 
		 <img src="logo.jpg" style='height:40px;width:40px;'><font style='font-size:25px;'>Gayatri<span style='color:#fd7e14;'>Info</span></font>
          </a></h2>
          <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div>
          <ul class="navbar-nav navbar-nav-right">
            <!--<li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <!--  <div class="nav-profile-img">
                   <img src="../pic/<?php //echo $image;?>" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php //echo $name;?></p>
                </div>
              </a>
			  
			                
             
			<li class="nav-item ">
              <a class="nav-link" href="#" >
			  
                <!--<i class="mdi mdi-gmail" style='color:orange;'></i>-->
				
							 <p class="mb-1 text-black"><?php //echo $_SESSION['email'];?></p>
							
                <span class="count-symbol bg-warning"></span>
              </a>
           
        </div>
      </nav>
      <!-- partial -->