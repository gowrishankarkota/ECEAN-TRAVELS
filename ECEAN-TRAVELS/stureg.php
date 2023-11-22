<!DOCTYPE html>
<html lang="en">
<head>
     <?php
	 session_start();
        include_once 'include/head.php';
        ?>
        <link rel="shortcut icon" href="./dist/img/slogo.jpg">
        <link rel="icon" href="./dist/img/slogo.jpg" type="image/x-icon">
</head>
 <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
              
 <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>
<div class="content-wrapper">
  <section class="content">	
 <div class="col-md-12">  
 <h2>Employee Registration</h2>
 <form id="studentForm" method="post"  action="insertstudent.php"  >
 <div class="form-group">
     <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
       </div>
      <div class="form-group">
      <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" name="email" required>
         </div>
        <div class="form-group">
        <label for="age">Age:</label>
         <input type="number" class="form-control" id="age" name="age" required>
        </div>
		<div>
		 <label for="gender">Gender:</label>
        <select id="gender" name="gender" class="form-control" required>
            <option value="select gender">Select Gender</option>		
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">other</option>
        </select>
		<div class="form-group">
     <label for="name">Phone Number:</label>
      <input type="number" class="form-control" id="number" name="number" required>
       </div>
   <div class="form-group">
		<label  for="program"> Department </label>
  <?php
	  
   include("./include/conn.php"); 
  $sql = "select * from tblprogram "; 
	$rs = $conn->query ($sql); ?>
	 <select  name='department' id='department' class='form-control'> 
	  <option value=''>Select department </option> 
	<?php 
	while ($row =  $rs->fetch_assoc()) {  ?>
	<option  value=<?php echo $row['dept_code'];?> > <?php echo $row['dept_code'];?> </option>
     <?php      
	 }
	 ?>
 </select></div> 
 <div id='res' style='color:red;'></div> 
 

<div class="form-group">
<label  for="course">Jobrole</label>
 <?php
$sql = "select * from tblcourse   "; 
	$rs = $conn->query ($sql);  ?>
  <select  name='job_role' id='job_role' class='form-control'> 
	  <option value=''>Select job role</option>
<?php 			 
	while ($row =  $rs->fetch_assoc()) {  ?>
	<option   value=<?php echo $row['job_role'];?> > <?php echo $row['job_role'];?> </option>
   <?php        }
      ?>                             
 </select> 
	</div>				 	
     
        <br>
		
		</div>
        
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="result"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   $(document).ready(function() {
   $("#studenForm").submit(function(e) {
    e.preventDefault();
                
        $.ajax({
            type: "POST",
             url: "insert76.php",
           data: $(this).serialize(),
           success: function(res) {
           $("#result").html(res);
              }
                });
            });
        });
    </script>
 
<script type="text/javascript">
$(document).ready(function(){
  $('#department').on('change',function(){
    var department = $(this).val();
         
    if(department){
      $.ajax({
        type:'POST',
        url:'ajaxData.php',
        data:'department='+department, // Change 'program' to 'department'
        success:function(res){
          alert(res);
          data = res.split("#");
          $('#job_role').html(data[0]); // Change 'course' to 'job_role'
          $('#res').html(data[1]);
        }
      });
    } 		
  });					
});
  
 </script> 
        <!-- jQuery -->
<?php include_once './include/scripts.php'; ?>
</body>
</html>
