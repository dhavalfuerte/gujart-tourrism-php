 <?php
	session_start();
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("gujarat",$cn);
	$qry="select email,password from register where email='$email' and password='$psw'";
	$rs=mysql_query($qry);
	$cnt=mysql_num_rows($rs);
	$msg="username and password is wrong";
		if($cnt>0)
		{
			$_SESSION["unm"]=$email;
			echo "<script>window.location='index.php'</script>";
//			header('location:home.php');
		}
		else
		{
			echo "<script>window.location='login.php'</script>";
		}
	
	mysql_close($cn);
?>
