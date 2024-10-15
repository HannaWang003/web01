<form action="../api/menu.php?do=<?= $_GET['do'] ?>" method="post">
    <p class="t botli">新增主選單</p>
    <table width="80%" style="margin:auto;">
        <tr>
            <th>主選單名稱</th>
            <th>主選單連結網址</th>
        </tr>
        <tr>
            <td class="cent"><input type="text" name="text" style="width:80%"></td>
            <td class="cent"><input type="text" name="url" style="width:80%"></td>
        </tr>
    </table>
    <p class="cent"><input value="新增" type="submit"><input type="reset" value="清除"></p>
</form>