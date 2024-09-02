<p class="t cent botli">新增標題區圖片</p>
<form action="../api/add.php?do=<?= $_GET['table'] ?>" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">標題區圖片：</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td style="text-align:end">標題區替代文字：</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>