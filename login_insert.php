<?php 
session_start();
include("dbcon.php");
$a =$_POST['email'];
$b =$_POST['pass'];
$data ="SELECT * from signup where email ='$a' && password ='$b'";
$result =mysqli_query($con,$data);
echo "<pre>";
print_r($result);
$tt =mysqli_num_rows($result);
// echo "<pre>";
// print_r($b);
$kk =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($result);
// die;
if ($tt ==1) {
	// $_SESSION['ankush'] ='login successfuly';
	$_SESSION['ankush'] = $a;
	$_SESSION['n']=$kk['username'];
	header('location:descbord.php');
}
else{
	$_SESSION['error']= "invalid username or password";
	header('location:login.php');
}




?>