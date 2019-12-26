<?php include 'Hedder.php'; ?>
<style>
input[type=text],select,textarea
{
	width:100%;
	padding:12px;
	border:1px solid #ccc;
	boder-radius:4px;
	box-sizing:border-box;
	margin-top:6px;
	margin-bottom:16px;
	resize:vertical;
}

input[type=submit]
{
	background-color:#4CAF50;
	color:white;
	padding:12px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
}

input[type=submit]:hover
{
	background-color:#45a049;
}

.container
{	
	background-radius:5px;
	background-color:#f2f2f2;
	padding:20px;
}

.style1 {color: #CC9900}
.style3 {font-size: 24px}
</style>
<body bgcolor="#000000">
<table width="100%" height="80%">
<tr height="8%"><td colspan="2" valign="middle"><br><h2 class="style1">Feedback</h2></td>
</tr>
<tr>
<td>
<div class="container">
    
    	<form action="ac_contact.php" method="post">
       <label for="fname">First Name</label>
       <input type="text" id="fname" name="fname" placeholder="Your Name" required/>
       <label for="fname">Last Name</label>
       <input type="text" id="lname" name="lname" placeholder="Your Last Name" required/>
       
       <label for="City">City</label>
       <select id="city" name="city" required>
       
       <option value="ahemdabad">Ahemdabad</option>
       <option value="amreli">Amreli</option>
       <option value="anand">Anand</option>
              <option value="bhuj">Bhuj</option>
                     <option value="rajkot">Rajkot</option>
                            <option value="vadodara">Vadodara</option>
                                   <option value="usa">Anand</option>
       </select>
       
       <label for="subject">Subject</label>
       <textarea id="subject" name="subject" placeholder="Write Something..." style="height:200px" required></textarea>
       
       <input type="submit" name="sub" value="submit" />
       </form>
       
      

       </div></td>
     
       </tr>
</table>
<br><br>
<?php include 'footer.php'; ?>