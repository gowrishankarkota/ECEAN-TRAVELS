<?php
include("./include/conn.php");
session_start();
 
$errormsg = '';
$action = "add";

$empcode='';
$deptname='';
$name='';
$joindate='';
 
if(isset($_POST['save']))
{

$empcode= mysqli_real_escape_string($conn,$_POST['empcode']);
$deptname= mysqli_real_escape_string($conn,$_POST['deptname']);
$name= mysqli_real_escape_string($conn,$_POST['name']);
$joindate= mysqli_real_escape_string($conn,$_POST['joindate']);
   

 if($_POST['action']=="add")
 {
 
  $sql = $conn->query("INSERT INTO tbldept   VALUES ('$empcode','$deptname','$name','$joindate'  )") ;
    
    echo '<script type="text/javascript">window.name="dept.php?act=1";</script>';
 
 }else
  if($_POST['action']=="update")
 {
 $empcode = mysqli_real_escape_string($conn,$_POST['empcode']);	
   $sql = $conn->query("UPDATE  tbldept  SET  deptname  = '$deptname', name   = '$name' , joindate ='$joindate '   WHERE  empcode  = '$empcode'");
   echo '<script type="text/javascript">window.name="dept.php?act=2";</script>';
 }



}




if(isset($_GET['action']) && $_GET['action']=="delete"){

$conn->query("delete from tbldept    WHERE empcode='".$_GET['empcode']."'");
header("name: dept.php?act=3");

}


$action = "add";
if(isset($_GET['action']) && $_GET['action']=="edit" ){
$empcode = isset($_GET['empcode'])?mysqli_real_escape_string($conn,$_GET['empcode']):'';

$sqlEdit = $conn->query("SELECT * FROM tbldept WHERE empcode='".$empcode."'");
if($sqlEdit->num_rows)
{
$rowsEdit = $sqlEdit->fetch_assoc();
extract($rowsEdit);
$action = "update";
}else
{
$_GET['action']="";
}

}


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Department Added successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Department Edited successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Department Deleted successfully</div>";
}

?>

 


    
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include_once 'include/head.php';
        ?>
        <link rel="shortcut icon" href="./dist/img/logo3.PNG">
        <link rel="icon" href="./dist/img/logo3.PNG" type="image/x-icon">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
              
 <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                  <section class="content">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Employee Information 
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="dept.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="dept.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>';
						?>
						</h1>
                     
<?php

echo $errormsg;
?>
                    </div>
 
				
				
				
        <?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			 
                <div class="row">
				   <div class="col-md-8 offset-md-2">
                    
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Department": "Edit Department"; ?>
                        </div>
						<form action="dept.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Employee Code</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="empcode" name="empcode" value="<?php echo $empcode;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Department name </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="deptname" name="deptname"><?php echo $deptname ;?></textarea >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Name</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>"  /> 
							</div>
								
								
							</div>
							
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Join date </label>
								<div class="col-sm-10">
	                        <input type="date" class="form-control" id="joindate" name="joindate" value="<?php echo $joindate;?>"  />
								</div>
							</div>
							
							 
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $empcode;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			  </div>
              
               

			   
			   
		 


			   
		<?php
		}else{
		?>
		
		 
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage employee Dashboard 
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Employee code</th>
											<th>Department name</th>
                                            <th>name</th>
											<th>joindate date</th>
											
											
                                            
											 
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "select * from tbldept ";
									$q = $conn->query($sql);
									$i=1;
				while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['empcode'].'</td>
                                            <td>'.$r['deptname'].'</td>
											<td>'.$r['name'].'</td>
											<td>'.$r['joindate'].'</td>
                                            
											  
											<td>
											<a href="dept.php?action=edit&empcode='.$r['empcode'].'" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
											
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="dept.php?action=delete&empcode='.$r['empcode'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> </td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	 
		
		<?php
		}
		?>
				
			</section>	
            
            </div>
            
<?php include_once './include/footer.php'; ?>
        

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
     </div>
    <!-- /. WRAPPER  -->   
        <!-- ./wrapper -->

        <!-- jQuery -->
<?php include_once './include/scripts.php'; ?>
    </body>

    </html>

 