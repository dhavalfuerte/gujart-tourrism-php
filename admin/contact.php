<?php include 'adminhedder.php'; ?>
<style>
.a
{
	color:#FF0000;
	
	text-decoration:underline;
}
.a:hover
{
	background-color:#FFFFFF;
}

h2
{
	color:#CC9900;
	font-size:36px;
}
.ta
{
	color:#CC9900;
	border-color:#CC9900;	
}


</style>

<body bgcolor="#000000">
	<table class="ta" border="1" width="100%"  bgcolor="#FFFFFF">
    <h2 align="center">User Register</h2>
    <hr><hr>    
   	<tr class="ta">
    <th>Id</th>
    <th>First Name</th>
	<th>Last Name</th>    
    <th>City</th>
    <th>Subject</th>
    <th>Delete</th>                        
                      
    </tr>
    <tr>
  	<?php 
		$id=$row['id'];
		echo $id;
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$cn);
		$qry="select * from contact";
		$rs=mysql_query($qry);
	  	while($row=mysql_fetch_array($rs))
	  	{
				echo "<form method='POST' action='delete.php'>";
				echo "<td align='center' valign='middle'>".$row['id']."</td>";
				echo "<td align='center' valign='middle'>".$row['FirstName']."</td>";
				echo "<td align='center' valign='middle'>".$row['LastName']."</td>";					
				echo "<td align='center' valign='middle'>".$row['City']."</td>";
				echo "<td align='center' valign='middle'>".$row['Subject']."</td>";
				echo "<td align='center' valign='middle'><a href='delete1.php?id=$row[id]'><input type='button' name='del' value='delete' /></a></form></td></tr>";
		
		}
		mysql_close($cn);
	?>
</table>
 
        