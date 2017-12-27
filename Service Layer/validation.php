<?php
   
    function isValidPersonName($name)
	{
		$parts = explode(" ", $name);
		$isValid = false;
		 if(count($parts)>1){
            if(preg_match("/[a-zA-Z ]/",$name)){
                $isValid = true;
            }
        }
        return $isValid;
					
    }
	
	function isValidPersonNum($num){
		$parts=str_word_count($num);
		$isValid = false;
		 if($parts==1){
            if(preg_match("/^[1-9][0-9]*$/",$num)){
                $isValid = true;
            }
        }
        return $isValid;
		
    }
	
    function isValidPersonUserName($uname){
		$parts=str_word_count($uname);
		$isValid = false;
		 if($parts==1){
            if(preg_match("/[a-zA-Z ]@$/",$uname)){
                $isValid = true;
            }
        }
        return $isValid;
		
    }
	
	 function isValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
	
	
	
	
	 function isValidPassword($pass)
	{
		$isValid = false;
		 if(preg_match("/.{2,}/",$pass)){
                $isValid = true;
            }
		return $isValid;
			
	}
	 function isValidRetypeaPassword($pass,$rpass)
	{
		$isValid = false;
		 if(strcmp($pass,$rpass)==true){
                $isValid = true;
            }
		return $isValid;
			
	}
?>
