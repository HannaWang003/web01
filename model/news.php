<form method="post" action="../api/add.php" method="post">
    <h2 class="t botli">新增最新消息資料</h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">最新消息資料內容 ：</td>
            <td><textarea name="text" style="width:300px;height:200px;"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input value="新增" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="news">
</form>