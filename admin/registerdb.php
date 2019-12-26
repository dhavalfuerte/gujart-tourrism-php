 <?
 
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
	$zipcode=$_POST['zipcode'];
	$phno=$_POST['phno'];
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("gujarat",$cn);
	$qry="select * from register";
	$rs=mysql_query($qry);
	mysql_close($cn);
	//echo "<script>window.location='login.php'</script>";
?>
