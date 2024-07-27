<p class="t cent botli">進站總人數管理</p>
<?php
if (!empty($_POST['total'])) {
    $Total->save($_POST);
    to("?do=total");
}
?>
<form method="post" action="?do=total">
    <table width="60%" style="margin:auto">
        <tbody>
            <tr class="yel">
                <td width="40%">進站總人數：</td>
                <th width="60%"><input type="text" name="total" value="<?= $Total->find(1)['total'] ?>" style="width:95%"></td>
            </tr>
            <input type="hidden" name="id" value="1">
        </tbody>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>