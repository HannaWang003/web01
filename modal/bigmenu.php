<h1 class="cent">新增主選單</h1>
<hr>
<form action="../api/menu.php?do=menu" method="post">
    <table width="80%" style="margin:auto;">
        <tr>
            <th>主選單名稱</th>
            <th>選單連結網址</th>
        </tr>
        <tr>
            <th><input type="text" name="text" style="width:90%"></td>
            <th><input type="text" name="url" style="width:90%"></td>
                <input type="hidden" name="big_id" value="0">
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>