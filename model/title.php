<form method="post" action="../api/add.php" method="post" enctype="multipart/form-data">
    <h2 class="t botli">新增標題區圖片</h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">標題區圖片 ：</td>
            <td><input name="img" autofocus="" type="file"></td>
        </tr>
        <tr>
            <td style="text-align:end">標題區替代文字 ：</td>
            <td><input name="text" type="text"></td>
        </tr>
        <tr>
            <td colspan="2"><input value="新增" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="title">
</form>