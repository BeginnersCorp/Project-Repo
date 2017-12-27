<?php
		require("../Data Layer/UserData.php") ;
		
		
		function IsUniqueEmail($email)
		{
			$users = GetAllUsers() ;
			$unique = false ;
			foreach($users as $user)
			{
				if($user['Email'] != $mail)
				{
					$unique = true ;
					break;
				}
			}
			return $unique ;
		}
		
		function CreateUser($user)
		{
			return CreateUserDB($user);
		}
		
		function UpdateUser($user)
		{
			return UpdateUserDB($user);
		}
		
		function DeleteUser($user)
		{
			return DeleteUserDB($user);
		}
		
		function GetAllUsers()
		{
			return GetAllUsersDB();
		}
		
		function SearchByName($user)
		{
			return SearchByNameDB($user) ;
		}
		
		function SearchByEmail($user)
		{
			SearchByEmailDN($user) ;
		}
		
		function ChangePassword($user)
		{
			return ChangePasswordDB($user) ;
		}

?>