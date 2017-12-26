<?php require_once "../Service Layer/validation_service.php"; ?>

<?php
	$name=$email=$password=$cpassword="";
	$nameErr=$emailErr=$passErr=$cpassErr=$typeErr=$gErr="";
?>

<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=trim($_POST['name']);
        $email=trim($_POST['email']);
		$password=trim($_POST['password']);
		$cpassword=trim($_POST['cpassword']);
		
		$isValid = true;
        if(empty($email)){
            $isValid = false;
            $emailErr = "*";
        }
        else if(isValidEmail($email)==false){
            $isValid = false;
            $emailErr = "Invalid email format";
        }
		
		if(empty($name)){
            $isValid = false;
            $nameErr = "*";
        }
        else if(isValidPersonName($name)==false){
            $isValid = false;
            $nameErr = "At least two words required, Only letters and white space allowed";
        }
		
		/*if(empty($uname)){
            $isValid = false;
            $nameErr = "*";
        }
        else if(isValidPersonName($uname)==false){
            $isValid = false;
            $nameErr = "Invalid user name";
        }*/
		
		if(empty($password)){
            $isValid = false;
            $passErr = "*";
        }
		
		else if(isValidPassword($password)==false){
            $isValid = false;
            $passErr = "Minimum length 2";
        }
		
		if(empty($cpassword)){
            $isValid = false;
            $cpassErr = "*";
        }
		
		else if($password!=$cpassword){
            $isValid = false;
            $cpassErr = "Password doesn't match";
        }
		
		
		if($isValid==true){
			$id=getLastMemberIDFromDB()['MAX(Member_ID)'];
			$member['Member_ID']=$id+1;
			$member['Password']=$password;
			$member['Name']=$name;
			$member['Email']=$email;
			$member['Type']=4;
			$member['Status']='Active';
			
			if(addMemberToDB($member)==true){
				echo"done";
                echo "<script>
                        document.location='personalInfo.php?memberID=".$member['Member_ID']."';
                     </script>";
                die();
            }
            else{
                echo "Internal Error<hr/>";
            }
		
		}
		
    }
?>


<form method="post">
<html>
    <legend><b>REGISTRATION</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text">
                    <abbr title="hint: sample@example.com">
						<img height="17" width="17" src="../Application Layer/resources/images/i.png">
					</abbr>
                </td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Confirm Password</td>
                <td>:</td>
                <td><input name="confirmPassword" type="password"></td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Submit">
        <input type="reset">
    </form>
</fieldset>
</html>