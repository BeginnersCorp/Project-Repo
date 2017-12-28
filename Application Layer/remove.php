<?php session_start();
// var_dump($_SESSION['cart']);
$_SESSION['cart'][$_GET['code']]=array();
// var_dump($_SESSION['cart']);
// var_dump($_GET['code']);
echo "<script>
		
			alert(\"Product Removed From cart!\");
			document.location='cart.php';
		
		</script>";
?>
