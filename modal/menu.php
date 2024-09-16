<h2 class="cent">新增主選單</h2>
<hr>
<form action="./api/add.php?do=menu" method="post">
    <table style="margin:auto">
        <tr>
            <th>主選單名稱</th>
            <th>選單連結網址</th>
        </tr>
        <tr>
            <td><input type="text" name="text" style="width:90%;"></td>
            <td><input type="text" name="url" style="width:90%;"></td>
            <input type="hidden" name="big_id" value="0">
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>