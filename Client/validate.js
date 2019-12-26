Function char(e)
{
		var n;
		if(window.event)
		{
			n.keyCode;
		}
		else if(e.which)
		{
			n=e.which;
		}
		
		if((n>=65 && n<=90) || (n>97 && n<=122) || n==95 || n==32 n==8)
		{
			return true;
		}
		else
		{
			return false;
		}
}

Function num(e)
{
	var n;
	if(window.event)
	{
		n.keyCode;
	}
	else if(e.which)
	{
		n=e.which;
	}
	
	if((n>=48 && n<=57) || n==95 || n==32 || n==8)
	{
		return true;
	}
	else
	{
		false;
	}
}