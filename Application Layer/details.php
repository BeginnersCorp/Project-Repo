<?php session_start();
	require_once "../Data Layer/product_data_access.php";
	$code=$_GET['code'];
	$product=getProductByCodeFromDB($code);
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	 {
		 $_SESSION['cart'][]=$product;
		 echo "<script>
		
			alert(\"Product added to cart!\");
			document.location='home.php';
		
		</script>";
	 }
?>	

<html>
	<head>
		<title>
			
		</title>
	<head>
	
	<body>
		<script>
		function msg()
		{
			alert("Product added to cart!");
		}
		</script>
			<table border=5 height="100%">
				<tr width="100%">
					<td>
						<img src="../Application Layer/resources/products/<?=$product['Name']?>.jpg" alt="../resources/products/<?=$product['Name']?>.jpg" height="500" width="400" >
					</td>
					<td width="100%" valign="top" align="center">
						<h1><u><b>Product name : <?=$product['Name']?></b></u><h1> <br><br>
						<h3>Details : <?=$product['Description']?><h3><br>
						<table border=2 width="40%" height="20%" cellpadding="10">
						    <tr>
							<td>Type:</td>
							<td><?=$product['Catagory']?></td>
							</tr>
							<tr>
							<td>Brand:</td>
							<td><?=$product['Brand']?></td>
							</tr>
							
							<td>Price:</td>
							<td><?=$product['Price']?> Tk</td>
							</tr>
						</table><br/>
						<form method="post">
						<input type="submit"	value="Add to cart"/>
						</form>
					</td>
				</tr>
			</table>
			
	</body>
	
</html>	