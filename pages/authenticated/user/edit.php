<html>
<fieldset>This is message box</fieldset>
<br />
<fieldset>
    <legend><b>USER | EDIT</b></legend>
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
                <td>User Name</td>
                <td>:</td>
                <td>bob</td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="Bob Marsh"></td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input name="email" type="text" value="bob@aiub.edu">
                    <abbr title="hint: sample@example.com"><b>i</b></abbr>
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input name="gender" type="radio" checked="checked">Male
                    <input name="gender" type="radio">Female
                    <input name="gender" type="radio">Other
                </td>
                <td></td>
            </tr>
            <tr><td colspan="4"><hr /></td></tr>
            <tr>
                <td valign="top">Date of Birth</td>
                <td valign="top">:</td>
                <td>
                    <input name="dob" type="text" value="23/12/1999">
                    <font size="2"><i>(dd/mm/yyyy)</i></font>
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
                            <td><img width="48" src="../../../resources/images/user.png" /></td>
                            <td><input type="file"></td>
                        </tr>
                    </table>
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
                        <option selected>Admin</option>
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
                        <option selected>Active</option>
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