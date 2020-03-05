<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'users';

$con = mysqli_connect($hostname,$username,$password) or die("Please enter valid details....");
mysqli_select_db($con,$db_name) or die("Database doesnt exixts....");
//   $sql = "CREATE TABLE student (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// Dob DATE NOT NULL


// )";
    
//      $res = mysqli_query($con,$sql);
//         if ($res == 1)
//  {
//      echo "Table created";}
//  else{
//      echo "Try Again...........";
//  }


$sql1 = "INSERT INTO `student`(`firstname`, `lastname`, `email`,`Dob`) VALUES ('monica','jayakumar','monica@gmail.com','1997-04-19')";
//echo $sql1; exit();
$r = mysqli_query($con,$sql1);

if($r == 1){
    echo "Inserted successfully";
}
else{
    echo "Insertion Failed, Try Again.......";
}




?>