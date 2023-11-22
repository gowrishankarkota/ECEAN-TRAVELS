<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/ece.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ECEANS TRAVELS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
 <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <div class="image">
                <img src="dist/img/ece.jpg" class="img-circle  elevation-1" style="width:50px" alt="User Image">
            </div>
            <div class="info">
          <a href="#" class="d-block"><?=  $_SESSION['name'] ?></a>
                
            </div>
        </div>



        <!-- Sidebar Menu -->

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item  ">
                    <a href="./index.php" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>

      <?php
    if ($_SESSION['level'] == 'admin') 
	{
                ?>
				<li class="nav-item  ">
                    <a href="./index.php" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Welcome Admin!!
                        </p>
                    </a>

                </li>
         <li class="nav-item menu-open">
         <a href="#" class="nav-link ">
          <i class="nav-icon fas fa-database"></i>
           <p>
          Master Data
           <i class="right fas fa-angle-left"></i>
           </p>
         </a>
           <ul class="nav nav-treeview">
            <li class="nav-item">
             <a href="./dept.php" class="nav-link ">
              <i class="far fa-user nav-icon"></i>
             <p>Employee Data</p>
            </a>
           </li>
		  <li class="nav-item">
             <a href="./stureg.php" class="nav-link ">
              <i class="far fa-user nav-icon"></i>
             <p>Employee Registration</p>
            </a>
           </li>
           <li class="nav-item">
             <a href="./courses.php" class="nav-link ">
              <i class="far fa-user nav-icon"></i>
             <p>Job Role Catalog</p>
            </a>
           </li>                 

             </ul>
                    </li>
         <?php } ?>
				  <?php
   if ($_SESSION['level'] == 'user') {
                ?>
     <li class="nav-item menu-open">
    <a href="#" class="nav-link ">
	                     
                            <i class="nav-icon fas fa-database"></i>
                            <p>
                            Welcome User!!
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
						<li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="far fa-user nav-icon"></i>
                                    <p>UDAY</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ">
                                    <i class="far fa-user nav-icon"></i>
                                    <p>RAHUL</p>
                                </a>
                            </li>
							
   <li class="nav-item">
                                <a href="#" class="nav-link">
          <i class="far fa-user nav-icon"></i>
                                    <p>VIJAY</p>
                                </a>
                            </li>

                        </ul>
						 <li class="nav-item">
             <a href="./courses.php" class="nav-link ">
              <i class="far fa-user nav-icon"></i>
             <p>Training courses</p>
            </a>
           </li> 
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Extras
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v1
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v1</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Login & Register v2
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/login-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/register-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password v2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password v2</p>
                                    </a>
                                </li>
                            </ul>



                        </li>

                    </ul>
                </li>
 <li class="nav-item  ">
   <a href="./include/logout.php" class="nav-link bg-red">
 <i class="nav-icon fas fa-power-off"></i>
   <p>
    Logout
    </p>
     </a>
</li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>