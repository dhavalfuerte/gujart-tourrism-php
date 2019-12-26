 <?
	$id=$_POST['id'];
	$cn=mysql_connect("localhost","root","");
	$db=mysql_select_db("gujarat",$cn);
	$qry1="delete from attraction where att_id='$_REQUEST[id]'";
	$rs1=mysql_query($qry1);
	mysql_close($cn);
	echo "<script>window.location='attrection.php'</script>";
?>