<?php include 'adminhedder.php'; ?>
<style>
.k1
{
	color:#CC9900;
	font-size:18px;
}
</style>
<body bgcolor="#000000">
<form name="frmproduct" method="post" action="add_place1.php" enctype="multipart/form-data">
<br><br><br><br><br><br><br><br>
    <table border="1" align="center" bgcolor="#FFFFFF" bordercolor="#CC9900" width="50%" height="50%">
    	<tr>
        	<td align="right"  class="k1">City Name : </td>
            <td><input type="text" name="txtctnm" required/></td>
        </tr>
        <tr>
        	<td align="right" class="k1">City Image : </td>
            <td><input type="file" name="ctimg"/></td>
        </tr>
        <tr>
        	<td align="right" class="k1">File Path : </td>
            <td><input type="file" name="path"/></td>
        </tr>
        <tr align="center">
        	<td><input type="submit" name="subadd" value="Add"/></td>
            <td><input type="reset" name="rescan" value="Cancel"/></td>
        </tr>
      </table>
   </form>
   </body>