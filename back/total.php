<?php
if (isset($_POST['total'])) {
    $DB->save($_POST);
    to("?do=$table");
}
?>
<p class="t cent botli">進站總人數管理</p>
<form method="post" action="?do=<?= $table ?>">
    <table class="yel" width="60%" style="margin:auto;">
        <tr>
            <td class="cent" width="40%;">進站總人數 : </td>
            <th><input type="text" name="total" value="<?= $DB->find(1)['total'] ?>" style="width:90%"></th>
            <input type="hidden" name="id" value="1">
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>