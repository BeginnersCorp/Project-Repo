<?php session_start();
	require_once "../../../Data Layer/member_data_access.php";
	$server="localhost";
	$database="automart";
	$conn = mysqli_connect($server, "root", "", $database);
	
	
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}

	if(isset($_POST['butto'])){
			$curpass = $_POST['cpass'];
			$newpass = $_POST['npass'];
			$repass = $_POST['rpass'];
			
			$member=getMemberByEmailFromDB($username);
			
			if($member['Password']==$curpass)
			{
				
				if($newpass==$repass)
				{
					
				
			
				$sql = "UPDATE member SET Password='$repass' WHERE Email='$username' ";
			
				if ($conn->query($sql) === TRUE){
					echo 'UPDATED';
				}
				}
				else
					echo "Password Doesn't match";
			}
			else
				echo "Wrong pass";
			
			
			
			
	}
$conn->close();

?>
<html>
<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <br/>
    <form action="" method="post">
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="150"></td>
                <td width="10"></td>
                <td width="150"></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3">Current Password</font></td>
				<td>:</td>
                <td><input type="password" name="cpass"/></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
				<td>:</td>
                <td><input type="password" name="npass" /></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
				<td>:</td>
                <td><input type="password" name="rpass"/></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <button type="submit" name="butto">Save</button>
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>
</html>
