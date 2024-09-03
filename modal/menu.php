<p class="t cent botli">新增主選單</p>
<form action="../api/add_menu.php" method="post">
    <table style="margin:auto;">
        <tr class="yel">
            <td width="30%">主選單名稱</td>
            <td width="30%">選單連結網址</td>
        </tr>
        <tr>
            <td><input type="text" name="text" style="width:90%"></td>
            <td><input type="text" name="url" style="width:90%"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>