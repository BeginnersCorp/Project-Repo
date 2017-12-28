<?php	session_start();
if(isset($_POST['button1'])){
  $conn = mysqli_connect("localhost","root","","automart");
  $emailad = $passw = "";
  $emailErr = $passErr = "";
  $username="";

  //checking if the required inputs are filled

  if (isset($_POST['email'])) {
    $emailad = $_POST['email'];
  }
  if (isset($_POST['pass'])) {
    $passw = $_POST['pass'];
  }

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT Email FROM member where Email='$emailad' AND Password='$passw'";
//connecting to database
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $username = $row["Email"];
      
      $_SESSION['uname'] = $username;
  }
}
$conn->close();
}
else{
 // session_start();
  if(isset($_SESSION['uname'])){
    $username = $_SESSION['uname'];
  }
}
?>
<html>
<table width="100%" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="account_user/dashboard.php" target="contentFrame">
                            <img height="140" width="100%" src="../../Application Layer/resources/images/x.jpg">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="account_user/profile.php" target="contentFrame"><?=$username; ?></a>&nbsp;|
                        <a href="../../index.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="200" valign="top">
            <b>&nbsp;Account</b><hr />
            <ul>
                <li><a href="account_user/dashboard.php" target="contentFrame">Dashboard</a></li>
                <li><a href="account_user/profile.php" target="contentFrame">View Profile</a></li>
                <li><a href="account_user/edit_profile.php" target="contentFrame">Edit Profile</a></li>
                <li><a href="account_user/change_password.php" target="contentFrame">Change Password</a></li>
                <li><a href="../../index.php">Logout</a></li>
            </ul>
			<hr />
        </td>
        <td valign="top">
            <iframe name="contentFrame" frameborder="0" width="100%" height="530" src="account_user/dashboard.php"></iframe>
        </td>
    </tr>
</table>
<table width="100%" align="center" cellspacing="0" cellpadding="10" border="1">
	<tr>
		<td align="middle">
			<h2>Information<h2><br/>
			<a href="../about.php" target="contentFrame">About Us</a><br/>
			<a href="../contact.php" target="contentFrame">Contact Us</a>
		</td>
		
		<td align="center">
			Copyright &copy; 2017<br/>All rights reserved by AutoMart.com
		</td>
		
		<td align="middle">
			<h2>Our Location</h2><br/>
			Mirpur Shoping Complex<br/>Mirpur-2,Dhaka
		</td>
	</tr>
</table>
</html>