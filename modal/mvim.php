<h1 class="cent">新增動畫圖片</h1>
<hr>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post" enctype="multipart/form-data">
    <table style="margin:auto">
        <tr>
            <td style="text-align: end;">動畫圖片: </td>
            <td><input type="file" name="img"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>