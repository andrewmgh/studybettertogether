function validateRegForm()
{
	var user=document.getElementById('username').value;
	var letters = /^[0-9a-zA-Z]+$/;  
	var pwd1 = document.getElementById('password').value;	
	var pwd2 = document.getElementById('password_confirm').value;	

	if ((user.length < 6) || !(user.match(letters)))
		{
		  alert("The username must be at least 6 characters and can only contain letters and numbers. Please try again.");
		  return false;
		}	
	if ((pwd1.length < 6)  || ((!/[a-z]/.test(pwd1) || ! /[A-Z]/.test(pwd1) ||! /[0-9]/.test(pwd1)))) 
	{
		  alert("Your password must be at least 6 characters and contain one uppercase letter, one lowercase letter and one number");
		  return false;
	}

	if (pwd1 != pwd2)
		{
		  alert("The passwords do not match. Please try again.");
		  return false;
		}	
}

function validatePassword()
{
	var pwd1 = document.getElementById('password').value;	
	var pwd2 = document.getElementById('password_confirm').value;	
	
	if (pwd1){
		if ((pwd1.length < 6)  || ((!/[a-z]/.test(pwd1) || ! /[A-Z]/.test(pwd1) ||! /[0-9]/.test(pwd1)))) 
		{
			  alert("Your password must be at least 6 characters and contain one uppercase letter, one lowercase letter and one number");
			  return false;
		}
	}	
		if (pwd1 != pwd2)
			{
			  alert("The passwords do not match. Please try again.");
			  return false;
			}	
	
}
