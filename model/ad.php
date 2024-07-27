<h2 class="t cent botli">新增動態文字廣告</h2>
<form method="post" action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;">
    <table>
        <tr>
            <td style="text-align:end">動態文字廣告：</td>
            <td><input type="text" name="text" id="" style="width:300px"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="ad">
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>