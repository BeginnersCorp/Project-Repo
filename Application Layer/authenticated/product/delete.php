<?php
	require_once "../../../Data Layer/product_data_access.php";
	$productCode=$_GET['productCode'];
	$product=getProductByCodeFromDB($productCode);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if(deleteProductFromDB($product)==true)
		{
			echo "Successful"
			?><script>
                        function next()
						{
						document.location='../account_admin/dashboard.php';
						}
						window.setInterval(next,2000);
                     </script><?php
		}
	}
?>


<html>
<fieldset>
    <legend><b>USER | DELETE</b></legend>
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <td><?=$product['Name']?></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Catagory</td>
                <td>:</td>
                <td><?=$product['Catagory']?></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td><?=$product['Price']?></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Details</td>
                <td>:</td>
                <td><?=$product['Description']?></td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Sold Quantity</td>
                <td>:</td>
                <td><?=$product['Total_Sells']?></td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Available Quantity</td>
                <td>:</td>
                <td><?=$product['Quantity']?></td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Picture</td>
                <td>:</td>
                <td>
                    <table>
                        <tr>
                            <td><img width="150" height="200" src="../../../Application Layer/resources/products/<?=$product['Name']?>.jpg" /></td>
                            
                        </tr>
                    </table>
                </td>
                <td></td>
            </tr>
    </table>	
    <hr/>    
    <form method="post">
        <input type="submit" value="Delete"/>
        <input type="button" value="Back" onclick="goBack()">

		<script>
		function goBack() {
			window.history.back();
		}
		</script>
    </form>    
    <br/><br/>
</fieldset>
</html>