function validateRegForm()
{
	var user=document.getElementById('username').value;
	var letters = /^[0-9a-zA-Z]+$/;  
	var password_letters = /^[0-9a-zA-Z]+$/;  
	var pwd1 = document.getElementById('password').value;	
	var pwd2 = document.getElementById('password_confirm').value;	

	if ((user.length < 6) || !(user.match(letters)))
		{
		  alert("The username must be at least 6 characters and can only contain letters and numbers. Please try again.");
		  return false;
		}
		
	if ((pwd1.length < 6) || (!password_letters.test(pwd1)))
	{
		  alert("Your password must be at least 6 characters and contain at least one capital letter and one number");
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
	var password_letters = /^[0-9a-zA-Z]+$/;  
	var pwd1 = document.getElementById('password').value;	
	var pwd2 = document.getElementById('password_confirm').value;	
		
	if ((pwd1.length < 6) || (!password_letters.test(pwd1)))
	{
		  alert("Your password must be at least 6 characters and contain at least one capital letter and one number");
		  return false;
		}
	if (pwd1 != pwd2)
		{
		  alert("The passwords do not match. Please try again.");
		  return false;
		}	

}	