<?php 
		$ctnm=$_POST['txtattnm'];
		
		$ctimagepath="../attration/".basename($_FILES['attimg']['name']);
		move_uploaded_file($_FILES['attimg']['tmp_name'],$ctimagepath);	
		
			
		$path="".basename($_FILES['path']['name']);
		move_uploaded_file($_FILES['path']['tmp_name'],$path);	
		
		
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$query="insert into attraction(catagoryname,image,href) values('$ctnm','$ctimagepath','$path')";
		$res=mysql_query($query,$con);
		header('location:attrection.php');
?>	