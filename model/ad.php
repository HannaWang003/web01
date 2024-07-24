<form method="post" action="../api/add.php" method="post" enctype="multipart/form-data">
    <h2 class="t botli">新增動態文字廣告</h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">動態文字廣告 ：</td>
            <td><input name="text" type="text" style="width:300px;"></td>
        </tr>
        <tr>
            <td colspan="2"><input value="新增" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="ad">
</form>