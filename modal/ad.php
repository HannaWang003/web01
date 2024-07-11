<p class="t cent botli">新增動態文字廣告</p>
<form action="./api/add.php?table=<?= $_GET['table'] ?>" method="post">
    <table style="width:60%;margin:auto;">
        <tr>
            <td style="text-align:end">動態文字廣告: </td>
            <td><input type="text" name="text" style="width:300px"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>