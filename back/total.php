<?php
if (isset($_POST['text'])) {
    $DB->save(["id" => 1, "text" => $_POST['text']]);
    to("?do=$table");
}
?>
<h2 class="cent">進站總人數管理</h2>
<hr>
<form action="?do=<?= $table ?>" method="post">
    <table class="yel" style="width:80%;margin:auto;">
        <tr>
            <td>進站總人數:</td>
            <th><input type="text" name="text" value="<?= $DB->find(1)['text'] ?>" style="width:80%;"></th>
        </tr>
    </table>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>