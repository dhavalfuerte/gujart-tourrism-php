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
    <h2 align="center">Attraction</h2>
    <hr><hr>    
   	<tr class="ta">
    <th>Id</th>
    <th>CatagoryName</th>
	<th>Image</th> 
    <th>Edit</th>
    <th>Delete</th>                
    </tr>
    <tr>
  	<?php 
		$id=$row['att_id'];
		echo $id;
		$cn=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$cn);
		$qry="select * from attraction";
		$rs=mysql_query($qry);
	  	while($row=mysql_fetch_array($rs))
	  	{
				echo "<form method='POST' action='delete.php'>";
				echo "<td align='center' valign='middle'>".$row['att_id']."</td>";
				echo "<td align='center' valign='middle'>".$row['catagoryname']."</td>";
				echo "<td align='center' valign='middle' height='200' width='250'><img src='".$row['image']."' height='200' width='250'></td>";
				
				echo "<td align='center' valign='middle'><a href='att_edit.php?id=$row[att_id]'><input type='button' name='ed' value='Edit' /></a></form></td>";
				echo "<td align='center' valign='middle'><a href='att_delete.php?id=$row[att_id]'><input type='button' name='del' value='delete' /></a></form></td></tr>";
		
		}
		echo "<tr><td align='center' valign='middle' colspan='6'><a href='add_att.php?id=$row[att_id]'><input type='button' name='del' value='Add' style='height:100;width:250' /></a></form></td></tr>";
		mysql_close($cn);
	?>
</table>
 
        