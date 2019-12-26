 <?
	$email=$_POST['email'];
	$psw=$_POST['psw'];
	
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("gujarat",$cn);
	$qry="insert into signup values('$email','$psw')";
	$rs=mysql_query($qry);
	
	mysql_close($cn);
?>