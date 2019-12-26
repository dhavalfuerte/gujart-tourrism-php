<?php
		$id=$_POST['id'];
		$ctnm=$_POST['ctname'];
		$chk=$_POST['chk'];
		$path="".basename($_FILES['href']['name']);
		move_uploaded_file($_FILES['href']['tmp_name'],$path);
			
		//change name of file at both place
	if($chk)
	{
		$img="../attration/".basename($_FILES['img']['name']);
		move_uploaded_file($_FILES['img']['tmp_name'],$img);
			
		$query="update attraction set catagoryname='$ctnm',image='$img',href='$path' where att_id=$id";
	}
	else
	{
		$query="update attraction set catagoryname='$ctnm',href='$path' where att_id=$id";
	}
		//echo $query;
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		mysql_query($query,$con);
		header('location:attrection.php');
?>