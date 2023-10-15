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
           
            
			<!--<li class="nav-item">
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
            </li>-->
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/myrecord.php">
                <span class="menu-title">My Record</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="../../pages/tables/nfetch1.php">
                <span class="menu-title">Notification</span>
                <i class="mdi mdi-table-large menu-icon"></i>
              </a>
            </li>
			
			
			
          </ul>
        </nav>