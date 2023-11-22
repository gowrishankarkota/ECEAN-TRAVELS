<?php

include 'conn.php'; 
// Retrieve form data and sanitize inputs
$job_role = $_POST['job_role'];
$department =  $_POST['department'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$number = mysqli_real_escape_string($conn, $_POST['number']);

// Prepare and execute SQL query
$sql = "INSERT INTO tblstureg (job_role, dept_code,name, email, age, gender, number) VALUES ('$job_role', '$department','$name', '$email', '$age', '$gender','$number')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
