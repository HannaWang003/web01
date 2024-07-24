<form method="post" action="./api/edit_bottom.php" method="post">
    <h2 class="t botli">頁尾版權管理</h2>
    <table style="margin:auto;" class="yel">
        <tr>
            <td style="text-align:end;padding:10px;">頁尾版權管理 ：</td>
            <th style="padding:10px;border:1px solid #999"><input name="bottom" type="text" style="width:300px;" value="<?= $Bottom->find(1)['bottom'] ?>"></th>
        </tr>
        <tr>
            <th colspan="2"><input value="修改確定" type="submit"><input type="reset" value="重置"></th>
        </tr>
    </table>
    <input type="hidden" name="id" value="1">
    <input type="hidden" name="table" value="bottom">
</form>