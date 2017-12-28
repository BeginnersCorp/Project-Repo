<?php
	require_once "../../../Data Layer/product_data_access.php";
	$products=getAllProductsFromDB();
	$s="";
	$ss="";
	
	if(isset($_GET['s']))
	{
		$s=$_GET['s'];
		if($_GET['s']=="1")
		{
		$products=getAllProductsByPartFromDB("Interior");
		$ss="Interior";
		}
		if($_GET['s']=="2")
		{
		$products=getAllProductsByPartFromDB("Exterior");
		$ss="Exterior";
		}
		if($_GET['s']=="3")
		{
		$products=getAllProductsByPartFromDB("Engine");
		$ss="Engine";
		}
		if($_GET['s']=="0")
		$products=getAllProductsFromDB();
		
		
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if($_POST['se']!="")
		{
			if($ss=="")
			$products=getProductsByNameFromDB($_POST['se']);
		
			else
				$products=getProductsByNameAndPartFromDB($_POST['se'],$ss);
		}
	}
	
?>

<html>
<fieldset>
    <legend>
        <b>PRODUCT | SEARCH</b>
    </legend>
	<table>
	<tr>
	<td width="250">
    Filter By
    <select onchange="location = this.value;">
        <option value="search.php?s=0" <?php if($s=="0") echo "selected";?>>Any</option>
        <option value="search.php?s=1" <?php if($s=="1") echo "selected";?>>Interior</option>
        <option value="search.php?s=2" <?php if($s=="2") echo "selected";?>>Exterior</option>
        <option value="search.php?s=3" <?php if($s=="3") echo "selected";?>>Engine</option>
    </select>
	</td>
	<td>
	<form method="post">
    <input name="se"/>
    <input type="submit" value="Search" />
	
    <a href="create.php">Create New</a>
	</form>
	</td>
	</tr>
	</table>
</fieldset>
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
		<th align="center">PICTURE</th>
        <th align="center">PRODUCT NAME</th>
        <th align="center">CATAGORY</th>
        <th align="center">PRICE</th>
		<th align="center">SOLD QUANTITY</th>
		<th align="center">AVAILABLE QUANTITY</th>
        <th colspan="3"></th>
    </tr>
	<?php 
	foreach($products as $product)
	{
		?>
    <tr>
        <td align="center" width="80"><a> <img src="../../../Application Layer/resources/products/red_sports_seat.jpg"  width="80" height="100"> </a></td>
        <td align="center"><?=$product['Name']?></td>
		<td align="center"><?=$product['Catagory']?></td>
        <td align="center"><?=$product['Price']?></td>
		<td align="center"><?=$product['Total_Sells']?></td>
		<td align="center"><?=$product['Quantity']?></td>
        <td align="center" width="40"><a href="detail.php?productCode=<?=$product['Product_Code']?>">Detail</a></td>
        <td align="center" width="30"><a href="edit.php?productCode=<?=$product['Product_Code']?>">Edit</a></td>
        <td align="center" width="45"><a href="delete.php?productCode=<?=$product['Product_Code']?>">Delete</a></td>
    </tr>
	
	<?php } ?>
    
</table>
</html>