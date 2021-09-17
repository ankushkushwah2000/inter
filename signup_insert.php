<?php 
include("dbcon.php");
$a =$_POST['user'];
$b =$_POST['pass'];
$c =$_POST['email'];
$d =$_POST['dob'];
$datt ="SELECT * FROM signup where email ='$c'";
$emailchek =mysqli_query($con,$datt);
// echo "<pre>";
// print_r($emailchek);
if (mysqli_num_rows($emailchek)>0) {
	echo "email is allready use";
}
else{
	$data ="INSERT INTO signup(username,password,email,dob)value('$a','$b','$c','$d')";
	mysqli_query($con,$data);
	header('location:login.php');
}
// $data ="INSERT INTO signup(username,password,email,dob)value('$a','$b','$c','$d')";
// 	mysqli_query($con,$data);



?>