<?php include 'adminhedder.php'; ?>
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

<?php include 'adminfooter.php'; ?>