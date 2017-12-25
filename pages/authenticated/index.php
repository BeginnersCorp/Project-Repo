<html>
<table width="100%" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="2" valign="middle" height="70">
            <table width="100%">
                <tr>
                    <td>
                        <a href="../index.php">
                            <img height="140" width="800" src="../../resources/images/x.jpg">
                        </a>
                    </td>
                    <td align="right">
                        Logged in as <a href="account_admin/profile.php" target="contentFrame">Bob</a>&nbsp;|
                        <a href="../index.php">Logout</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="200" valign="top">
            <b>&nbsp;Account</b><hr />
            <ul>
                <li><a href="account_admin/dashboard.php" target="contentFrame">Dashboard</a></li>
                <li><a href="account_admin/profile.php" target="contentFrame">View Profile</a></li>
                <li><a href="account_admin/edit_profile.php" target="contentFrame">Edit Profile</a></li>
                <li><a href="account_admin/picture.php" target="contentFrame">Change Profile Picture</a></li>
                <li><a href="account_admin/change_password.php" target="contentFrame">Change Password</a></li>
                <li><a href="../index.php">Logout</a></li>
            </ul>
			<hr /><b>&nbsp;Product</b><hr />
            <ul>                
                <li>Products
                    <ul>
                        <li><a href="product/search.php" target="contentFrame">Product List</a></li>
                        <li><a href="product/create.php" target="contentFrame">Add Product</a></li>
						<li><a href="product/economy.php" target="contentFrame">Product Economy</a></li>
						<!--<li><a href="report/user/delete_product.php" target="contentFrame">Delete Product</a></li>-->
                    </ul>
                </li>
            </ul>
            <hr /><b>&nbsp;User</b><hr />
            <ul>                
                <li><a href="user/search.php" target="contentFrame">Search</a></li>
                <li><a href="user/create.php" target="contentFrame">Create New</a></li>
            </ul>
            <hr /><b>&nbsp;Report</b><hr />
            <ul>                
                <li>User Reports
                    <ul>
                        <li><a href="report/user/statistics_report.php" target="contentFrame">Statistics Report</a></li>
                        <li><a href="report/user/activity_report.php" target="contentFrame">Activity Report</a></li>
                    </ul>
                </li>
            </ul>
        </td>
        <td valign="top">
            <iframe name="contentFrame" frameborder="0" width="100%" height="530" src="account_admin/dashboard.php"></iframe>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>
</html>