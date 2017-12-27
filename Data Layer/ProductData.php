<?php require("DBconnection.php") ;

	function AddNewProduct($product)
	{
		$query = "INSERT INTO product ('name', 'id', 'category', 'subcategory', 'buyprice', 'sellprice', 'quantity', 'photo') VALUES ('$product[name]', '$product[id]', '$product[category]', '$product[subcategory]', '$product[buyprice]', '$product[sellprice]', '$product[quantity]', '$product[photo]')" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function DeleteProduct($product)
	{
		$query = "DELETE FROM product WHERE id='$product[id]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function UpdateProduct($product)
	{
		$query = "UPDATE product SET name='$product[name]', '$product[id]', '$product[category]', '$product[subcategory]', '$product[buyprice]', '$product[sellprice]', '$product[quantity]', '$product[photo]'" ;
		$resultset = ExecuteQuery($query) ;
		return $resultset ;
	}
	
	function GetAllProducts()
	{
		$query = "SELECT * FROM product" ;
		$resultset = ExecuteQuery($query) ;
		$products = array();
		for($i=0 ; $row=mysqli_fetch_assoc($resultset) ; ++$i)
		{
			$products[i] = $row ;
		}
		return $products ;
	}
?>