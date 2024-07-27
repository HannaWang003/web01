<h2 class="t cent botli">新增最新消息資料</h2>
<form method="post" action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;">
    <table>
        <tr>
            <td style="text-align:end">最新消息資料內容：</td>
            <td><textarea name="text" style="width:300px;height:100px;"></textarea></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="news">
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>