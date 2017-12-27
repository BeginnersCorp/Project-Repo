<?php require_once "data_access.php"; ?>
<?php
	function addMemberToDB($member)
	{
        $sql = "INSERT INTO admin(Member_ID, Name, Email, Password) VALUES ('$member[Member_ID]', '$member[Name]', '$member[Email]', '$member[Password]')" ;
        $result = executeSQL($sql);
        return $result;
    }

	function editMemberToDB($member)
	{
        $sql = "UPDATE admin SET Name='$member[Name]',Email='$member[Email]', Password='$member[Password]' WHERE Member_ID='$member[Member_ID]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function changeMemberPasswordToDB($pass,$id)
	{
        $sql = "UPDATE admin SET Password='$pass' WHERE Member_ID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function updateLastActiveToDB($id)
	{
        $sql = "UPDATE admin SET Last_Logged_in=GETDATE() WHERE Member_ID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function deleteMemberFromDB($member)
	{
        $sql = "DELETE FROM admin WHERE Member_ID='$member[Member_ID]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function getAllMembersFromDB()
	{
        $sql = "SELECT * FROM admin";        
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $members[$i] = $row;
        }
        return $members;
    }
	
	function getLastMemberIDFromDB()
	{
        $sql = "SELECT MAX(Member_ID) FROM admin";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
	
	function getMemberByIDFromDB($Member_ID)
	{
        $sql = "SELECT * FROM admin WHERE Member_ID=$Member_ID";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
	
	function getMemberByUserNameFromDB($User_Name)
	{
        $sql = "SELECT * FROM admin WHERE User_Name=$User_Name";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }

	function getMembersByNameFromDB($Name)
	{
        $sql = "SELECT * FROM admin WHERE Name LIKE '%$Name%'";
        $result = executeSQL($sql);
        
        $members = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $members;
    }
	
	function getMemberByEmailFromDB($Email)
	{
        $sql = "SELECT * FROM admin WHERE Email=$Email";        
        $result = executeSQL($sql);
        
        $member = mysqli_fetch_assoc($result);
        
        return $member;
    }
?>