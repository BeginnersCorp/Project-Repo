<?php
	
	function IsValidName($name)
	{
		$divide = explode(" ", $name) ;
		$validname = false ;
		if(preg_match("/[a-zA-Z ]/",$name))
		{
			$validname = true ;
		}
		return $valid ;
	}
	
	function IsValidEmail($email)
	{
		$validemail = false ;
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$validemail = true ;
			}
		return $validemail ;
	}
	
	function IsValidPassword($password)
	{
		$validpassword = false ;
		if(preg_match("/.{2,}/",$pass))
			{
				$validpassword = true ;
			}
		return $validpassword ;
	}
	
	function RetypePassword($password, $cpassword)
	{
		$matched = false ;
		if(strcmp($password, $cpassword) == true)
		{
			$matched = true ;
		}
		return $matched ;
	}


?>