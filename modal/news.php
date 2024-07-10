<h1 class="cent">新增最新消息資料</h1>
<hr>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="margin:auto">
        <tr>
            <td style="text-align: end;">最新消息資料內容: </td>
            <td><textarea name="text" style="width:300px;height:150px;"></textarea></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>