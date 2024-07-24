<form method="post" action="../api/add_menu.php" method="post">
    <h2 class="t botli">新增主選單</h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">主選單名稱 ：</td>
            <td><input name="text" type="text" style="width:300px;"></td>
        </tr>
        <tr>
            <td style="text-align:end">選單連結網址 ：</td>
            <td><input name="href" type="text" style="width:300px;"></td>
        </tr>
        <tr>
            <td colspan="2"><input value="新增" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <input type="hidden" name="big_id" value="0">
</form>