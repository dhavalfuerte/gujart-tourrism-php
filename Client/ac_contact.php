 <?php
		$fnm=$_POST['fname'];
		$lnm=$_POST['lname'];
	    $city=$_POST['city'];
	    $sub=$_POST['subject'];
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$cn);
		$qry="insert into contact(FirstName,LastName,City,Subject) values('$fnm','$lnm','$city','$sub') ";    
		$rs=mysql_query($qry);
		mysql_close($cn);
		echo "<script>window.location='feedback.php'</script>";
?>