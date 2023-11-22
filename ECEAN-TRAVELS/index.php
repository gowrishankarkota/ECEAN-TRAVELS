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
    <?php
    include_once 'include/head.php';
    ?>
    <link rel="shortcut icon" href="./dist/img/ece.jpg">
    <link rel="icon" href="./dist/img/ece.jpg" type="image/x-icon">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f0f0f0;
        }
        
        .card-header {
            background-color: #333;
            color: #fff;
        }
        
        .small-box {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .small-box-inner {
            text-align: center;
        }
        
        .small-box-icon {
            font-size: 28px;
            color: #333;
        }
        
        .small-box-title {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }
        
        .small-box-footer {
            color: #333;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php
    include_once 'include/navbar.php';
    include_once 'include/sidebar.php';
    ?>
    <div class="content-wrapper" style="background-color: gray;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?= $menu ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-header" style="background-color: black;">Admin Dashboard</div>
                <div class="card-body" style="background-color: black;">
                    <div class="container-fluid p-2">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="small-box-inner">
									   <img class='w-25' src="./dist/img/Ac.jpg" alt="indoarsip-logo" style='border-radius:50px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-Photo	"></i>
                                        </div>
                                        <h3 class="small-box-title"></h3>
                                        <h4>AGENTS</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF EMPLOYEES <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-lightblue">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/non-ac.jpg" alt="indoarsip-logo" style='border-radius:50px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-Photo"></i>
                                        </div>
                                        <h3 class="small-box-title"></h3>
                                        <h4> MANAGERS</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF MANAGERS<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-gray">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/bus.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-video"></i>
                                        </div>
                                        <h3 class="small-box-title"></h3>
                                        <h4> OPERATORS</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF OPERATORS<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/bus-log.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-Drone"></i>
                                        </div>
										<h3 class="small-box-title"></h3>
                                        <h4>SERVICES</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF SERVICES<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-gray">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/bus.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-video"></i>
                                        </div>
										<h3 class="small-box-title"></h3>
                                        <h4>PACKING</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF PACKINGS<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-gray">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/bus.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-video"></i>
                                        </div>
										<h3 class="small-box-title"></h3>
                                        <h4>SHIPPING</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF SHIPPINGS<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
							<div class="col-lg-3 col-6">
                                <div class="small-box bg-gray">
                                    <div class="small-box-inner">
									<img class='w-25' src="./dist/img/bus.jpg" alt="indoarsip-logo" style='border-radius:100px'><br>
                                        <div class="small-box-icon">
                                            <i class="ion ion-video"></i>
                                        </div>
                                        <h3 class="small-box-title"></h3>
                                        <h4>DRIVERS</h4>
                                    </div>
                                    <a href="#" class="small-box-footer">NO.OF DRIVERS<i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>636</h3>

                                                <p>NEW Visitors</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-pie-graph"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info
											<i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>98<sup style="font-size: 15px">%</sup></h3>

                                                <p>Employee working hours</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info 
                </div>
            </div>
        </section>
    </div>
    <?php include_once './include/footer.php'; ?>
</div>
</body>
</html>
<?php
}
?>
