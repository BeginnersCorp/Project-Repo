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
    <form>
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
                <td><input name="name" type="text" value="Red Sports Seat 1"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Catagory</td>
                <td>:</td>
                <td><input name="name" type="text" value="Interior"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td>
                    <input name="name" type="float" value="2500.00">
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Details</td>
                <td>:</td>
                <td>
					<input name="name" type="text" value="Leather seat red color">
				</td>
                <td></td>
            </tr>
			<tr><td colspan="4"><hr /></td></tr>
			<tr>
                <td>Available Quantity</td>
                <td>:</td>
                <td>
					<input name="name" type="int" value="20">
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
                            <td><img width="48" src="../../../resources/products/red_sports_seat.jpg" /></td>
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