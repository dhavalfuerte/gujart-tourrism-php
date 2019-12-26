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
	$qry="insert into register(FirstName,Middlename,lastname,address,zipcode,MobileNo,email,password) values('$fname','$mname','$lname','$address','$zipcode',$phno,'$email','$psw')";
	//echo $qry;
	$rs=mysql_query($qry);
	mysql_close($cn);
	echo "<script>window.location='login.php'</script>";
?>
