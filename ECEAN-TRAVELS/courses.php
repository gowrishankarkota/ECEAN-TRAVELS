<?php
session_start();

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = 'Dashboard';
}

if (empty($_SESSION)) {
    include_once './login.php';
    include_once './include/login.php';
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php include_once 'include/head.php'; ?>
        <link rel="shortcut icon" href="./dist/img/slogo.jpg">
        <link rel="icon" href="./dist/img/slogo.jpg" type="image/x-icon">
        <!-- Additional styles for courses page -->
        <style>
            .course-list {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .course-list li {
                margin-bottom: 10px;
            }

            .course-list li a {
                color: #007bff;
                text-decoration: none;
                transition: color 0.3s;
            }

            .course-list li a:hover {
                color: #0056b3;
            }
        </style>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Job Role Catalog</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><?= $menu ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="container-fluid p-2">
							<table>
							<div class="category">
                                    <h2>Agents</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Ticket Agent</a></li>
                                        <li><a href="./stureg.php">Ticket Agent helper</a></li>
										
                                        <!-- -->
                                <div class="category">
                                    <h2>Services</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">customer Services</a></li>
                                        <li><a href="./stureg.php">Bus Services</a></li>
										
                                        <!-- -->
                                    </ul>
                                </div>
                                <div class="category">
                                    <h2>Drivers</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Bus Drivers</a></li>
										<li><a href="./stureg.php">Carry Bus Drivers</a></li>
						
                                        <!-- -->
                                    </ul>
									<div class="category">
                                    <h2>Manager</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Bus Manager</a></li>
										<li><a href="./stureg.php">Account Manager</li>
										<li><a href="./stureg.php">Production Manager</a></li>
                                    </ul>
									</div>
									<div class="category">
                                    <h2>Operators</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Bus Operators</a></li>
                                        <li><a href="./stureg.php">System Operators</a></li>
                                    </ul>
									<div class="category">
                                    <h2>Workers</h2>
                                    <ul class="course-list">
                                        
                                        <li><a href="./stureg.php">To work under drivers</a></li>
										<li><a href="./stureg.php">To work under operators</a></li>
										<li><a href="./stureg.php">To work under managers</a></li>
                                    </ul>
                                </div>
								
                                </div>
								<div class="category">
                                    <h2>Packing</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Box packing</a></li>
                                    </ul>
                                </div>
								<div class="category">
                                    <h2>Shipping</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Local shipping</a></li>
                                        <li><a href="./stureg.php">National shipping</a></li>
										<li><a href="./stureg.php">International shipping</a></li>
                                    </ul>
                                </div>						
								
									<table>
                                </div>
								
                            </div>
                        </div>
                    </div>
					
                </section>
				<div class="card">
				<button  type="submit" class="btn btn-primary" id="redirectButton"><strong>Go to Main Page</strong></button>

                    <script>
                                 document.getElementById("redirectButton").addEventListener("click", function() {
                                                             window.location.href = "./index.php";
                                                                                                       });
                    </script>

                                
								
								</div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php include_once './include/footer.php'; ?>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <?php include_once './include/scripts.php'; ?>
    </body>

    </html>

<?php
}
?>
