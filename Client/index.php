
<?php include 'Hedder.php'; ?>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: "Poor Richard";
	font-size: 45px;
	color: #CC9900;
	background:#000000;
}
.bor1
{
	border-style:groove;
}
.img1:hover
{
	opacity:0.2;
}
.td1
{
	border-color:#CC9900;
	color:#CC9900;
}
.link:a
{
	color:#CC9900;
}

-->
</style>
	<script type="text/javascript">
		function displaynextimage()
		{
			x=(x===images.length-1)?0:x+1;
			document.getElementById("img").src=images[x];
		}
		function displaypreviousimage()
		{	
			x=(x<=0)?images.length-1:x-1;
			document.getElementById("img").src=images[x];
		}
		
		function starttimer()
		{
			setInterval(displaynextimage,3000);
		}
		
		var images=[],x=-1;
		
		images[0]="1.jpg";
		images[1]="2.jpg";
		images[2]="3.jpg";
</script>
</head>

<body bgcolor="#000000" onLoad="starttimer()">
<table width="100%" height="50%" border="0">
<tr height="50%" align="center"><td><img id="img" src="wel_guj.jpg" height="400" width="100%"></td></tr>
</table>
<table width="100%" height="25%" border="1" class="td1" >
<tr height="30%" bordercolor="#FFFFFF">
<td width="20%" height="20%" align="center" valign="middle"><h4>About of Gujarat</h4><br /><a class="link" href="gujaratatglance.php">Gujarat at Glance</a><br /><br />A perfect holiday destination 365 days on holiday</td>
        
        <td width="20%" height="20%" align="center" valign="middle"><h4>About of Gujarat Tourism</h4><br /><a href="aboutus.php"> About of Gujarat Tourism</a><br /><br />A signature of excellence</td>
        
        <td width="20%" height="20%" align="center" valign="middle"><h4>About Gujarat City</h4><br /><a href="">About Gujarat City</a><br /><br />Ahmedabad situated on the banks of river sabarmati.Ahmedabad is located</td>
        
        <td width="20%" height="20%" align="center" valign="middle">
        <marquee scrolldelay="250" direction="down">pro kabaddi league 2017:haryana steelers,gujarat fortunegiants playout thrilling tie <hr><hr>kathiyavadi thali:more then just a spicy cousin.of the gujarati thali<hr><hr></marquee>
        	
        
      
                </td></tr>
</table>
<table height="40%" border="0" width="100%" align="center">
<tr height="10%">
  <td colspan="5" align="center" bgcolor="#000000"><span class="style1">Famous Place</span></td>
</tr>
<tr align="center"><td class="img1" ><a href="famous1.php"><img src="../image/gir.jpg"></a></td><td class="img1" ><a href="famous2.php"><img src="../image/kutch.jpg"></a></td><td class="img1"><a href="famous4.php"><img src="../image/Saputara Hill Resort0.jpg"></a></td><td class="img1"><a href="famous5.php"><img src="../image/Watson Museum0.jpg"></a></td></tr>
</table>
</body>
<?php mysql_close($cn); ?>
<?php include 'footer.php'; ?>