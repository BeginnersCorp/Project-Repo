<?php session_start();
	require_once "../../../Data Layer/member_data_access.php";
	$email=$_SESSION['uname'];
	$member=getMemberByEmailFromDB($email);
	
	$cy=(int)date("Y");
	$cm=(int)date("m");
	$cd=(int)date("d");
	$y=(int)explode("-",$member['Last_Logged_in'])[0];
	$m=(int)explode("-",$member['Last_Logged_in'])[1];
	$d=(int)explode("-",$member['Last_Logged_in'])[2];
	
	if($cy==$y)
	{
		if($cm==$m)
		{
			if(($cd==$d)||($cd<$d))
			{
				$log="Today";
			}
			else
			{
				$log=($cd-$d)." day(s) ago";
			}
		}
		else
		{
			$log=($cm-$m)." month(s) ago";
		}
	}
	else
	{
		$log=($cy-$y)." year(s) ago";
	}
	
	$y=(int)explode("-",$member['Member_Since'])[0];
	$m=(int)explode("-",$member['Member_Since'])[1];
	$d=(int)explode("-",$member['Member_Since'])[2];
	
	if($cy==$y)
	{
		if($cm==$m)
		{
			if(($cd==$d)||($cd<$d))
			{
				$log1="Today";
			}
			else
			{
				$log1=($cd-$d)." day(s) ago";
			}
		}
		else
		{
			$log1=($cm-$m)." month(s) ago";
		}
	}
	else
	{
		$log1=($cy-$y)." year(s) ago";
	}
	
?>
<html>
<h3>Welcome <?=$member['Name']?></h3>
<table>
    <tr>
        <td><b>User Since</b></td>
        <td>:</td>
        <td><?=$log1?></td>
    </tr>
    <tr>
        <td><b>Last Login</b></td>
        <td>:</td>
        <td><?=$log?></td>
    </tr>
</table>

<h2><a href="request.php" target="contentFrame">1 request approval pending</h2></a>
</html>