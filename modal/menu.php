<h2 class="t cent botli">新增主選單</h2>
<form method="post" action="./api/edit.php?do=<?= $_GET['do'] ?>">
    <table width="80%" style="margin:auto">
        <tr>
            <th>主選單名稱</th>
            <th>主選單連結網址</th>
        </tr>
        <tr>
            <td><input type="text" name="text" id="" style="width:90%"></td>
            <td><input type="text" name="url" id="" style="width:90%"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>