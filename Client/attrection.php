
<?php include 'Hedder.php'; ?>
<style>
.style9 {
	font-family: "Poor Richard";
	font-size: 28px;
	color: #CC9900;
	background:#000000;
}
.a1:hover
{
	opacity:0.2;
	color:#CC9900;
}
</style>
<body bgcolor="#000000">
<br><br><br><br>
	<table bgcolor="#000000" style="width:100%;" height="100%" cellspacing="5" class="style9">
<tr><td valign="top" align="center">
<table cellspacing="5" cellpadding="15" class="style9">
	<tr>
	<?
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$qry="select * from attraction";
		$rs=mysql_query($qry);
		$cnt=1;
		while($row=mysql_fetch_array($rs))
		{
	?>
		<td>
			<table border="0" style="width:100%;">
            <?
            	echo "<tr><td width=50% align='center' valign='middle'><font size='+3'><a class='a1' href='$row[href]'>$row[catagoryname]</a></font></td>";
                echo "<td width=50%><a class='a1' href='att_data.php?pid=$row[att_id]'><img src='$row[image]' height='250' width='300' /></a></td></tr>";
                ?>
            </table>
	<?
		if($cnt == 2)
		{
			echo "</td>";
			echo "</tr><tr>";
			$cnt=1;
		}
		else
			$cnt++;
		}
	?>
		</td>
	</tr>
</table>
</td></tr></table>
    <br><br><br>
    </body>
<?php include 'footer.php'; ?>
  
     
        