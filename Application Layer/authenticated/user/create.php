<html>
<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>USER | CREATE</b></legend>
    <br/>
    <form>   
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="100"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td>:</td>
                <td><input name="username" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value=""></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Role</td>
                <td>:</td>
                <td>
                    <select>
                        <option></option>
                        <option>Admin</option>
                        <option>Executive</option>
                        <option>User</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select>
                        <option></option>
                        <option >Active</option>
                        <option>Pending</option>
                        <option>Blocked</option>
                    </select>
                </td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Save">
        <a href="search.php">Back to Search</a>
    </form>
</fieldset>
</html>