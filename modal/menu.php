<p class="t cent botli">新增主選單</p>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="width:60%;margin:auto;">
        <tr>
            <td style="text-align:end">主選單名稱: </td>
            <td><input type="text" name="text" style="width:300px"></td>
        </tr>
        <tr>
            <td style="text-align:end">選單連結網址: </td>
            <td><input type="text" name="href" style="width:300px"></td>
        </tr>
    </table>
    <input type="hidden" name="big_id" value="0">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>