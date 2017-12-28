<?php session_start(); ?>
<?php require_once "../Service Layer/member_service.php"; ?>
<?php
	if(isset($_COOKIE['user_qty']))
	{

		$noOfProduct=count($_COOKIE['user_qty']);
	}
	else
	{
		$noOfProduct=0;
	}
	

	if(isset($_SESSION['member_name']))
	{
		$memberName=$_SESSION['member_name'];
		$memberID=$_SESSION['member_id'];
	}
	else
	{
		$memberID="";
	}
?>

<html>
<script>
	function validate(){
		
		var nameTextBox = document.getElementById("name");
		var passTextBox = document.getElementById("pass");
		
				
		var nameMsgBox = document.getElementById("namemsg");	
		var passMsgBox = document.getElementById("passmsg");	

		name = nameTextBox.value;	
		pass = passTextBox.value;
		
		
		if(name==""){
			nameMsgBox.innerHTML = "*Field can not be empty";return false;
		}else{
			nameMsgBox.innerHTML = "";
		}
		if(pass==""){
			passMsgBox.innerHTML = "*Field can not be empty";return false;
		}
		else{
			passMsgBox.innerHTML = "";return true;
		}
		
	}
</script>

<?php
	 if($_SERVER['REQUEST_METHOD']=="POST")
	 {
		$members=getAllMembersFromDB();
		$email=trim($_POST['email']);
		$pass=trim($_POST['pass']);
			$v=false;
		foreach($members as $member)
		{
				if($member['Email']==$email)
				{
					if($member['Password']==$pass)
					{
						// session_start();
						// $_SESSION['easylife_email'] = $email;
						
						if($member['Type']=="1")
						{
							echo "<script>				
									document.location='authenticated/index.php';
								 </script>";
						}
						if($member['Type']=="0")
						{
							$_SESSION['member_id']=$member['Member_ID'];
								$_SESSION['member_name']=$member['Name'];
							echo "<script>				
									document.location='authenticated/index_user.php';
								 </script>";
						}
						
					}
					else{
						echo "<div><font color=red>"."Login was unsuccessful.<br/>Wrong password!!!"."</font></div>";
					}
					$v=true;
				}
		}
		if($v==false){echo "<div><font color=red>"."Login was unsuccessful.<br/>Customer account not found!!!"."</font></div>";}
	 }
?>
<fieldset >
    <legend><b>LOGIN</b></legend>
    <form target="_parent" method="post">
        <br/>
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input id="name" name="email" size="50"/><span id="namemsg"></span></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" id="pass" name="pass" size="50"/><span id="passmsg"></span></td>
            </tr>
        </table>
		<hr/>
        <input type="submit" name="button1" value="Login" />
        <a href="forgot_password.php">Forgot Password?</a>
    </form>
</fieldset>
</html>
