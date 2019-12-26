
<?php include 'Hedder.php'; ?>
<style>
.style9 {
	font-family: "Poor Richard";
	font-size: 28px;
	color: #CC9900;
	background:#000000;
}
</style>
<table border="1" width="80%" align="center" height="80%">
<tr>
<?
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$qry="select * from news";
		$rs=mysql_query($qry);
		$cnt=1;
		while($row=mysql_fetch_array($rs))
		{
	?>
<td class="style9" valign="middle" align="center"><?=$row["news"]?></td>
</tr>
<?
		if($cnt == 1)
		{
			echo "</td>";
			echo "</tr>";
			$cnt=1;
		}
		else
			$cnt++;
		}
	?>
</table>
<?php include 'footer.php'; ?>
