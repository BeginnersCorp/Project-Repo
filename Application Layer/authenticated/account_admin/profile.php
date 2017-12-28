<?php session_start();
	require_once "../../../Data Layer/member_data_access.php";
	$server="localhost";
	$database="automart";
	$conn = mysqli_connect($server, "root", "", $database);
	
	
	if(isset($_SESSION['uname'])){
		$username = $_SESSION['uname'];
	}
	$member=getMemberByEmailFromDB($username);
	
?>

<html>
<fieldset>
    <legend><b>PROFILE</b></legend>
    <form>
        <br/>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?=$member['Name']?></td>
            </tr>		
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?=$member['Email']?></td>
            </tr>
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td><?php if($member['Type']=="1")echo "Admin"; else echo "User";?></td>
            </tr>
            <!--<tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>Active</td>
            </tr>-->
            <tr><td colspan="3"><hr/></td></tr>
            <tr>
                <td>User Since</td>
                <td>:</td>
                <td><?=explode(" ",$member['Member_Since'])[0]?></td>
            </tr>
        </table>	
        <hr/>
        <a href="edit_profile.php">Edit</a>
        <a href="dashboard.php">Dashboard</a>
    </form>
</fieldset>
</html>