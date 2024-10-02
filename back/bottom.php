<?php
if (isset($_POST['bottom'])) {
    $DB->save($_POST);
    to("?do=$table");
}
?>
<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="?do=<?= $table ?>">
    <table class="yel" width="60%" style="margin:auto;">
        <tr>
            <td class="cent" width="40%;">頁尾版權料 : </td>
            <th><input type="text" name="bottom" value="<?= $DB->find(1)['bottom'] ?>" style="width:90%"></th>
            <input type="hidden" name="id" value="1">
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>