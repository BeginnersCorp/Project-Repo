<?php require("DBconnection.php") 

	function CreateUserDB($user)
	{
		$query = "INSERT INTO user(email, name, password) VALUES ('$user[email]', '$user[name]', '$user[password]')" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
		
	}

	function UpdateUserDB($user)
	{
		$query = "UPDATE user SET email='$user[email]', name='$user[name]' WHERE id='$user[id]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function ChangePasswordDB($user)
	{
		$query = "UPDATE user SET password='$user[password]' WHERE email='$user[email]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function DeleteUserDB($user)
	{
		$query = "DELETE FROM user WHERE email='$user[email]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function GetAllUsersDB()
	{
		$users = array() ;
		$query = "SELECT * FROM user" ;
		$resultset = ExecuteQuery($query) ;
		for($i=0 ; $row=mysqli_fetch_assoc($resultset) ; ++$i)
		{
			$users[$i] = $row ;
		}
		return $users ;
	}
	
	function SearchByNameDB($user)
	{
		$query = "SELECT * FROM user WHERE Name LIKE '%$user[name]%'";
        $resultset = ExecuteQuery($query);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($resultset); ++$i){
            $users[$i] = $row;
        }
        return $users;
	}
	
	function SearchByEmailDB($user)
	{
		$query = "SELECT * FROM user WHERE email='$user[email]'";
        $resultset = ExecuteQuery($query);
		$user = mysqli_fetch_assoc($resultset);
		return $user ;
	}
?>