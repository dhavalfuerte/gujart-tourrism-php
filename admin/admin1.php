<?php	session_start();
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("gujarat",$cn);
	$qry="select * from admin where username='$email' and password='$psw'";
	$rs=mysql_query($qry);
	$cnt=mysql_num_rows($rs);
	
		if($cnt>0)
		{
			$_SESSION["unm"]=$email;
			echo "<script>window.location='adminhome.php'</script>";
//			header('location:home.php');
		}
		else
		{
			echo "<script>window.location='index.php'</script>";
		}
	
	mysql_close($cn);
?>

	