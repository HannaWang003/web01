<p class="t cent botli">新增最新消息資料</p>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="width:80%;margin:auto;">
        <tr>
            <td style="text-align:end">最新消息資料內容: </td>
            <td><textarea name="text" style="width:80%;height:100px;"></textarea></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>