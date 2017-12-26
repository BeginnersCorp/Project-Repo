<?php
	$server="localhost";
    $username="root";
    $password="";
    $dbname="ecommerce";
    $port=3306;
	
	function ExecuteQuery($query)
	{
		global $server, $username, $password, $dbname, $port ;
		$connection = mysqli_connect($server, $username, $password, $dbname, $port) ;
		$resultset = mysqli_query($connection, $sql) ;
		mysqli_close($connection) ;
		return $resultset ;
	}

?>