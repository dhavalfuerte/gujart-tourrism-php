<?php include 'Hedder.php'; ?>
<table bgcolor="#000000" style="width:100%;">
<tr><td valign="top" align="center">
<table>
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
            	<tr><td width="50%;"><font color="#FFFFFF" size="+3"><?=$row["catagoryname"]?></font></td><td width="50%;"><a href="<?=$row["href"]?>"><img src="<?=$row["image"]?>" height="300" width="300" /></a></td></tr>
            </table>
	<?
		if($cnt == 3)
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
<?php include 'footer.php'; ?>