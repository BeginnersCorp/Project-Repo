<?php
	require_once "../../../Data Layer/product_data_access.php";
	$productCode=$_GET['productCode'];
	$product=getProductByCodeFromDB($productCode);
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$product['Catagory']=$_POST['Catagory'];
		$product['Price']=$_POST['Price'];
		$product['Description']=$_POST['Description'];
		$product['Quantity']=$_POST['Quantity'];
		editProductToDb($product);
		echo "Updated";
	}
?>

<html>
<!--<script>
function goBack() {
    document.write('<a href="' + document.referrer + '">Go Back</a>');
}
</script>-->
<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>PRODUCT | EDIT</b></legend>
    <br/>
    <form method="post">
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
                <td><label><?=$product['Name']?></label></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Catagory</td>
                <td>:</td>
                <td><input name="Catagory" type="text" value="<?=$product['Catagory']?>"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td>
                    <input name="Price" type="float" value="<?=$product['Price']?>">
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Details</td>
                <td>:</td>
                <td>
					<input name="Description" type="text" value="<?=$product['Description']?>">
				</td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Available Quantity</td>
                <td>:</td>
                <td>
					<input name="Quantity" type="int" value="<?=$product['Quantity']?>">
				</td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Picture</td>
                <td>:</td>
                <td>
                    <table>
                        <tr>
                            <td><img width="48" src="../../../Application Layer/resources/products/<?=$product['Name']?>.jpg" /></td>
                            <td><input type="file"></td>
                        </tr>
                    </table>
                </td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Save">
        <input type="button" value="Back" onclick="goBack()">

		<script>
		function goBack() {
			window.history.back();
		}
		</script>
    </form>
</fieldset>
</html>