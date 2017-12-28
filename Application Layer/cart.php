<?php session_start();
	$i=0;
	$p=0;
?>
<html>
        <b>SHOPPING CART</b>

<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
    <tr>
		<th align="center">PICTURE</th>
        <th align="center">PRODUCT NAME</th>
        <th align="center">PRICE</th>
		<th align="center">QUANTITY</th>
        <th colspan="3"></th>
    </tr>
	<?php 
	
	foreach($_SESSION['cart'] as $product)
	{
		if(!($product==array()))
		{
		?>
    <tr>
        <td align="center" width="80"><a> <img src="../Application Layer/resources/products/<?=$product['Name']?>.jpg"  width="80" height="100"> </a></td>
        <td align="center"><?=$product['Name']?></td>
        <td align="center"><?=$product['Price']?></td>
		<td align="center"><?=$product['Quantity']?></td>
		<td align="center"><a href="remove.php?code=<?=$i?>">REMOVE</a></td>
    </tr>
	<?php
			
			$p=$p+(int)$product['Price'];
	}$i++;
	}
	?>
<!--    <tr>
        <td align="center" width="80"><a> <img src="../Application Layer/resources/products/red_sports_seat1.jpg"  width="80" height="100"> </a></td>
        <td align="center">Red Sports Seat 2</td>
        <td align="center">28000</td>
		<td align="center">1</td>
		<td align="center"><a href="">REMOVE</a></td>
    </tr>
    <tr>
        <td align="center" width="80"><a> <img src="../Application Layer/resources/products/stearing_wheel.jpg"  width="80" height="100"> </a></td>
        <td align="center">Stearing Wheel</td>
        <td align="center">15000</td>
		<td align="center">1</td>
		<td align="center"><a href="">REMOVE</a></td>
    </tr>-->
</table>
<table width="100%" cellspacing="0" border="1" cellpadding="5">
	<tr>
        <td><h1>Total: <?=$p?> Taka</h1></td>
		<td align="center"><a href="checkout.php"><h3>Proceed to checkout</h3></a></td>
    </tr>
</table>
</html>
