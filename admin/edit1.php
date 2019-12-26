<?php include 'adminhedder.php'; ?>
<?php 	
		$a=$_REQUEST['v'];
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$query="select * from news where id=$a";
		$res=mysql_query($query,$con);
		
		$hrow=mysql_fetch_array($res);
		
?><!-- also check validations -->
<body bgcolor="#000000">
	<form name="frmproduct" method="post" action="update1.php" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $a;?>" />
    <br><br>
    <table style='color:#CC9900;' align="center" border="1" >
    	<tr>
        	<td align="right">News : </td>
            <td><input type="text" height="20%" width="20%" size="100%" name="txtnews" value="<?php echo $hrow['news'];?>" /></td>
        </tr>
        	<td><input type="submit" name="subadd" value="Update" onClick="return funval()"/></td>
            <td><input type="reset" name="rescan" value="Cancel"/></td>
        </tr>
      </table>
   </form>
</body>
