<p class="t cent botli">新增校園映像圖片</p>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post" enctype="multipart/form-data">
    <table style="width:60%;margin:auto;">
        <tr>
            <td style="text-align:end">校園映像圖片: </td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>