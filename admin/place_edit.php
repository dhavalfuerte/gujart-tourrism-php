<?php include 'adminhedder.php'; ?>
<?php 	
		$a=$_REQUEST['id'];
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("gujarat",$con);
		$query="select * from  placeto where city_id=".$a;
		$res=mysql_query($query,$con);
		
		$hrow=mysql_fetch_array($res);
		
?>
<body bgcolor="#000000">
	<form name="frmproduct" method="post" action="place_edit1.php" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="<?php echo $a;?>" />
    <table style='color:#CC9900;' border="1" align="center" bgcolor="#FFFFFF" bordercolor="#CC9900" >
    	<tr>
        	<td align="right">city name : </td>
            <td><input type="text" height="20%" width="20%" size="100%" name="ctname" value="<?php echo $hrow['city_name'];?>" /></td>
        </tr>
        <tr>
        	<td align="right">Change Image : </td>
            <td><table><tr><td><input type="checkbox" id="chk" name="chk" value="1" onChange="fun()"/>
            <div id="d1"></div>
            </td>
            <td><img src='<?php echo $hrow['city_image'];?>' height="100" width="125"/>
            </td></tr></table>
            </td>
        </tr>
        <tr>
        	<td align="right">File Path : </td>
            <td><input type="file" height="20%" width="20%" size="100%" name="href" /><label><?php echo $hrow['city_href'];?></label></td>
        </tr>
        <tr align="center">
        	<td colspan="2"><input type="submit" name="subadd" value="Update" style='height:50;width:150;' onClick="return funval()"/>
           <input type="reset" name="rescan" style='height:50;width:150;' value="Cancel"/></td>
        </tr>
      </table>
   </form>
<script type="text/javascript">
	function fun()
	{
		var a=document.getElementById('d1');
		d1.innerHTML="<input type='file' id='f1' name='img'>";
	}
	function funval()
	{
		var b=document.getElementById('f1');
		var c=document.getElementById('chk');
		if(b.value=="" && c.checked)
		{
			alert("Select Image");
			return false;
		}
		return true;
	}
</script>