<?php
if (!empty($_POST['total'])) {
    $Total->save($_POST);
    to("?do=total");
}
?>
<p class="t cent botli">進站總人數管理</p>
<form action="?do=total" method="post">
    <table width="60%" style="margin:auto;">
        <tbody>
            <tr class="yel">
                <td width="40%">進站總人數: </td>
                <td width="60%"><input type="text" name="total" value="<?= $Total->find(1)['total'] ?>"
                        style="width:90%"></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="id" value="1">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>