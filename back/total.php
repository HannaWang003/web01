<?php
if (isset($_POST['total'])) {
    $Total->save(['id' => 1, 'total' => $_POST['total']]);
    to("?do=total");
}

?>
<h2 class="cent">進站總人數管理</h2>
<hr>
<form action="?do=total" method="post">
    <table style="margin:auto;width:60%;">
        <tr class="yel">
            <td>進站總人數: </td>
            <td><input type="text" name="total" value="<?= $Total->find(1)['total'] ?>" style="width:80%"></td>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>