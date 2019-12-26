<?php include 'Hedder.php'; ?>
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
h2
{
	color:#CC9900;
	font-size:36px;
}
</style>
<body bgcolor="#000000">
	<table border="1" width="100%" height="80%">
    <tr><td>
    
    <h2 align="center">New User</h2>
    <hr><hr>
    <div id="id01" class="modal">
    <span class="close" title="close modal"></span>
    
    <form method="post" class="model-content animate" action="registerdb.php">
    <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" onKeyPress="abc()" required>
    <label><b>Middle Name</b></label>
    <input type="text" placeholder="Enter Middle Name" name="mname" required>
    <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>
    <label><b>Address</b></label>
    <br><textarea placeholder="Enter Address" name="address" cols="50" rows="6" required></textarea>	    
    <br><br><label><b>Zipcode</b></label>
    <input type="text" placeholder="Enter Zipcode" name="zipcode" maxlength="6" required>
    <label><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phno" maxlength="10" required>
    <label><b>E-mail</b></label>
    <input type="text" placeholder="Enter E-mail" name="email" required>
    
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

	<input type="checkbox" checked="checked">remember me
    
    <p>by creating an account you agree to our
    
    <a href="#">terms & privercy</a></p>
    
    <div class="clearfix">
    	<button type="reset" class="cancelbtn">cencel</button>
        <button type="submit" class="signupbtn">signup</button>
        </div>
        </div>
        </form>
       </div>
       
       </td></tr>
    
<?php include 'footer.php'; ?>        
        