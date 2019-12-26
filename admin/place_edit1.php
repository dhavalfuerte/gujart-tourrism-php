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
			
		$query="update placeto set city_name='$ctnm',city_image='$img',city_href='$path' where city_id=$id";
	}
	else
	{
		$query="update placeto set city_name='$ctnm',city_href='$path' where city_id=$id";
	}
		//echo $query;
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		mysql_query($query,$con);
		header('location:placetogo.php');
?>