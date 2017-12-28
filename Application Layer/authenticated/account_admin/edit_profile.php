<?php session_start();
	require_once "../../../Data Layer/member_data_access.php";
	$server="localhost";
	$database="automart";
	$conn = mysqli_connect($server, "root", "", $database);
	
	
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	$member=getMemberByEmailFromDB($username);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$member['Name']=$_POST['name'];
		$member['Email']=$_POST['email'];
		editMemberToDB($member);
		echo "Updated";
	}
?>
<html>
<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
    <form method="post">
        <br/>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="<?=$member['Name']?>"></td>
                <td></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="<?=$member['Email']?>">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Save">	
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>
</html>