<? session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #CC9900;
	font-family: "Poor Richard";
	font-size: 45px;
}
a
{
	text-align:center;
	color:#FFFFFF;
	text-decoration:none;
}

.style2:hover, a:hover
{
	color:#CC9900;
	background-color:#000000;
}
.k1
{
	text-align:center;
	display:
}
.style2 {
	
	text-align:center;
	font-family: "Poor Richard";
	font-weight: lighter;
	font-size: 18px;
	
}
.style3 {
	
	font-family: "Poor Richard";
	font-size: 20px;
	color:#CC9900;
	
}

</style>
</head>

<body>
<table height="20%" width="100%" bgcolor="#000000">
  <tr>
    <td valign="top">
    <tableheight="50" width="100%">
      <tr>
        <td width="80%" valign="top"><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gujarat Tourism</span></td>
        <td width="20%" valign="top"><div class="style3">Welcome Admin</div>&nbsp;</td>
      </tr>  
    </table>
    <table width="100%" height="5%" border="0" bgcolor="#CC9900">
      <tr align="center">
       
        <td class="style2" width="12.5%"><a href="attrection.php">Attractions</a></td>
        <td class="style2" width="12.5%"><a href="placetogo.php">Place To Go</a></td>
        <td class="style2" width="12.5%"><a href="news.php">News</a></td>
       
        <td class="style2" width="12.5%"><a href="contact.php">Feedback</a></td>
          <?php
        	if(!isset($_SESSION["unm"]))
			{
		?>
         <td class="style2" width="12.5%"><a href="index.php">Login</a></td>
         <?php }
			else
			{
			 ?>
             <td class="style2" width="12.5%"><a href="logout.php">Logout</a></td>
        	<?php } ?>
        
      
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
