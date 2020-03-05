<?php
 require_once("config/db.php");
//include("form.html");
$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$email = $_POST['email'];
$Designation = $_POST['Designation'];

$sql ="INSERT INTO `employee`( `emp_name`, `email`, `Designation`) VALUES ('$emp_name','$email','$Designation')";
//echo $sql; exit();
$res = mysqli_query($con,$sql);

if($res == 1){
    echo "Inserted successfully";
}
else{
    echo "Insertion Failed, Try Again.......";
}



?>