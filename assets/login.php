<?php 
//include 'config.php';
 
$username = $_POST['username'];
//$password = md5($_POST['password']);
$password = $_POST['password'];

if($username == 'admin' && $password == 'admin'){
	header("location:<?php echo base_url();?>assets/admin/index.html");
}else{
	alert('Username dan Password salah!');
}
/*
$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php");	
}
 */
 
?>