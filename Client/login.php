<?php
session_start();
include("Hedder.php");
?>
<html>
<style>

input[type=text],input[type=password]
{
	width:100%;
	padding:12px 20px;
	margin:8px 0;
	display:inline-block;
	border:1px solid #ccc;
	box-sizing:border-box;
}

button
{
	background-color:#4CAF50;
	color:white;
	padding:14px 20px;
	margin:8px 0;
	border:none;
	cursor:pointer;
	width:100%;
}

.cancelbtn
{
	padding:14px 20px;
	background-color:#f44336;
}

.cancelbtn,.signupbtn{float:left;width:50%;}

.container
{
	padding:16px;
}

.model
{
	display:none;
	position:fixed;
	z-index:1;
	left:0;
	top:0;
	width:100%;
	height:100%;
	overflow:auto;
	background-color:rgb(0,0,0);
	background-color:rgba(0,0,0,0.4);
	padding-top:60px;
}

.model-content
{
	background-color:#fefefe;
	margin:5% auto 15% auto;
	border:1px solid #888;
	width:80%;
}

.close
{
	position:absolute;
	right:35px;
	top:15px;
	color:#ooo;
	font-size:40px;
	font-weight:bold;
}

.close:hover,.close:focus
{
	color:red;
	cursor:pointer;
}

.clearfix::after
{
	content:"";
	clear:both;
	display:table;
}

@media screen and(max-width:300px)
{
	.cancelbtn,.signupbtn
	{
		width:100%;
	}
}
.sty
{
	color:#CC9900;
}
</style>
<body bgcolor="#000000">
	
    
       <h2 align="center" class="sty">Login</h2>
    <hr><hr>
    <div id="id01" class="modal">
    <span onClick="document.getElementById('id01').style.display='none'" class="close" title="close modal"></span>
    
    <form method="post" class="model-content animate" action="login1.php">
    <div class="container">
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Mail" name="email" required>
    
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    

	<input type="checkbox" checked="checked">remember me
    
    <p>by creating an account you agree to our
    
    <a href="#">terms & privercy</a></p>
    
    <div class="clearfix">
    	<button type="reset" class="cancelbtn">cencel</button>
        <button type="submit" class="signupbtn">Login</button>
        </div>
        </div>
        </form>
       
       </div>
       
       <script>
	   	var modal=document.getElementById('id01');    
		window.onclick=sunction(event)
		{
			if(event.target==modal)
			{
				model.style.display="none";
			}
		}
		</script>
        </body>
        </html>
<?php
session_start();
include("footer.php");
?>