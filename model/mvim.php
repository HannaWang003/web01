<h2 class="t cent botli">新增動畫圖片</h2>
<form method="post" action="./api/add.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;">
    <table>
        <tr>
            <td style="text-align:end">動畫圖片：</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="mvim">
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>