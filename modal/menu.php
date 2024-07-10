<h1 class="cent">新增主選單</h1>
<hr>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="margin:auto">
        <tr>
            <td style="text-align: end;">主選單名稱: </td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td style="text-align: end;">主選單連結網址: </td>
            <td><input type="text" name="url"></td>
        </tr>
    </table>
    <input type="hidden" name="big_id" value="0">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>