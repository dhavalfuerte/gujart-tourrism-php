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
    <h2 align="center">News</h2>
    <hr><hr>    
   	<tr class="ta">
    <th>Id</th>
    <th>News</th>
	<th>Edit</th>
	<th>Delete</th>                       
    </tr>
    <tr>
  	<?php 
		$id=$row['id'];
		echo $id;
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$cn);
		$qry="select * from news";
		$rs=mysql_query($qry);
	  	while($row=mysql_fetch_array($rs))
	  	{
				echo "<form method='POST' action='delete.php'>";
				echo "<td align='center' valign='middle'>".$row['id']."</td>";
				
				echo "<td align='center' valign='middle'>".$row['news']."</td>";
				echo "<td align='center' valign='middle'><a href='edit1.php?v=$row[id]'><input type='button' name='ed' value='Edit' /></a></form></td>";
				echo "<td align='center' valign='middle'><a href='delete2.php?id=$row[id]'><input type='button' name='del' value='delete' /></a></form></td></tr>";
		
		}
		mysql_close($cn);
	?>
</table>
 
        