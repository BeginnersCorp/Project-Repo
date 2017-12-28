<?php
	require_once "../../../Data Layer/product_data_access.php";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$products=getAllProductsFromDB();
		$id=0;
			foreach($products as $p)
			{
				if($id<((int)$p['Product_Code']))
				{
					$id=(int)$p['Product_Code'];
				}
			}
		$product['Product_Code']=$id+1;
		$product['Name']=$_POST['product_name'];
		$product['Catagory']=$_POST['catagory'];
		$product['Price']=$_POST['price'];
		$product['Description']=$_POST['details'];
		$product['Quantity']=$_POST['available'];
		$product['Brand']=$_POST['brand'];
		
		if(addProductToDB($product)==false)
			echo "Internal Error";
		
		else
			echo "Successful";
		
		
		
		
	}
?>

<html>
<fieldset>This is message box</fieldset>
<br/>
<fieldset>
    <legend><b>PRODUCT | ADD</b></legend>
    <br/>
    <form method="post">   
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <td><input name="product_name" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Catagory</td>
                <td>:</td>
                <td><input name="catagory" type="text" value=""></td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Brand</td>
                <td>:</td>
                <td><input name="brand" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td>
                    <input name="price" type="float" value="">
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Details</td>
                <td>:</td>
                <td>
                    <input name="details" type="text" value="">
                </td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Available Quantity</td>
                <td>:</td>
                <td>
                    <input name="available" type="int" value="">
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Picture</td>
                <td>:</td>
                <td><input type="file"></td>
                <td></td>
            </tr>
        </table>
        <hr/>
        <input type="submit" value="Save"/>
        <input type="button" value="Back" onclick="goBack()"/>

		<script>
		function goBack() {
			window.history.back();
		}
		</script>
    </form>
</fieldset>
</html>