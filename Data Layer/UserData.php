<?php require("DBconnection.php") 

	function CreateUser($user)
	{
		$query = "INSERT INTO user(email, name, password) VALUES ('$user[email]', '$user[name]', '$user[password]')" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
		
	}

	function UpdateUser($user)
	{
		$query = "UPDATE user SET email='$user[email]', name='$user[name]' WHERE id='$user[id]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function ChangePassword($user)
	{
		$query = "UPDATE user SET password='$user[password]' WHERE id='$user[id]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function DeleteUser($user)
	{
		$query = "DELETE FROM user WHERE id='$user[id]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function GetAllUsers()
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
	
	function SearchByName($name)
	{
		$query = "SELECT * FROM user WHERE Name LIKE '%$name%'";
        $resultset = ExecuteQuery($query);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($resultset); ++$i){
            $users[$i] = $row;
        }
        return $users;
	}
	
	function SearchByEmail($email)
	{
		$query = "SELECT * FROM user WHERE email='$user[email]'";
        $resultset = ExecuteQuery($query);
		$user = mysqli_fetch_assoc($resultset);
		return $user ;
	}

?>