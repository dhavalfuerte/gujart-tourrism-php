<?php 
	session_start();
	
		$news=$_POST['txtnews'];
		$id=$_POST['id'];
		$query="update news set news='$news'	where id=$id";
	
		//echo $query;
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		mysql_query($query,$con);
		header('location:news.php');
?>