<?php 
		$ctnm=$_POST['txtctnm'];
		
		$ctimagepath="../placetogo/".basename($_FILES['ctimg']['name']);
		move_uploaded_file($_FILES['ctimg']['tmp_name'],$ctimagepath);	
		
			
		$path="".basename($_FILES['path']['name']);
		move_uploaded_file($_FILES['path']['tmp_name'],$path);	
		
		
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$query="insert into placeto(city_name,city_image,city_href) values('$ctnm','$ctimagepath','$path')";
		$res=mysql_query($query,$con);
		header('location:placetogo.php');
?>	