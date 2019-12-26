<?php
include("Hedder.php");
?>
<style>
.k1
{
	color:#CC9900;
	text-align:left;
}
</style>
<body bgcolor="#000000">
	<div class="k1">
 						
	<table align="center" cellspacing="5" cellpadding="15">
    <tr>
    	<?
			$con=mysql_connect("localhost","root","");
			$db=mysql_select_db("gujarat",$con);
			$q="select * from att_data where att_id=$_REQUEST[pid]";
			$rs=mysql_query($q);
			while($row=mysql_fetch_array($rs))
			{
		?>
        <td><img src="<?=$row["att_image"]?>" height='250' width='300' /></td>
        <?
			}
		?>
        
</tr>
</table>

	
</div>
</body>	

	
	
	<?php
	include("footer.php");
	?>