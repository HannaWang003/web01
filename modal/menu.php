<p class="t botli">新增主選單</p>
<form action="./api/menu.php?do=menu" method="post">
    <table class="all80">
        <tr>
            <th>主選單名稱</th>
            <th>主選單連結網址</th>
        </tr>
        <tr>
            <td class="cent"><input type="text" name="text" style="width:90%;"></td>
            <td class="cent"><input type="text" name="url" style="width:90%;"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>