<?php
//Include database configuration file
 include("./include/conn.php"); 


if(  isset($_POST["department"]) && !empty($_POST["department"])){
     $s="SELECT job_role FROM tblcourse where dept_code='".$_POST["department"]."' ";
    $rs = $conn->query($s);
     
    //Count total number of rows
    $rowCount = $rs->num_rows;
    
    if($rowCount > 0){
   echo '<option value="">Select job_role</option>';
   while($row = $rs->fetch_assoc()){ 
   echo '<option value="'.$row['job_role'].'">'.$row['job_role'].'</option>';
        }
    }else{
       echo '<option value="">Course not available</option>';
    }
	
	$query = $conn->query("SELECT * FROM tblprogram where dept_code='".$_POST["department"]."' ");
	if($row = $query->fetch_assoc()){
		echo "#".$row['department'];
	}
}

$conn->close();
?>