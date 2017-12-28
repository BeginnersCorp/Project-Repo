<?php
	require_once "../../../Data Layer/product_data_access.php";
	$products=getAllProductsFromDB();
?>

<html>
<fieldset>
    <legend>
        <b>PRODUCT | SEARCH</b>
    </legend>
    Filter By
    <select>
        <option>Any</option>
        <option>Interior</option>
        <option>Exterior</option>
        <option>Engine</option>
    </select>
    <input />
    <input type="submit" value="Search" />
    <a href="create.php">Create New</a>
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