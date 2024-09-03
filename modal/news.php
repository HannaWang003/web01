<p class="t cent botli">新增最新消息資料</p>
<form action="../api/add.php?do=<?= $_GET['do'] ?>" method="post">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">最新消息資料內容：</td>
            <td><textarea name="text" style="height:50px;"></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>