<?php
if(!isset($_SESSION['admin'])&&(!isset($_SESSION['email'])))
{
	echo '<script>alert("Please Login")
	window.location.href="../../index.php"
	</script>';
}
?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="../../index1.php">
                <span class="menu-title">Admin</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
			
           
            
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/coursefetch.php">
                <span class="menu-title">Course</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/teacherfetch.php">
                <span class="menu-title">Staff</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/registfetch.php">
                <span class="menu-title">Register</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/student.php">
                <span class="menu-title">Student Details</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/detailsfetch.php">
                <span class="menu-title">Top Courses</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/fees.php">
                <span class="menu-title">Fees Details</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/admission.php">
                <span class="menu-title">Admission</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/nfetch.php">
                <span class="menu-title">Notification</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			
          </ul>
        </nav>