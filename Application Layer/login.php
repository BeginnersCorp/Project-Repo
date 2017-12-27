<html>
<fieldset>
    <legend><b>LOGIN</b></legend>
    <form action="authenticated/index.php" target="_parent">
        <br/>
        <table>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password"></td>
            </tr>
			<tr>
				<fieldset>
					<input name="user" value="admin" type="radio"/>Admin
					<input name="user" value="user" type="radio"/>User
				</fieldset>
			</tr>
        </table>
		<hr/>
        <input type="submit" value="Submit">
        <a href="forgot_password.php">Forgot Password?</a>
    </form>
</fieldset>
</html>