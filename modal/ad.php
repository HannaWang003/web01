<p class="t cent botli">新增動態文字廣告</p>
<form action="../api/add.php?do=<?= $_GET['table'] ?>" method="post">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end">動態文字廣告：</td>
            <td><input type="text" name="text"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>