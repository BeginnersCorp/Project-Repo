<?php require_once "../Service Layer/validation_service.php"; ?>
<?php require_once "../Data Layer/admin_data_access.php"; ?>
<?php require_once "../Service Layer/admin_service.php"; ?>

<?php
		$email=$pass="" ;
		
		if($_SERVER['REQUEST_METHOD']=="POST")
		{
			$email=trim($_POST['email']);
			$pass=trim($_POST['pass']);
			$usertype=trim($_POST['user']);
			$valid = true ;
			
			if(empty($email))
			{
				$valid = false ;
				$emailErr = "*Field can not be empty" ;
			}
			else
			{
				if($usertype == "user")
				{
					if()
				}
			}
		}

?>

<html>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="authenticated/index.php" target="_parent" method="post">
        <br/>
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?$email?>" ></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="pass" value="<?$pass?>" ></td>
            </tr>
			<tr>
				<fieldset>
					<input name="user" value="admin" type="radio"/>Admin
					<input name="user" value="user" type="radio" checked />User
				</fieldset>
			</tr>
        </table>
		<hr/>
        <input type="submit" value="Submit">
        <a href="forgot_password.php">Forgot Password?</a>
    </form>
</fieldset>
</html>